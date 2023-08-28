<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>
    <?php include("nav.php"); ?>
    <main>
        <div class="card col-sm-10 col-lg-5 m-auto mt-5 p-4">
            <h1>Nicolas Araujo</h1>
            <h6>Je possède le grand age de 21 ans</h6>
            <p><i>A la suite d'un bac ES, j'ai vu de la lumière ici je suis rentré, j'ai vu la cafetière je suis resté.</i></p>
            <p>Mon animal totem est le pingouin-empereur unijambiste</p>
            <a href="https://nicolas-araujo0.github.io/Portfolio/" target="_blank">Mon super portfolio dispo chez votre fournisseur préféré</a>
            <h4 class="my-3">Mes passions</h4>
            <div id="carouselExample" class="carousel slide col-8 mt-3 m-auto">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.omen.com/content/dam/sites/omen/worldwide/homepage/OMEN_18_Lapras_A_140_R8_V2-minv3.jpg" class="d-block w-100" alt="gaming">
                        <div class="carousel-caption d-none d-md-block blur">
                            <h5>Gaming</h5>
                            <p>Passionné par les jeux ! :D</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.bfmtv.com/1SybJM8urDFz2bfjV68V8zM_TXc=/0x0:2048x1152/2048x0/images/Le-manga-Rooster-Fighter-de-Shu-Sakuratani-1407661.jpg" class="d-block w-100" alt="manga">
                        <div class="carousel-caption d-none d-md-block text-black blur">
                            <h5>Manga</h5>
                            <p>Sympa pour passé le temps</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/montage.png" class="d-block w-100" alt="montage perso">
                        <div class="carousel-caption d-none d-md-block text-black blur">
                            <h5>Montage</h5>
                            <p>Petit kiffe trouver pendant la formation</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </main>
</body>
<?php include("script.php") ?>
<style>
    .blur{
       backdrop-filter: blur(1px); 
    }
</style>

</html>