import {getData} from "../Helpers/callApi.js";
import {css, js} from "../Helpers/assets.js";

async function listView(request, reply) {
    const blogs = await getData('/blog', [], false, false, false);

    console.log({blogs});
    const view = {
        title: 'Blog Page',
        css: css(['blog.css', 'app.css', 'components.css', 'listing-details.css', 'agencies.css']),
        js: js(['blog.js', 'gotop.js', 'app.js']),
        blogs: blogs
    };

    return reply.view('Pages/Blog/List.hbs', view);
}

async function Details(request, reply) {
    const {slug} = request.params;

    const blog = await getData(`/blog/${slug}`);

    const view = {
        title: blog.title || 'Blog Details',
        css: css(['blog-detail.css', 'app.css', 'components.css', 'listing-details.css', 'agencies.css', 'blog.css']),
        js: js(['blog-detail.js', 'gotop.js', 'app.js']),
        blog: blog,
    };
    return reply.view('Pages/Blog/Details.hbs', view);
}

export default {listView, Details}


