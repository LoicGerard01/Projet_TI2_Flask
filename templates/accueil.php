<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Catégories</title>

    <!-- Liens vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Ajout de votre propre fichier CSS -->
    <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}" type="text/css">
</head>
<body>

<div class="liens">
    <a href="#">Connexion</a>
    <a href="#">Créer Son Compte</a>
</div>

<div class="contenu">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url_for('static', filename='images/986_AMD-CPU-program_Stage_dFr.webp') }}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ url_for('static', filename='images/986_Hyte-Y70-Touch_Stage_dFr.webp') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ url_for('static', filename='images/1242_Korting-Gamer-Red_Stage_d-FR.webp') }}" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Next</span>

        </button>
    </div>

    <div class="p-3 mb-2 bg-body-tertiary border">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                {% for categorie in categories %}
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ url_for('static', filename='images/' ~ loop.index ~ '.jpg') }}"
                             class="bd-placeholder-img card-img-top img-fluid" alt="Image de la catégorie">
                        <div class="card-body">
                            <p class="card-text">{{ categorie[1] }}</p>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
