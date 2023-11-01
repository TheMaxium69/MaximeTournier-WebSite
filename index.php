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

                    <h2>Maxime Tournier</h2>


                </div>
            </div>
        </section>
        <!-- /HEADER -->


        <!-- COMPETENCES -->
        <section id="competence">
            <div class="card">
                <div class="bg">
                    <h2>Compétence</h2>
                </div>
            </div>
        </section>
        <!-- /COMPETENCES -->

        <!-- PROJETS -->
        <section id="project">
            <div class="card">
                <div class="bg">
                    <h2>Projet</h2>
                    <hr>
                    <div class="d-flex">

                        <div class="left">

                            <article>

                                <h3>Tyrolium</h3>

                            </article>

                        </div>

                        <div class="right">

                            <article>

                                <h3>Tyrolium</h3>

                            </article>

                            <article>

                                <h3>Tyrolium</h3>

                            </article>

                        </div>

                    </div>



                    <style>


                        #project h2{
                            text-align: center;
                        }

                    </style>

                </div>
            </div>
        </section>
        <!-- /PROJETS -->



        <!-- SERVICES -->
        <section id="service">
            <div class="card">
                <div class="bg">
                    <h2>SERVICES PROPOSES</h2>
                </div>
            </div>
        </section>
        <!-- /SERVICES -->


    </main>

    <!-- FOOTER -->
    <footer>

        <div class="card">
            <div class="bg">
                <h2>FOOTER</h2>
            </div>
        </div>

    </footer>
    <!-- /FOOTER -->

</body>

</html>