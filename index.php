<?php include "app/app.php";
$page = 1;
head($page); ?>

<body id="gradient">
    <header> <?php navbar($page); ?> </header>
    

    <main >
        <!-- <canvas class="orb-canvas"> -->

        <!-- HEADER -->
        <section id="header">
            <div class="card">
                <div class="contenu">
                    <div class="card-content">
                        <p class="card-title">MAXIME TOURNIER</p>
                        <p class="card-para">Lorem ipsum dolor sit 
                            amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="card-picture">
                            <p>zldkzdk</p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- /HEADER -->

        <!-- COMPETENCES -->
        <section id="competence">
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
        </section>
        <!-- /COMPETENCES -->

        <!-- SERVICES -->
        <section id="service">
            <!-- developpement -->
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <p class="title">FRONT SIDE</p>
                        <p>Développeur</p>
                    </div>
                    <div class="backSide">
                        <p class="title">BACK SIDE</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
            <!-- serveur -->
            <div class="myCard">
                <div class="innerCard">
                    <div class="frontSide">
                        <p class="title">FRONT SIDE</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="backSide">
                        <p class="title">BACK SIDE</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /SERVICES -->

<!-- 
        </canvas> -->

        

    </main>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="js/script.js"></script>
</body>

</html>