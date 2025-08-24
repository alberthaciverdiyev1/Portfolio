import { guestOnly } from "../Middlewares/AuthMiddleware.js";
import Auth from "../Controllers/Admin/AuthController.js";

export default async function authRoutes(fastify, options) {
    fastify.get('/auth', { preHandler: guestOnly }, Auth.AuthView);
    fastify.post('/register', { preHandler: guestOnly }, Auth.Register);
    fastify.post('/login', { preHandler: guestOnly }, Auth.Login);
    fastify.get('/logout', Auth.Logout);
}
