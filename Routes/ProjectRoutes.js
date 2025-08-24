import { guestOnly } from "../Middlewares/AuthMiddleware.js";
import projectController from "../Controllers/ProjectController.js";

export default async function projectRoutes(fastify, options) {
    fastify.get('/projects', { preHandler: guestOnly }, projectController.projectView);
}
