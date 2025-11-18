document.addEventListener("DOMContentLoaded", () => {
    const itens = document.querySelectorAll(".fade-in");

    itens.forEach((el, i) => {
        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
        }, 200 + i * 150);
    });
});
