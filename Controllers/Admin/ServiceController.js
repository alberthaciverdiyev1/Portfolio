import { css, js } from "../../Helpers/assets.js";
import path from "path";
import fs from "fs";
import {
    createService,
    serviceList,
    updateService,
    deleteService,
} from "../../Helpers/Queries/serviceQueries.js";

const PUBLIC_SERVICES_DIR = path.join(process.cwd(), "Public", "Services");
if (!fs.existsSync(PUBLIC_SERVICES_DIR)) {
    fs.mkdirSync(PUBLIC_SERVICES_DIR, { recursive: true });
}


async function List(request, reply) {
    const services = serviceList();

    return reply.view("Pages/Admin/Services/List.hbs", {
        css: css([]),
        js: js([]),
        useLayout: false,
        data: { services },
    });
}

async function Add(request, reply) {
    try {
        const parts = request.parts();
        let icon, title, description, imageName;

        for await (const part of parts) {
            if (part.file) {
                imageName = `${Date.now()}_${part.filename}`;
                const filePath = path.join(PUBLIC_SERVICES_DIR, imageName);
                const buffer = await part.toBuffer();
                fs.writeFileSync(filePath, buffer);
            } else {
                if (part.fieldname === "icon") icon = part.value;
                if (part.fieldname === "title") title = part.value;
                if (part.fieldname === "description") description = part.value;
            }
        }

        const result = createService(icon, title, description, imageName);
        return reply.redirect('/service');
    } catch (err) {
        console.error(err);
        return reply.code(500).send({ error: "An Error Occurred" });
    }
}

async function Edit(request, reply) {
    try {
        const { id } = request.params;
        let icon, title, description, imageName = null;

        const parts = request.parts();

        for await (const part of parts) {
            if (part.file && part.filename) {
                imageName = `${Date.now()}_${part.filename}`;
                const filePath = path.join(PUBLIC_SERVICES_DIR, imageName);
                const buffer = await part.toBuffer();
                fs.writeFileSync(filePath, buffer);
            } else {
                if (part.fieldname === "icon") icon = part.value;
                if (part.fieldname === "title") title = part.value;
                if (part.fieldname === "description") description = part.value;
            }
        }

        if (imageName) {
            updateService(id, icon, title, description, imageName);
        } else {
            updateService(id, icon, title, description);
        }

        return reply.redirect('/service');
    } catch (err) {
        console.error(err);
        return reply.code(500).send({ error: "An Error Occurred" });
    }
}

async function Delete(request, reply) {
    try {
        const { id } = request.params;

        const service = serviceList().find((s) => s.id === parseInt(id));

        if (service && service.image) {
            const filePath = path.join(PUBLIC_SERVICES_DIR, service.image);
            if (fs.existsSync(filePath)) fs.unlinkSync(filePath);
        }

        deleteService(id);

        return reply.redirect('/service');
    } catch (err) {
        console.error(err);
        return reply.code(500).send({ error: "An Error Occurred" });
    }
}
export default {
    List,
    Add,
    Edit,
    Delete,
};
