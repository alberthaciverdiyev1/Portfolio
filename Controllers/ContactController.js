import TelegramBot from 'node-telegram-bot-api';
import { css, js } from "../Helpers/assets.js";

const bot = new TelegramBot(process.env.TELEGRAM_BOT_TOKEN, { polling: true });
const TELEGRAM_CHAT = '@jobingaz';

async function sendTgMessage(message) {
    return await bot.sendMessage(TELEGRAM_CHAT, message, { parse_mode: 'HTML' });
}

// Contact page endpoint
async function contactPage(request, reply) {
    console.log(request.method)
    if (request.method === 'POST') {
        const { username, email, title, budget, message } = request.body;

        const telegramMessage = `            
            📩 <b>Yeni Kontakt Formu</b>
            Ad Soyad: ${username}
            Email: ${email}
            Başlık: ${title}
            Bütçe: ${budget || "-"}
            Mesaj: ${message || "-"}
        `;

        console.log(telegramMessage);

        try {
            await sendTgMessage(telegramMessage);
            return reply.send({ success: true, message: "Mesaj gönderildi!" });
        } catch (err) {
            console.error(err);
            return reply.send({ success: false, message: "Mesaj gönderilemedi!" });
        }
    }

    const view = {
        title: 'Contact Page',
        css: css(['contacts.css']),
        js: js(['contactUs.js']),
    };

    return reply.view('Pages/Static/Contact.hbs', view);
}

// Opsiyonel: Bot komutlarını dinleme
bot.on('message', async (msg) => {
    if (msg.text === '/start') {
        await bot.sendMessage(msg.chat.id, 'Contact form Telegram botu aktif!');
    }
});

export default { contactPage, sendTgMessage };
