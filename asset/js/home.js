    const images = [
        "../asset/images/home/victoria-1.jpg",
        "../asset/images/home/victoria-2.jpg",
        "../asset/images/home/victoria-3.jpg",
        "../asset/images/home/victoria-4.jpg"
    ];

    let current = 0;
    const section = document.querySelector(".home-image");

    // initial image
    section.style.backgroundImage = `url('${images[current]}')`;

    document.querySelector(".next-btn").onclick = () => {
        current = (current + 1) % images.length;
        section.style.backgroundImage = `url('${images[current]}')`;
    };

    document.querySelector(".prev-btn").onclick = () => {
        current = (current - 1 + images.length) % images.length;
        section.style.backgroundImage = `url('${images[current]}')`;
    };
