import {css, js} from "../../Helpers/assets.js";
import bcrypt from "bcrypt";
import {createUser, getUserByEmail} from "../../Helpers/Queries/userQueries.js";

async function Login(request, reply) {
    if (request.method === "POST") {
        const { email, password } = request.body;

        const user = getUserByEmail(email);
        if (!user) {
            return reply.view("Pages/Admin/Auth/Login.hbs", {
                error: "User not found",
                email,
                css: css([]),
                js: js([]),
                useLayout: false,
            });
        }

        const isValid = await bcrypt.compare(password, user.password);
        if (!isValid) {
            return reply.view("Pages/Admin/Auth/Login.hbs", {
                error: "Incorrect password",
                email,
                css: css([]),
                js: js([]),
                useLayout: false,
            });
        }

        request.session.set("user", { id: user.id, email: user.email });

        return reply.view("Pages/Admin/Auth/Login.hbs", {
            success: "Login successful! You are being redirected...",
            email,
            css: css([]),
            js: js([]),
            useLayout: false,
        });
    }

    return reply.view("Pages/Admin/Auth/Login.hbs", {
        css: css([]),
        js: ["/js/pages/redirect.js"],
        useLayout: false,
    });
}
async function Register(request, reply) {

    try {
        const email = 'alberthaciverdiyev55@gmail.com';
        const password = 'Salam123!';

        const existing = getUserByEmail(email);
        if (existing) {
            return reply.code(400).send({error: "This Email Already Registered"});
        }

        const hashedPassword = await bcrypt.hash(password, 10);
        const result = createUser(email, hashedPassword);

        return reply.send({success: true, userId: result.lastInsertRowid});
    } catch (err) {
        console.error(err);
        return reply.code(500).send({error: "An Error Accrued"});
    }

}

async function Logout(req, res) {
    console.log(req.session)
    await req.session.delete();

    res.redirect('/');
}


export default {
    Register,
    Login,
    Logout
}


