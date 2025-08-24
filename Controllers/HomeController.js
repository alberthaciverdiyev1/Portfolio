import axios from 'axios';
import {css, js} from "../Helpers/assets.js";
import {getData, postData} from "../Helpers/callApi.js";

async function homePage(request, reply) {
    try {
        const view = {
            title: 'Home Page',
            css: css(['home.css', 'app.css', 'components.css']),
            js: js(['home.js', 'app.js']),
            data:{

            }

        };

        return reply.view('Pages/Home.hbs', view);
    } catch (error) {
        console.error('API yükləmə zamanı xəta:', error);
        return reply.view('Pages/Home.hbs', { title: 'Home Page', cities: [] });
    }
}

async function contactPage(request, reply) {
    if (request.method === 'POST') {
        const {email, text} = request.body;
        return postData(`/contact`, {email, text});
    }

    const view = {
        title: 'Contact Page',
        css: css([]),
        js: js(['contactUs.js']),
    };

    return reply.view('Pages/Static/Contact.hbs', view);
}
export default {contactPage, homePage}
