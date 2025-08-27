import db from "../db.js";

export function createUser(email, hashedPassword) {
    const stmt = db.prepare(
        "INSERT INTO users (email, password) VALUES (?, ?)"
    );
    return stmt.run(email, hashedPassword);
}

export function getUserByEmail(email) {
    const stmt = db.prepare("SELECT * FROM users WHERE email = ?");
    return stmt.get(email);
}
