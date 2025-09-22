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

if (lightBtn && darkBtn) {
  lightBtn.classList.add("active");

  lightBtn.addEventListener("click", () => {
    lightBtn.classList.add("active");
    darkBtn.classList.remove("active");
    darkBtn.src = "./common/img/light-moon.svg";
    lightBtn.src = "./common/img/light-sun.svg";
    if (navIcon) navIcon.src = "./common/img/frame4.svg";
    icon1.forEach((icon) => (icon.src = "./common/img/Vector.svg"));
    icon2.forEach((icon) => (icon.src = "./common/img/Vector(1).svg"));
    icon3.forEach((icon) => (icon.src = "./common/img/Vector(2).svg"));
    icon4.forEach((icon) => (icon.src = "./common/img/Vector(3).svg"));
    icon5.forEach((icon) => (icon.src = "./common/img/Vector(4).svg"));

    if (figure) figure.src = "./common/img/container.svg";
    localStorage.setItem("theme", "light");
    document.body.classList.remove("dark");
  });

  darkBtn.addEventListener("click", () => {
    darkBtn.classList.add("active");
    lightBtn.classList.remove("active");
    darkBtn.src = "./common/img/dark-moon.svg";
    lightBtn.src = "./common/img/dark-sun.svg";
    if (navIcon) navIcon.src = "./common/img/nav-i.svg";
    icon1.forEach((icon) => (icon.src = "./common/img/dark-i.svg"));
    icon2.forEach((icon) => (icon.src = "./common/img/dark-i1.svg"));
    icon3.forEach((icon) => (icon.src = "./common/img/dark-i2.svg"));
    icon4.forEach((icon) => (icon.src = "./common/img/dark-i4.svg"));
    icon5.forEach((icon) => (icon.src = "./common/img/dark-i3.svg"));
    if (figure) figure.src = "./common/img/container-dark.svg";
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
  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

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
        alert("Xahiş edirik bütün məcburi sahələri doldurun!");
        return;
      }

      const formData = {
        username: document.getElementById("username").value,
        email: document.getElementById("email").value,
        title: document.getElementById("title").value,
        budget: document.getElementById("budget").value,
        message: document.getElementById("message").value
      };

      try {
        const response = await fetch("/contact", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify(formData)
        });

        const result = await response.json();
        console.log(result);
        if (result.success) {
          alert("Müraciətiniz göndərildi!");
          form.reset();
        } else {
          alert("Xəta baş verdi, zəhmət olmasa yenidən cəhd edin.");
        }
      } catch (err) {
        console.error(err);
        alert("Xəta baş verdi, zəhmət olmasa yenidən cəhd edin.");
      }
    });
  }

}

