import { guestOnly } from "../Middlewares/AuthMiddleware.js";
import projectController from "../Controllers/ProjectController.js";
import ContactController from "../Controllers/ContactController.js";

export default async function contactRoutes(fastify, options) {
    fastify.get('/contact', { preHandler: guestOnly }, ContactController.contactPage);
    fastify.post('/contact', { preHandler: guestOnly }, ContactController.contactPage);

}
