import {css, js} from "../Helpers/assets.js";
import {postData} from "../Helpers/callApi.js";



async function contactPage(request, reply) {
    if (request.method === 'POST') {
        const {email, text} = request.body;
        return postData(`/contact`, {email, text});
    }

    const view = {
        title: 'Contact Page',
        css: css(['contacts.css']),
        js: js(['contactUs.js']),
    };

    return reply.view('Pages/Static/Contact.hbs', view);
}
export default {contactPage}



