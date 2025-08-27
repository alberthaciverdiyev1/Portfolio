import db from "../db.js";

export function createService(icon, title, description, image) {
    const stmt = db.prepare(
        "INSERT INTO services (icon, title, description, image) VALUES (?, ?, ?, ?)"
    );
    return stmt.run(icon, title, description, image);
}


export function serviceList() {
    const stmt = db.prepare("SELECT * FROM services");
    return stmt.all();
}

export function updateService(id, icon, title, description, image = null) {
    if (image) {
        const stmt = db.prepare(
            "UPDATE services SET icon = ?, title = ?, description = ?, image = ? WHERE id = ?"
        );
        return stmt.run(icon, title, description, image, id);
    } else {
        const stmt = db.prepare(
            "UPDATE services SET icon = ?, title = ?, description = ? WHERE id = ?"
        );
        return stmt.run(icon, title, description, id);
    }
}

export function deleteService(id) {
    const stmt = db.prepare("DELETE FROM services WHERE id = ?");
    return stmt.run(id);
}