// HERO BUTTON SCROLL
document.addEventListener("DOMContentLoaded", () => {

    // Smooth scroll for buttons
    document.querySelectorAll("button").forEach(btn => {
        btn.addEventListener("click", () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: "smooth"
            });
        });
    });

});