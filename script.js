const lightBtn = document.querySelector(".light-mode img");
const darkBtn = document.querySelector(".dark-mode img");
const navIcon = document.querySelector(".nav-icon");
const icon1 = document.querySelector(".icon1");
const icon2 = document.querySelector(".icon2");
const icon3 = document.querySelector(".icon3");
const icon4 = document.querySelector(".icon4");
const icon5 = document.querySelector(".icon5");
const figure = document.querySelector(".figure");
const form = document.querySelector("form");
const importantFields = document.querySelectorAll(".important");

lightBtn.classList.add("active");
lightBtn.addEventListener("click", () => {
  lightBtn.classList.add("active");
  darkBtn.classList.remove("active");
  darkBtn.src = "./img/light-moon.svg";
  lightBtn.src = "./img/light-sun.svg";
  navIcon.src = "./img/frame4.svg";
  icon1.src = "./img/Vector.svg";
  icon2.src = "/img/Vector(1).svg";
  icon3.src = "/img/Vector(2).svg";
  icon4.src = "/img/Vector(3).svg";
  icon5.src = "/img/Vector(4).svg";
  figure.src = "./img/container.svg";
  localStorage.setItem("theme", "light");
  document.body.classList.remove("dark");
});

darkBtn.addEventListener("click", () => {
  darkBtn.classList.add("active");
  lightBtn.classList.remove("active");
  darkBtn.src = "./img/dark-moon.svg";
  lightBtn.src = "./img/dark-sun.svg";
  navIcon.src = "./img/nav-i.svg";
  icon1.src = "./img/dark-i.svg";
  icon2.src = "./img/dark-i1.svg";
  icon3.src = "./img/dark-i2.svg";
  icon4.src = "./img/dark-i4.svg";
  icon5.src = "./img/dark-i3.svg";
  figure.src = "./img/container-dark.svg";
  localStorage.setItem("theme", "dark");
  document.body.classList.add("dark");
});

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
