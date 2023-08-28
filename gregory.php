<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>
    <?php include("nav.php"); ?>

    <style>
        .greg-content-wrapper {
            margin-top: 50px;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        #greg-presentation-wrapper {
            width: 100%;
            padding: 20px 15%;
        }

        #greg-presentation-wrapper h1 {
            font-weight: bold;
        }

        #greg-presentation-wrapper h1,
        #greg-presentation h2 {
            width: 100%;
            text-align: center;
        }

        #greg-presentation {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        #greg-gallery h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        #greg-gallery {
            width: 100%;
            padding-bottom: 50px;
        }

        #carouselPhotoIndicators {
            width: 70%
        }

        @media only screen and (max-width:1200px) {
            #greg-presentation-wrapper {
                padding: 20px 10%;
            }

            #carouselPhotoIndicators {
                width: 80%
            }
        }

        @media only screen and (max-width:700px) {
            #greg-presentation-wrapper {
                padding: 20px 2.5%;
            }

            #carouselPhotoIndicators {
                width: 95%
            }

        }
    </style>

    <main class="greg-content-wrapper">
        <section id="greg-presentation-wrapper">
            <h1>Gregory Broche</h1>

            <main id="greg-presentation">
                <h2>Presentation</h2>
                <p>Ave! Comme indiqué plus haut en gras je m'appelle Grégory, ce qui je pense n'est à ce stade une révélation pour personne à part potentiellement Guillaume</p>
                <p>Amateur tant de nature que de logique, je suis intéressé tant par les sciences et le développement que par la découverte de la faune et de la flore lors de randonnées solitaire.</p>
                <p>Depuis deux ans je suis également fan d'une jeune artiste (vtuber pour ceux à qui se terme est évocateur). Du fait que cette artiste est passionée de dessin et souhaite devenir illustratrice,
                    je me suis lancé dans le dessin afin de lui offrir des fanarts, tâche pour laquelle je suis hautement incompétent et que j'ai évitée comme la peste toute ma vie jusqu'à ce moment.
                </p>
            </main>
        </section>

        <section id="greg-gallery">
            <h2>Mes photos</h2>
            <div id="carouselPhotoIndicators" class="carousel slide start-50 translate-middle-x">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/src/gallery-greg/squirrel_720.webp" class="d-block w-100" alt="photo-squirrel">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/hermine_720.webp" class="d-block w-100" alt="photo-hermine">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/marmottes_720.webp" class="d-block w-100" alt="photo-marmottes">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/fox_720.webp" class="d-block w-100" alt="photo-fox">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/bee-sunflower_720.webp" class="d-block w-100" alt="photo-bee">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/chardonneret_720.webp" class="d-block w-100" alt="photo-chardonneret">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/crabier_720.webp" class="d-block w-100" alt="photo-crabier">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/gallery-greg/Libellule_720.webp" class="d-block w-100" alt="photo-Libellule">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPhotoIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>
</body>
<?php include("script.php") ?>

</html>