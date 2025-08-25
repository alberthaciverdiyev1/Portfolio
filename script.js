const lightBtn = document.querySelector(".light-mode img");
const darkBtn = document.querySelector(".dark-mode img");
const navIcon = document.querySelector(".nav-icon");
const icon1 = document.querySelectorAll(".icon1");
const icon2 = document.querySelectorAll(".icon2");
const icon3 = document.querySelectorAll(".icon3");
const icon4 = document.querySelectorAll(".icon4");
const icon5 = document.querySelectorAll(".icon5");
const figure = document.querySelector(".figure");
const form = document.querySelector("form");
const importantFields = document.querySelectorAll(".important");
const backIcon = document.querySelector(".back img");
const closeIcon = document.querySelector(".close");
const phoneImg = document.querySelector(".phone");
const mailImg = document.querySelector(".mail");
const placeImg = document.querySelector(".place");

if (lightBtn && darkBtn) {
  lightBtn.classList.add("active");

  lightBtn.addEventListener("click", () => {
    lightBtn.classList.add("active");
    darkBtn.classList.remove("active");
    darkBtn.src = "./img/light-moon.svg";
    lightBtn.src = "./img/light-sun.svg";
    if (navIcon) navIcon.src = "./img/frame4.svg";
    icon1.forEach((icon) => (icon.src = "./img/Vector.svg"));
    icon2.forEach((icon) => (icon.src = "./img/Vector(1).svg"));
    icon3.forEach((icon) => (icon.src = "./img/Vector(2).svg"));
    icon4.forEach((icon) => (icon.src = "./img/Vector(3).svg"));
    icon5.forEach((icon) => (icon.src = "./img/Vector(4).svg"));

    if (figure) figure.src = "./img/container.svg";
    if (backIcon) backIcon.src = "./img/back.svg";
    if (closeIcon) closeIcon.src = "./img/close.svg";

    if (phoneImg) phoneImg.src = "./img/place.svg";
    if (mailImg) mailImg.src = "./img/mail.svg";
    if (placeImg) placeImg.src = "./img/place.svg";

    localStorage.setItem("theme", "light");
    document.body.classList.remove("dark");
  });

  darkBtn.addEventListener("click", () => {
    darkBtn.classList.add("active");
    lightBtn.classList.remove("active");
    darkBtn.src = "./img/dark-moon.svg";
    lightBtn.src = "./img/dark-sun.svg";
    if (navIcon) navIcon.src = "./img/nav-i.svg";
    icon1.forEach((icon) => (icon.src = "./img/dark-i.svg"));
    icon2.forEach((icon) => (icon.src = "./img/dark-i1.svg"));
    icon3.forEach((icon) => (icon.src = "./img/dark-i2.svg"));
    icon4.forEach((icon) => (icon.src = "./img/dark-i4.svg"));
    icon5.forEach((icon) => (icon.src = "./img/dark-i3.svg"));
    if (figure) figure.src = "./img/container-dark.svg";
    if (backIcon) backIcon.src = "./img/back-w.svg";
    if (closeIcon) closeIcon.src = "./img/close-w.svg";

    if (phoneImg) phoneImg.src = "./img/phone-w.svg";
    if (mailImg) mailImg.src = "./img/mail-w.svg";
    if (placeImg) placeImg.src = "./img/place-w.svg";

    localStorage.setItem("theme", "dark");
    document.body.classList.add("dark");
  });

  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "dark") {
    darkBtn.click();
  } else {
    lightBtn.click();
  }
}

if (form) {
  form.addEventListener("submit", (e) => {
    let allFilled = true;

    importantFields.forEach((input) => {
      if (!input.value.trim()) {
        allFilled = false;
        input.style.border = "1px solid red";
      } else {
        input.style.border = "";
      }
    });

    if (!allFilled) {
      e.preventDefault();
      alert("Xahiş edirik bütün məcburi sahələri doldurun!");
    } else {
      e.preventDefault();
      alert("Müraciətiniz göndərildi!");
      form.reset();
    }
  });
}
