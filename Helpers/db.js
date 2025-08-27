import Database from "better-sqlite3";

const db = new Database("app.db");

// Users cədvəli
db.prepare(`
    CREATE TABLE IF NOT EXISTS users
    (
        id
        INTEGER
        PRIMARY
        KEY
        AUTOINCREMENT,
        email
        TEXT
        UNIQUE,
        password
        TEXT
    )
`).run();

// Services cədvəli
db.prepare(`
  CREATE TABLE IF NOT EXISTS services (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    icon TEXT,
    title TEXT,
    description TEXT,
    image TEXT
  )
`).run();

export default db;
