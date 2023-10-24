<?php include "app/app.php";
$page = 1;
head($page); ?>

<body id="gradient">
    <header> <?php navbar($page); ?> </header>
    
    <!-- BACKGROUND -->
    <div id="bg-wrap">
    <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
        <defs>
            <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5">
                <animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                <stop offset="0%" stop-color="rgba(255, 255, 255, 0.5)"></stop>
                <stop offset="100%" stop-color="rgba(255, 255, 255, 0)"></stop>
            </radialGradient>
            <radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5">
                <animate attributeName="fx" dur="23.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                <stop offset="0%" stop-color="rgba(0, 0, 255, 0.5)"></stop>
                <stop offset="100%" stop-color="rgba(0, 0, 255, 0)"></stop>
            </radialGradient>
            <radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5">
                <animate attributeName="fx" dur="21.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                <stop offset="0%" stop-color="rgba(255, 0, 0, 0.5)"></stop>
                <stop offset="100%" stop-color="rgba(255, 0, 0, 0)"></stop>
            </radialGradient>
        </defs>
        <rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)">
            <animate attributeName="x" dur="20s" values="25%;0%;25%" repeatCount="indefinite"></animate>
            <animate attributeName="y" dur="21s" values="0%;25%;0%" repeatCount="indefinite"></animate>
            <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="7s" repeatCount="indefinite"></animateTransform>
        </rect>
        <rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient2)" transform="rotate(255.072 50 50)">
            <animate attributeName="x" dur="23s" values="-25%;0%;-25%" repeatCount="indefinite"></animate>
            <animate attributeName="y" dur="24s" values="0%;50%;0%" repeatCount="indefinite"></animate>
            <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="12s" repeatCount="indefinite"></animateTransform>
        </rect>
        <rect x="9.00483%" y="14.5733%" width="100%" height="100%" fill="url(#Gradient3)" transform="rotate(139.903 50 50)">
            <animate attributeName="x" dur="25s" values="0%;25%;0%" repeatCount="indefinite"></animate>
            <animate attributeName="y" dur="12s" values="0%;25%;0%" repeatCount="indefinite"></animate>
            <animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50" dur="9s" repeatCount="indefinite"></animateTransform>
        </rect>
    </svg>
</div>

    <!-- /BACKGROUND -->
  
  
    <main >
        <!-- <canvas class="orb-canvas"> -->

        <!-- HEADER -->
        <section id="header">
            <div class="card">
                <div class="contenu">
                    <div class="card-content">
                        <p class="card-title">MAXIME TOURNIER</p>
                        <blockquote>
                            <h5 class="h5">"La réussite en affaires est une combinaison de vision, de travail acharné et de persévérance."</h5>
                            <footer>— A.D PATEL</footer>
                        </blockquote>
                        </div>
                        <div class="card-picture">
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

            <div class="group duration-500 hover:-skew-x-0 skew-x-6 hover:translate-x-2">
                <div class="group-hover:duration-400 relative rounded-2xl w-72 h-36 bg-zinc-800 text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-neutral-700 before:right-3 before:top-0 before:w-72 before:h-32 before:-z-10">
                    <span class="text-3xl font-bold">Formateur</span>
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
            <!-- <div class="myCard">
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
            </div> -->
            <!-- serveur -->
            <!-- <div class="myCard">
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
        </section> -->
        <!-- /SERVICES -->

<!-- 
        </canvas> -->

        

    </main>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>