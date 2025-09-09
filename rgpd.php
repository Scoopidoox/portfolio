<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugo Pidoux | Accueil</title>
        <link rel="stylesheet" href="./main.css" />
    </head>
    <body>
        <?php include './header.php'; ?>
        <main class="container">
            <section>
                <div class="carousel-container">
                    <h2>Certifications RGPD</h2>
                    <p>Voici les différentes certifications que j'ai obtenues en matière de RGPD.</p>
                    <p>Ces certifications attestent de ma compréhension et de ma capacité à appliquer les principes du RGPD dans un contexte professionnel.</p>
                    <div class="carousel-images" id="carousel">
                        <img src="./public/images/mod1_rgpd.png" alt="Slide 1" />
                        <img src="./public/images/mod2_rgpd.png" alt="Slide 2" />
                        <img src="./public/images/mod3_rgpd.png" alt="Slide 3" />
                        <img src="./public/images/mod4_rgpd.png" alt="Slide 4" />
                        <img src="./public/images/mod5_rgpd.png" alt="Slide 5" />
                    </div>
                    <button class="carousel-button left" onclick="prevSlide()">&#10094;</button>
                    <button class="carousel-button right" onclick="nextSlide()">&#10095;</button>
                </div>
            </section>
        </main>

        <script>
            let currentIndex = 0;
            const carousel = document.getElementById("carousel");
            const totalSlides = carousel.children.length;

            function updateCarousel() {
                const offset = -currentIndex * 100;
                carousel.style.transform = `translateX(${offset}%)`;
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }
        </script>

        <?php include './footer.html'; ?>
    </body>
</html>
