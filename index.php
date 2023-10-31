<?php include "app/app.php";
$page = 1;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>

    <main>

        <!-- HEADER -->
        <section id="header">
            <div class="card">
                <div class="bg">
                    <div class="left">
                        <h1 class="h1">MAXIME TOURNIER</h1>
                        <h4 class="h4">Fondateur & PDG de Tyrolium</h4>
                        <button class="btn-donate" onclick='window.location.href = "https://tyrolium.fr/"'>
                            Tyrolium.fr
                        </button>
                        <blockquote>
                            <h5 class="h5">"La réussite en affaires est une combinaison de vision, de travail acharné et de persévérance."</h5>
                            <footer>— A.D PATEL</footer>
                        </blockquote>
                        <div class="social">
                            <a href="https://www.instagram.com/the_maxime_san/" class="socialContainer containerOne">
                                <svg class="socialSvg instagramSvg" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg>
                            </a>

                            <a href="https://twitter.com/MaximeTournier2" class="socialContainer containerTwo">
                                <svg class="socialSvg twitterSvg" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg> </a>

                            <a href="https://www.linkedin.com/in/maxime-tournier-tyrolium/" class="socialContainer containerThree">
                                <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512">
                                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                </svg>
                            </a>

                            <a href="#" class="socialContainer containerFour">

                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="right"></div>
                </div>
                <div class="blob"></div>
            </div>
        </section>
        <!-- /HEADER -->


        <!-- COMPETENCES -->
        <section id="competence">
            <div class="card">
                <div class="bg">
                <h2 class="h2">COMPETENCES ACQUISES</h2>
                <div class="content">
                    <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                        <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                            <span class="text-3xl font-bold">Gestion Projet</span>
                            <p class="text-amber-300 font-thin">- Date : 2019 -</p>
                        </div>
                    </div>
    
                    <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                        <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                            <span class="text-3xl font-bold">Management</span>
                            <p class="text-amber-300 font-thin">- Date : 2019 -</p>
                        </div>
                    </div>
    
                    <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                        <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                            <span class="text-3xl font-bold">Formateur</span>
                            <p class="text-amber-300 font-thin">- Date : 2019 -</p>
                        </div>
                    </div>
    
                    <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                        <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                            <span class="text-3xl font-bold">Gestion Projet</span>
                            <p class="text-amber-300 font-thin">- Date : 2019 -</p>
                        </div>
                    </div>
    
                    <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                        <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                            <span class="text-3xl font-bold">Management</span>
                            <p class="text-amber-300 font-thin">- Date : 2019 -</p>
                        </div>
                    </div>
    
                    <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                        <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                            <span class="text-3xl font-bold">Formateur</span>
                            <p class="text-amber-300 font-thin">- Date : 2019 -</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="blob"></div>
            </div>
        </section>
        <!-- /COMPETENCES -->

        <!-- PROJETS -->
        <section id="project">
            <div class="content">
                <article class="cardTyrolium">
                    <!-- tyrolium -->
                    <div class="card">
                        <div class="bg">
                            <div class="logo">
                                <img src="https://tyrolium.fr/Contenu/Image/Tyrolium%20Site.png" alt="">
                            </div>
                            <div class="text">
                                <h2 class="h2">TYROLIUM</h2>
                                <p>Tyrolium est une entreprise multisectorielle qui travaille sur plusieurs projets, principalement du développement Web mais également du développement de jeux vidéos et d'applications, de la musique, ou encore de l'audiovisuel.</p>
                            </div>
                            <h4 class="h4">Divers projets</h4>
                            <div class="picture">
                                <img src="assets/tyroserv.jpg" alt="">
                                <img src="assets/SolidServ.png" alt="">
                                <img src="assets/influnias.jpeg" alt="">
                            </div>
                            <div class="picture">
                                <img src="assets/gamenium.jpg" alt="">
                                <img src="assets/tyrostudio.jpeg" alt="">
                                <img src="assets/tyrodiscord.jpeg" alt="">
                            </div>
                            <button class="btn-donate" onclick='window.location.href = "https://tyrolium.fr/project"'>
                                Voir plus de projets
                            </button>
                        </div>
                        <div class="blob"></div>
                    </div>
                </article>
                <article class="cardOther">
                    <!-- formateur -->
                    <div class="card">
                        <div class="bg d-flex">
                            <div class="picture">
                                <img src="https://www.journaldeleconomie.fr/photo/art/grande/42987633-35632661.jpg?v=1582272766" alt="" srcset="">
                            </div>
                            <div class="text">
                                <h3 class="h3">FORMATEUR</h3>

                                <p>Premier mouvement français pour défendre la nouvelle génération d'entrepreneur, de créateur de contenu, d'artiste et métiers d'internet.</p>
                            </div>
                        </div>
                        <div class="blob"></div>
                    </div>
                    <!-- generation ium -->
                    <div class="card">
                        <div class="bg d-flex">
                            <div class="picture">
                                <img src="https://media.licdn.com/dms/image/C4D0BAQGM-EjsBSNP8Q/company-logo_200_200/0/1656365397392?e=2147483647&v=beta&t=o99ERGulVjuO_aHPBQhkB9uOhAU9_CxjX09CeJIKeH4" alt="" srcset="">
                            </div>
                            <div class="text">
                                <h3 class="h3">GENERATION IUM</h3>
                                <div class="icone">
                                    <i class="fa-solid fa-star"></i>Président
                                </div>
                                <p>Premier mouvement français pour défendre la nouvelle génération d'entrepreneur, de créateur de contenu, d'artiste et métiers d'internet.</p>
                            </div>
                        </div>
                        <div class="blob"></div>
                    </div>
                    <!-- autre -->
                    <div class="card">
                        <div class="bg d-flex">
                            <div class="picture">
                                <img src="https://media.licdn.com/dms/image/C4D0BAQGM-EjsBSNP8Q/company-logo_200_200/0/1656365397392?e=2147483647&v=beta&t=o99ERGulVjuO_aHPBQhkB9uOhAU9_CxjX09CeJIKeH4" alt="" srcset="">
                            </div>
                            <div class="text">
                                <h3 class="h3">DOUBLET</h3>
                                <div class="icone">
                                    <i class="fa-solid fa-star"></i>Président
                                </div>
                                <p>Premier mouvement français pour défendre la nouvelle génération d'entrepreneur, de créateur de contenu, d'artiste et métiers d'internet.</p>
                            </div>
                        </div>
                        <div class="blob"></div>
                    </div>
                </article>
            </div>
        </section>
        <!-- /PROJETS -->



        <!-- SERVICES -->
        <section id="service">
            
            <h2 class="h2">SERVICES PROPOSES</h2>

            <div class="cardService">
                <!-- developpement -->
                <div class="myCard">
                    <div class="innerCard">
                        <div class="frontSide">
                            <p class="title">DEVELOPPEMENT</p>
                            <i class="fa-solid fa-display"></i>
                            <p>A partir de 50€</p>
                        </div>
                        <div class="backSide">
                            <p>Site e-commerce</p>
                            <p>Site vitrine</p>
                            <p>Application web</p>
                            <p>Leave Me</p>
                        </div>
                    </div>
                </div>
                <!-- serveur -->
                <div class="myCard">
                    <div class="innerCard">
                        <div class="frontSide">
                            <p class="title">SERVEUR</p>
                            <i class="fa-solid fa-server"></i>
                            <p>A partir de 50€</p>
                        </div>
                        <div class="backSide">
                            <p>Leave Me</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /SERVICES -->

        <!-- Footer -->
        <footer id="footer">

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>MAXIME TOURNIER
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Pages
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">A propos</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Expériences</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Compétences</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Histoire</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Services</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Décines Chapieu</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                mxmtournier@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i>06.11.11.26.69</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
        </footer>
        <!-- Footer -->



    </main>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="js/script.js"></script>
    <script type="module" src="js/elias.js"></script>
</body>

</html>