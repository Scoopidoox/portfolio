<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hugo Pidoux | Portfolio de stage</title>
  <link rel="stylesheet" href="./main.css" />
  <style>
    /* Fenêtre modale */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.85);
      align-items: center;
      justify-content: center;
    }
    .modal-content {
      display: flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      max-height: 100%;
    }
    .modal img {
      width: 900px;       /* taille uniforme */
      height: 500px;
      object-fit: cover;  /* recadrage propre */
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0,0,0,0.6);
    }
    .close {
      position: absolute;
      top: 20px;
      right: 40px;
      font-size: 2rem;
      color: #fff;
      cursor: pointer;
    }
    .card {
      cursor: pointer;
      transition: transform 0.2s;
    }
    .card:hover {
      transform: scale(1.02);
    }
  </style>
</head>
<body>
  <?php include './header.php'; ?>

  <section id="contexte">
    <div class="container">
      <h2>Contexte & besoin</h2>
      <p>
        Durant 5 semaines en entreprise, j’ai accompagné l’équipe digitale d’une PME de torréfaction dans le
        renforcement de sa présence en ligne, la mise en conformité des fiches produits et la mise en place d’un
        suivi e-commerce fiable.
        L’objectif principal : améliorer la qualité éditoriale, garantir la conformité réglementaire et assurer une
        collecte de données exploitable pour booster la stratégie marketing.
      </p>
      <p><strong>Exemples :</strong> audit des contenus, rédaction SEO, intégration WordPress, paramétrage GA4/GTM, scripts d’automatisation.</p>
    </div>
  </section>

  <main class="container">
    <section id="tech" class="highlight">
      <h2>Environnement technologique</h2>
      <ul class="list">
        <li>WordPress + WooCommerce (gestion des produits)</li>
        <li>GTM (Google Tag Manager) + GA4 + Google Ads (tracking & analytics)</li>
        <li>ThotSEO, Yoast (optimisation SEO et sémantique)</li>
        <li>Google Sheets & Google Apps Script (automatisation, collecte)</li>
        <li>HTML/CSS/PHP pour intégration & petits ajustements, JS pour UI</li>
      </ul>
      <br />
      <p><strong>Matériel & infra :</strong> postes Windows/Mac, serveur mutualisé, firewall, accès back-office sécurisé.</p>
    </section>

    <h2>Projets & missions principales</h2>
    <section id="missions" class="grid-cards">
      <div class="card" data-img="./public/images/relecture_page.png">
        <h3>Audit & conformité</h3>
        <p>Vérification et correction des fiches produits pour supprimer les allégations interdites.</p>
      </div>
      <div class="card" data-img="./public/images/redac_seo.png">
        <h3>Rédaction & SEO</h3>
        <p>Production d’articles optimisés (ThotSEO), mise à jour des méta-descriptions et hiérarchisation Hn.</p>
      </div>
      <div class="card" data-img="./public/images/inte_web.png">
        <h3>Intégration web</h3>
        <p>Mise en ligne via WordPress/Elementor, ajustements HTML/CSS pour garantir le responsive.</p>
      </div>
      <div class="card" data-img="./public/images/gtm.png">
        <h3>Tracking e-commerce</h3>
        <p>Implémentation GA4 + GTM, suivi des événements (ajout panier, achats), liaison Google Ads.</p>
      </div>
      <div class="card" data-img="./public/images/script_google_api.png">
        <h3>Automatisation</h3>
        <p>Script Google Apps pour extraire automatiquement des contacts via l’API Google Places (~1080 résultats).</p>
      </div>
    </section>

    <h2>Compétences mobilisées</h2>
    <section id="competences">
      <div class="card">
        <?php
          $competences = [
            "Gérer le patrimoine informatique" => "Scripts d'automatisation, documentation des livrables.",
            "Répondre aux incidents" => "Correction de bugs (affichage responsive, compatibilité CSS/JS).",
            "Développer la présence en ligne" => "SEO, optimisation méta, suivi publicitaire.",
            "Travailler en mode projet" => "Réunions hebdomadaires, suivi Notion, coordination prestataire.",
            "Mettre à disposition un service informatique" => "Tableaux de bord GA4/GTM exploitables par l’équipe.",
            "Organiser son développement professionnel" => "Auto-formation ThotSEO, reporting régulier, autonomie."
          ];
          foreach ($competences as $title => $ex) {
              echo "<div class='download-card' style='max-width:100%;'>
                      <p><strong>$title</strong></p>
                      <span style='color:white; margin-top:.3rem; display:block;'>$ex</span>
                    </div>";
          }
        ?>
      </div>
    </section>
  </main>

  <!-- Fenêtre modale -->
  <div id="imgModal" class="modal">
    <span class="close">&times;</span>
    <div class="modal-content">
      <img id="modalImage" src="" alt="Preuve" />
    </div>
  </div>

  <?php include './footer.html'; ?>

  <script>
    // Ouvrir modal sur clic projet
    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("modalImage");
    const closeBtn = document.querySelector(".modal .close");

    document.querySelectorAll("#missions .card").forEach(card => {
      card.addEventListener("click", () => {
        const imgSrc = card.getAttribute("data-img");
        modal.style.display = "flex";
        modalImg.src = imgSrc;
      });
    });

    closeBtn.onclick = () => {
      modal.style.display = "none";
    };

    // Fermer en cliquant hors image
    window.onclick = (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    };
  </script>
</body>
</html>
