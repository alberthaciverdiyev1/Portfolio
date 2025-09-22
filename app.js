import Fastify from 'fastify'
import pointOfView from '@fastify/view'
import handlebars from 'handlebars'
import routes from './Routes/Routes.js'
import fastifyStatic from '@fastify/static'
import * as path from 'node:path'
import { fileURLToPath } from 'node:url'
import fastifyCookie from '@fastify/cookie'
import secureSession from '@fastify/secure-session'
import { globSync } from 'glob'
import fs from 'fs'
import { getData } from './Helpers/callApi.js'
import dotenv from 'dotenv'
import i18n from './Plugins/i18n.js'
import i18next from 'i18next'
import multipart from '@fastify/multipart'
import fastifyMinify from 'fastify-minify'
import fastifyFormbody from '@fastify/formbody'
import './Helpers/db.js'

dotenv.config()

const __dirname = path.dirname(fileURLToPath(import.meta.url))

const partialsDir = path.join(__dirname, 'Views', 'Partials')
const partials = {}
const globPattern = path.join('**', '*.hbs').replace(/\\/g, '/')
const files = globSync(globPattern, { cwd: partialsDir, posix: true })

files.forEach(file => {
    const name = file.replace(/\.hbs$/, '').replace(/\//g, '.')
    partials[name] = path.join('Partials', file).replace(/\\/g, '/')
})

const fastify = Fastify({ logger: false })

await fastify.register(fastifyCookie)
await fastify.register(i18n)
await fastify.register(fastifyFormbody)
await fastify.register(multipart, {
    limits: {
        fileSize: 10 * 1024 * 1024, // Maks 10MB
    }
});
fastify.register(secureSession, {
    key: fs.readFileSync(path.join(__dirname, 'secret-key')),
    cookie: {
        path: '/',
        httpOnly: true,
        secure: false,
        maxAge: 30 * 24 * 60 * 60,
    },
})

await fastify.register(fastifyStatic, {
    root: path.join(__dirname, process.env.NODE_ENV === 'production' ? 'Dist' : 'Public'),
    prefix: '/',
})

await fastify.register(fastifyMinify, {
    cache: 2000,
    global: true,
    minInfix: false,
    validate: (req, reply, payload) => {
        const contentType = reply.getHeader('content-type') || ''
        return contentType.includes('application/json') && typeof payload === 'string'
    },
})




handlebars.registerHelper('t', function (key, options) {
    const lang = options?.data?.root?.lang || 'az'
    try {
        const t = i18next.getFixedT(lang)
        return t(key)
    } catch (e) {
        console.warn('Translation error:', e)
        return key
    }
})


handlebars.registerHelper('ifNo', function (value, options) {
    if (!value) {
        return options.fn(this)
    } else {
        return options.inverse(this)
    }
})



handlebars.registerHelper('readTime', function (words) {
    return Math.ceil(words.length / 200)
})



fastify.register(pointOfView, {
    engine: { handlebars },
    root: path.join(__dirname, 'Views'),
    layout: 'Main',
    viewExt: 'hbs',
    options: {
        partials,
        cache: false,
    },
    defaultContext: {
        useLayout: true,
        isProduction: process.env.NODE_ENV === 'production',
    },
})

fastify.addHook('onRequest', async (request, reply) => {
    console.log(`[${new Date().toISOString()}] ${request.method} ${request.url}`)
})

fastify.addHook('preHandler', async (request, reply) => {
    const statics = /\.(css|js|png|jpg|jpeg|gif|webp|svg|ico|woff2?|ttf|eot|json)$/i;

    if (statics.test(request.raw.url)) {
        return;
    }

    const accept = request.headers['accept'] || '';
    if (accept.includes('application/json')) {
        return;
    }

    const originalView = reply.view.bind(reply);

    reply.view = async (template, data = {}, opts = {}) => {
        const user = request.session.get('user') || null;
        const jwtToken = request.session.get('jwt_token') || null;

        const currentRoute = (request.routerPath || request.raw.url || '').split('/').join('');


        data.session = { user, jwtToken };
        data.user = user;
       // data.setting = await getData('/settzzing', [], false, true, true);
      //  data.seo = await getData(`/seo/${currentRoute}`, [], false, true, true);
        console.log(data.seo);
        data.lang = request.cookies.lang || 'en';

        return originalView(template, data, opts);
    };
});


fastify.register(routes, { prefix: '/' })

// Example route
fastify.get('/test', async (request, reply) => {
    return {
        message: request.t('hello'),
    }
})

fastify.listen({ port: 2000, host: '0.0.0.0' }, err => {
    if (err) {
        console.error(err)
        process.exit(1)
    }
    console.log('Server running on http://localhost:2000')
})
