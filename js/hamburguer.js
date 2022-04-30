const hamburguer = document.querySelector("button")

hamburguer.addEventListener("click", function hamburguerClick() {

    const nav = document.getElementById("nav")
    nav.classList.toggle("active")

});