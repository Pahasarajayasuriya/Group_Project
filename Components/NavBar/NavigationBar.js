const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle"),
    logoContainer = document.querySelector("#logo-container");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    logoContainer.classList.toggle("logo-open");
});
