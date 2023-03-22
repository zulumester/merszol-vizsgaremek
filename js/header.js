const navLinks = document.querySelectorAll(".nav-link");
const navMobile = document.getElementById("navbarNav");

navLinks.forEach((e) => {

    e.addEventListener("click", () => {

        navMobile.classList.remove("show");
    })
});