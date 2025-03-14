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
    <title>Twibbonize - Exprimez Votre Engagement !</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Hero Section avec Background -->
    <header class="relative bg-cover bg-center h-screen flex items-center justify-center text-center" style="background-image: url('https://source.unsplash.com/1600x900/?crowd,festival');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white px-6">
            <h1 class="text-5xl font-extrabold leading-tight">Ajoutez un Cadre Unique à Votre Image</h1>
            <p class="mt-4 text-lg text-gray-200">Exprimez votre soutien, votre identité et votre engagement.</p>
            <a href="#" class="mt-6 inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg text-lg transition-transform transform hover:scale-105">
                Créer un Twibbon Maintenant
            </a>
        </div>
    </header>

    <!-- Navigation Fixe -->
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="#" class="text-2xl font-bold text-blue-600">Creative App</a>
            <div>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">Se connecter</a>
                <a href="#" class="ml-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">S'inscrire</a>
            </div>
        </div>
    </nav>

    <!-- Section Tendances -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">🔥 Tendances du Moment</h2>
            <p class="text-gray-600 mt-2">Découvrez les cadres les plus populaires de la semaine</p>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                @for ($i = 1; $i <= 4; $i++)
                <div class="relative group bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://source.unsplash.com/400x300/?frame,design" alt="Cadre tendance" class="w-full h-56 object-cover transition-transform transform group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Cadre #{{ $i }}</h3>
                            <p class="text-sm">Ajoutez ce twibbon à votre photo</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Section Catégories -->
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">📂 Explorez par Catégorie</h2>
            <p class="text-gray-600 mt-2">Parcourez des milliers de cadres selon vos préférences</p>

            <div class="flex justify-center flex-wrap gap-4 mt-6">
                <a href="#" class="bg-blue-500 text-white py-3 px-6 rounded-lg text-lg hover:bg-blue-600 transition">Événements</a>
                <a href="#" class="bg-green-500 text-white py-3 px-6 rounded-lg text-lg hover:bg-green-600 transition">Politique</a>
                <a href="#" class="bg-red-500 text-white py-3 px-6 rounded-lg text-lg hover:bg-red-600 transition">Solidarité</a>
                <a href="#" class="bg-purple-500 text-white py-3 px-6 rounded-lg text-lg hover:bg-purple-600 transition">Sport</a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-center">
        <h2 class="text-3xl font-bold">Créez Votre Propre Twibbon Maintenant</h2>
        <p class="text-lg text-gray-200 mt-2">Exprimez-vous et partagez votre soutien avec le monde</p>
        <a href="#" class="mt-6 inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg text-lg transition-transform transform hover:scale-105">
            Je Commence
        </a>
    </section>

    <!-- Pied de Page -->
    <footer class="bg-gray-900 text-gray-300 py-8 text-center">
        <p>© {{ date('Y') }} Creative App - Tous droits réservés.</p>
    </footer>

</body>
</html>
