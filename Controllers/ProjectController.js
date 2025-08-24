import {css, js} from "../Helpers/assets.js";



async function projectView(request, reply) {
    const view = {
        title: 'Project Page',
        css: css(['projects.css']),
        js: js([]),
    };

    return reply.view('Pages/Project/List.hbs', view);
}


export default {projectView}


