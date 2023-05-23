// Para não ficar recarregando o Efeito
ScrollReveal({ reset: false });

// Blob Maker 
ScrollReveal().reveal(".blob-maker", {
    duration: 1500,
    origin: "top",
    distance: "50px",
    easing: "ease"
});

// Sessão 1
ScrollReveal().reveal(".section-one", {
    duration: 1500,
    origin: "top",
    distance: "50px",
    easing: "ease"
});


// Efeito do H1 dos Cards
ScrollReveal().reveal(".cards-title-main", {
    duration: 2000,
    origin: "top",
    distance: "100px",
    easing: "ease-in-out"
});

// Efeito dos Cards
ScrollReveal().reveal(".first-cards", {
    duration: 1700,
    origin: "left",
    distance: "500px",
    easing: "ease-in-out"
});

// Delay Cards
ScrollReveal().reveal('.card-1', { delay: 150 });
ScrollReveal().reveal('.card-2', { delay: 250 });
ScrollReveal().reveal('.card-3', { delay: 350 });
ScrollReveal().reveal('.card-4', { delay: 450 });


// Sessão de Opiniões
ScrollReveal().reveal(".section-opnions", {
    duration: 2500,
    origin: "bottom",
    distance: "100px",
    easing: "ease"
});

// Join Us
ScrollReveal().reveal(".join-us", {
    duration: 2500,
    origin: "bottom",
    distance: "1500px",
    easing: "ease-in-out"
});