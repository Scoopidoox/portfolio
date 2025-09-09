<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mes Compétences</title>
  <link rel="stylesheet" href="./main.css" />
</head>
<body>

<?php include './header.php'; ?>

<div class="competence-layout">
  <!-- Navigation latérale pour les compétences -->
  <div class="comp">
    <nav class="menu-hover-fill flex flex-col items-start leading-none text-2xl uppercase space-y-4">
    <ul>
      <li><a href="#competence1">Gérer le patrimoine informatique</a></li>
      <li><a href="#competence2">Répondre aux incidents</a></li>
      <li><a href="#competence3">Développer la présence en ligne</a></li>
      <li><a href="#competence4">Travailler en mode projet</a></li>
      <li><a href="#competence5">Mettre à disposition un service informatique</a></li>
      <li><a href="#competence6">Organiser son développement professionnel</a></li>
    </ul>
    </nav>
  </div>


  <!-- Contenu principal -->
  <main class="container">
    <section id="competence1" class="competence1">
        <h2>Gérer le patrimoine informatique</h2>
        <a href="projet.php?id=1" class="download-card">
            <img src="./public/images/GSK_logo.png" alt="GSK Icon" class="card-icon">
            <p>GSK</p>
        </a>
        <a href="projet.php?id=6" class="download-card">
            <img src="./public/images/user_icon.png" alt="User Icon" class="card-icon">
            <p>Gestion utilisateurs</p>
        </a>
    </section>

    <section id="competence2" class="competence2">
        <h2>Répondre aux incidents et aux demandes d’assistance et d’évolution</h2>
            <a href="projet.php?id=7" class="download-card"><img src="./public/images/glpi_icon.png" alt="GLPI Icon" class="card-icon"><p>GLPI &amp; Apache</p></a>
    </section>

    <section id="competence3" class="competence3">
        <h2>Développer la présence en ligne de l’organisation</h2>
            <a href="projet.php?id=3" class="download-card"><img src="./public/images/cybernews_icon.png" alt="Cyber News Icon" class="card-icon"><p>Cyber News</p></a>
            <a href="projet.php?id=5" class="download-card"><img src="./public/images/site_bino_icon.png" alt="Site en binôme Icon" class="card-icon"><p>Site en binôme</p></a>
            <a href="projet.php?id=10" class="download-card"><img src="./public/images/portfolio_icon.png" alt="Portfolio Icon" class="card-icon"><p>Portfolio</p></a>
    </section>

    <section id="competence4" class="competence4">
        <h2>Travailler en mode projet</h2>
        <a href="projet.php?id=5" class="download-card">
            <img src="./public/images/site_bino_icon.png" alt="Site en binôme Icon" class="card-icon">
            <p>Site en binôme</p>
        </a>
    </section>

    <section id="competence5" class="competence5">
        <h2>Mettre à disposition des utilisateurs un service informatique</h2>
        <a href="projet.php?id=4" class="download-card">
            <img src="./public/images/sql_icon.png" alt="SQL Icon" class="card-icon">
            <p>SQL</p>
        </a>
        <a href="projet.php?id=8" class="download-card">
            <img src="./public/images/csharp_icon.png" alt="C# Icon" class="card-icon">
            <p>Projets C#</p>
        </a>
        <a href="projet.php?id=1" class="download-card">
            <img src="./public/images/GSK_logo.png" alt="GSK Icon" class="card-icon">
            <p>GSK</p>
        </a>
    </section>

    <section id="competence6" class="competence6">
        <h2>Organiser son développement professionnel</h2>
        <a href="projet.php?id=10" class="download-card">
            <img src="./public/images/portfolio_icon.png" alt="Portfolio Icon" class="card-icon">
            <p>Portfolio</p>
        </a>
        <a href="projet.php?id=9" class="download-card">
            <img src="./public/images/veille_icon.png" alt="Veille technologique Icon" class="card-icon3">
            <p>Veille technologique</p>
        </a>
        <a href="projet.php?id=3" class="download-card">
            <img src="./public/images/linkdIn_icon.png" alt="LinkdIn Icon" class="card-icon">
            <p>Compte LinkdIn</p>
        </a>
    </section>
  </main>
</div>

<?php include './footer.html'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les liens de navigation
    const navLinks = document.querySelectorAll('.comp nav a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Récupérer l'ID de la section cible
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                // Calculer la position pour centrer la section
                const sectionHeight = targetSection.offsetHeight;
                const windowHeight = window.innerHeight;
                const sectionTop = targetSection.offsetTop;
                const currentScrollTop = window.pageYOffset;

                // Position pour centrer la section dans la fenêtre
                const centerPosition = sectionTop - (windowHeight / 2) + (sectionHeight / 2);
                const finalPosition = Math.max(0, centerPosition);

                // Animation personnalisée avec effet de glissement naturel
                animateScrollTo(currentScrollTop, finalPosition, 1200);
            }
        });
    });

    // Fonction d'animation personnalisée avec courbe d'accélération naturelle
    function animateScrollTo(start, end, duration) {
        const startTime = performance.now();
        const distance = end - start;

        function easeInOutCubic(t) {
            return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
        }

        function scroll(currentTime) {
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);

            // Utiliser la courbe d'accélération pour un mouvement naturel
            const easedProgress = easeInOutCubic(progress);
            const currentPosition = start + (distance * easedProgress);

            window.scrollTo(0, currentPosition);

            if (progress < 1) {
                requestAnimationFrame(scroll);
            }
        }

        requestAnimationFrame(scroll);
    }
});
</script>

</body>
</html>