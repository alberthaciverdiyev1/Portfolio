import authRoutes from "./AuthRoutes.js";
import blogRoutes from "./BlogRoutes.js";
import HomeController from "../Controllers/HomeController.js";
import projectRoutes from "./ProjectRoutes.js";
import contactRoutes from "./ContactRoutes.js";
import serviceRoutes from "./ServiceRoutes.js";


export default async function route(fastify, options) {
    fastify.get('/',HomeController.homePage)


    fastify.register(authRoutes);
    fastify.register(blogRoutes);
    fastify.register(projectRoutes);
    fastify.register(contactRoutes);
    fastify.register(serviceRoutes);

}
