{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Twibbon App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navigation -->
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-2xl font-bold text-blue-600">Creative App</a>
            <div>
                <a href="#" class="text-gray-700 mr-4">Se connecter</a>
                <a href="#" class="bg-blue-600 text-white py-2 px-4 rounded-lg">S'inscrire</a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Section Hero -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Ajoutez un cadre unique à vos photos et vidéos !</h1>
            <p class="text-lg text-gray-600 mt-2">Soutenez une cause, personnalisez votre profil et partagez vos créations.</p>
            <a href="#" class="mt-4 inline-block bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700">
                Commencer maintenant
            </a>
        </div>

        <!-- Section Tendances -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">🔥 Tendances</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow-md p-4 text-center">
                    <img src="https://via.placeholder.com/150" alt="Cadre 1" class="rounded-lg h-40 w-full object-cover">
                    <h3 class="mt-2 text-lg font-bold text-gray-800">Cadre Événement</h3>
                    <p class="text-gray-600">Un cadre parfait pour les événements spéciaux.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 text-center">
                    <img src="https://via.placeholder.com/150" alt="Cadre 2" class="rounded-lg h-40 w-full object-cover">
                    <h3 class="mt-2 text-lg font-bold text-gray-800">Soutien Humanitaire</h3>
                    <p class="text-gray-600">Montrez votre soutien à une cause.</p>
                </div>
            </div>
        </div>

        <!-- Section Catégories -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">📂 Catégories populaires</h2>
            <div class="flex flex-wrap gap-3">
                <span class="bg-gray-200 text-gray-700 py-2 px-4 rounded-lg">Événements</span>
                <span class="bg-gray-200 text-gray-700 py-2 px-4 rounded-lg">Politique</span>
                <span class="bg-gray-200 text-gray-700 py-2 px-4 rounded-lg">Sport</span>
            </div>
        </div>

        <!-- Section Call to Action -->
        <div class="text-center mt-12">
            <h2 class="text-2xl font-semibold text-gray-700 mb-2">Créez et partagez votre propre cadre !</h2>
            <a href="#" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-700">
                Commencer maintenant
            </a>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-white shadow-md py-4 text-center mt-8">
        <p class="text-gray-600">© {{ date('Y') }} Creative App - Tous droits réservés.</p>
    </footer>

</body>
</html> --}}


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            position: relative;
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?crowd,festival') center/cover no-repeat;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .btn-purple {
        background-color: #6f42c1;
        color: white;
        }
        .btn-purple:hover {
            background-color: #5a32a3;
        }

    </style>
</head>
<body>

    <!-- Hero Section avec Background -->
    <header class="hero d-flex align-items-center justify-content-center text-center text-white bg-primary">
        <div class="hero-overlay"></div>
        <div class="position-relative px-4">
            <h1 class="display-4 fw-bold">Ajoutez un Cadre Unique à Votre Image</h1>
            <p class="mt-3 fs-5">Exprimez votre soutien, votre identité et votre engagement.</p>
            <a href="#" class="btn btn-warning btn-lg mt-4 fw-bold shadow-lg">
                Créer un Twibbon Maintenant
            </a>
        </div>
    </header>


    <!-- Navigation Fixe -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="#">Creative App</a>
            <div class="d-flex">
                <a href="#" class="text-dark text-decoration-none me-3">Se connecter</a>
                <a href="#" class="btn btn-primary px-4">S'inscrire</a>
            </div>
        </div>
    </nav>


    {{-- <!-- Section Tendances -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold text-dark">🔥 Tendances du Moment</h2>
            <p class="text-muted">Découvrez les cadres les plus populaires de la semaine</p>

            <!-- Swiper Container -->
            <div class="swiper mySwiper mt-4">
                <div class="swiper-wrapper">
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="swiper-slide">
                        <div class="position-relative overflow-hidden rounded shadow bg-white">
                            <img src="https://source.unsplash.com/400x300/?frame,design" alt="Cadre tendance"
                                class="w-100 img-fluid transition scale-hover">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 opacity-0 hover-opacity-100 transition">
                                <div class="position-absolute bottom-0 start-0 text-white p-3">
                                    <h3 class="h5 fw-bold">Cadre #<?= $i ?></h3>
                                    <p class="small">Ajoutez ce twibbon à votre photo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> --}}


    <!-- Section Catégories -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold text-dark">📂 Explorez par Catégorie</h2>
            <p class="text-muted">Parcourez des milliers de cadres selon vos préférences</p>

            <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
                <a href="#" class="btn btn-primary btn-lg">Événements</a>
                <a href="#" class="btn btn-success btn-lg">Politique</a>
                <a href="#" class="btn btn-danger btn-lg">Solidarité</a>
                <a href="#" class="btn btn-purple btn-lg">Sport</a>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="py-5 text-center text-white" style="background: linear-gradient(to right, #2563EB, #10B981);">
        <div class="container">
            <h2 class="fw-bold">Créez Votre Propre Twibbon Maintenant</h2>
            <p class="fs-5 text-light mt-2">Exprimez-vous et partagez votre soutien avec le monde</p>
            <a href="#" class="btn btn-warning btn-lg fw-bold text-dark mt-3">
                Je Commence
            </a>
        </div>
    </section>


    <!-- Section Top Créateurs -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold text-dark">🏆 Top Créateurs</h2>
            <p class="text-center text-muted mt-2">Découvrez les créateurs les plus influents</p>

            <!-- Filtres -->
            <div class="d-flex justify-content-center mt-4 gap-2">
                <button class="btn btn-light">7 jours</button>
                <button class="btn btn-light">30 jours</button>
                <button class="btn btn-dark text-white">Tous</button>
                <a href="#" class="text-primary text-decoration-none">Voir Tout</a>
            </div>

            <!-- Liste des créateurs -->
            <div class="row mt-4">
                <?php for ($i = 1; $i <= 9; $i++) : ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex align-items-center p-3 bg-white shadow-sm rounded">
                            <div class="fw-bold text-secondary me-3">#<?= $i ?></div>
                            <img src="https://source.unsplash.com/60x60/?person,avatar" alt="Créateur <?= $i ?>" class="rounded-circle border border-secondary">
                            <div class="ms-3">
                                <h3 class="h6 fw-semibold text-dark">Créateur <?= $i ?></h3>
                                <p class="text-muted small">👥 <?= rand(1, 800) ?>k Partisans</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>



    <!-- Pied de Page -->
    <footer class="bg-dark text-light py-4 text-center">
        <p>© <?= date('Y') ?> Creative App - Tous droits réservés.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
