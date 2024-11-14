document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".hamburger");
  const menu = document.querySelector(".menu");
  const dropdown = document.querySelector(".dropdown");
  const dropdownList = document.querySelector(".dropdown_list");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("is-active");
    menu.classList.toggle("menu_active");
  });

  dropdown.addEventListener("click", () => {
    dropdown.classList.toggle("is-active");
    dropdownList.classList.toggle("is-active");
  });

  window.addEventListener("scroll", () => {
    hamburger.classList.remove("is-active");
    menu.classList.remove("menu_active");
    dropdownList.classList.remove("is-active");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  var typed = new Typed(".auto-type", {
    strings: ["Future Automation Skills Exhibition"],
    typeSpeed: 50,
    backSpeed: 50,
    loop: false,
  });
});

window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  navbar.classList.toggle("sticky", window.scrollY > 0);
});

window.addEventListener("scroll", function () {
  var hamburger = document.querySelector(".hamburger");
  hamburger.classList.toggle("sticky", window.scrollY > 0);
});

// const targetDate = new Date("2024-02-22T23:59:00");

// function updateCountdown() {
//   const currentDate = new Date();
//   const timeDifference = targetDate - currentDate;

//   if (timeDifference < 0) {
//     document.getElementById("countdown").textContent = "Countdown Expired";
//     return;
//   }

//   const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
//   const hours = Math.floor(
//     (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
//   );
//   const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
//   const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

//   document.getElementById("days").textContent = days;
//   document.getElementById("hours").textContent = hours;
//   document.getElementById("minutes").textContent = minutes;
//   document.getElementById("seconds").textContent = seconds;
// }

// // Update the countdown every second
// setInterval(updateCountdown, 1000);

// // Initial call to update the countdown
// updateCountdown();

// accordion.js
document.addEventListener("DOMContentLoaded", function () {
  const checkboxes = document.querySelectorAll(
    '.accordion input[type="checkbox"]'
  );

  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
      if (checkbox.checked) {
        checkboxes.forEach((otherCheckbox) => {
          if (otherCheckbox !== checkbox) {
            otherCheckbox.checked = false;
          }
        });
      }
    });
  });
});

// LOADER
const loader = document.querySelector(".loader");

function loaderActive() {
  loader.classList.add("loader-active");
}

function loaderActiveTime() {
  setInterval(loaderActive, 2000);
}

window.onload = loaderActiveTime;
