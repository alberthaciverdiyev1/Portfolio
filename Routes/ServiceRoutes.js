import { guestOnly } from "../Middlewares/AuthMiddleware.js";
import Service from '../Controllers/Admin/ServiceController.js'

export default async function serviceRoutes(fastify, options) {
    fastify.register(async function (fastify) {

        fastify.get('/', {preHandler:guestOnly}, Service.List);

        fastify.post('/', Service.Add);

        fastify.post('/:id', Service.Edit);

        fastify.post('/delete/:id', Service.Delete);

    }, { prefix: '/service' });
}
