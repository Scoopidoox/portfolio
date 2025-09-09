<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugo Pidoux | Veilles</title>
        <link rel="stylesheet" href="./main.css" />
    </head>
    <body>
        <?php include './header.php'; ?>
        <section id="technologique">
            <div class="container">
                <h2>Veille technologique - Outils et Environnements de Développement</h2>
                <p>
                    Ce thème explore les innovations et bonnes pratiques des environnements de développement modernes.
                    Il met en lumière les solutions logicielles, plateformes et extensions permettant d'optimiser le
                    flux de travail des développeurs.
                </p>
            </div>
        </section>

        <main class="container veille-content">
            <section class="highlight">
                <h2>Ligne directrice de ma veille</h2>
                <p>
                    Le bornage de cette veille technologique se concentre sur trois axes principaux : les éditeurs de
                    code, la gestion de projet, et les conteneurs/environnements locaux. Ces thématiques couvrent les
                    outils et pratiques qui influencent directement le quotidien des développeurs. L’objectif est de
                    suivre les évolutions des IDE comme VS Code et ses extensions, d’analyser les nouvelles
                    fonctionnalités et interfaces de gestion de version comme Git ou GitKraken, et d’explorer les
                    environnements de développement modernes tels que WSL2 ou Docker. Ce cadrage permet une veille
                    ciblée, en lien direct avec l’optimisation des workflows de développement.
                </p>
            </section>

            <section class="grid-cards">
                <div class="card">
                    <h2>Éditeurs de Code</h2>
                    <p><strong>VS Code :</strong> Profils, Copilot, Remote Dev, Live Share</p>
                    <p><strong>Extensions :</strong> Prettier, ESLint, Tabnine</p>
                    <p><strong>Alternatives :</strong> JetBrains Fleet, Sublime Text</p>
                </div>

                <div class="card">
                    <h2>Gestion de projet</h2>
                    <p><strong>Git :</strong> Maintenance auto, Git 2.42, sparse-checkout</p>
                    <p><strong>Interfaces :</strong> GitKraken, Sourcetree</p>
                    <p><strong>Alternatives :</strong> Mercurial, Perforce</p>
                </div>

                <div class="card">
                    <h2>Environnements Locaux</h2>
                    <p><strong>WSL2 :</strong> Intégré, rapide, outils Linux</p>
                    <p><strong>Docker :</strong> Léger, efficace, extensible avec Kubernetes</p>
                </div>

                <div class="card">
                    <h2>Outils de Veille</h2>
                    <p><strong>Outils :</strong> Talkwalker Alerts, Feedly, Mention, Google Alerts, Netvibes</p>
                    <p><strong>Mots clés :</strong> VS Code, IDE, Git, Docker Desktop, WSL2</p>
                    <p><strong>Flux RSS :</strong> VS Code Update, GitHub Blog, Docker Blog</p>
                    <p><strong>Newsletters :</strong> Docker Newsletter, GitHub Digest</p>
                </div>
            </section>

            <section class="highlight">
                <h2>Pourquoi cette veille ?</h2>
                <p>
                    Cette veille me permet de mieux comprendre les outils modernes afin de rester performant,
                    d’anticiper les évolutions technologiques et d’optimiser les workflows de développement comme par
                    exemple en mettant en place un Environnement de Développement avec VS Code et WSL2. Elle constitue
                    un véritable levier d’adaptation et d’innovation dans un domaine en constante évolution.
                </p>
            </section>

            <section class="articles">
                <h2>Actus</h2>

                <?php
                // requête pour récupérer les articles
                $sql = "SELECT titre_actu, auteur_actu, resume_actu, date_actu, lien_actu, pdf_actu FROM actu ORDER BY date_actu DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {

                    // sortie des données de chaque ligne
                    while ($row = $result->fetch_assoc()) {
                        echo '<article class="news">';
                        echo '<h3>' . htmlspecialchars($row["titre_actu"]) . '</h3>';
                        echo '<p><strong>Par :</strong> ' . htmlspecialchars($row["auteur_actu"]) . ' – <strong>' . htmlspecialchars($row["date_actu"]) . '</strong></p>';
                        echo '<p>' . htmlspecialchars($row["resume_actu"]) . '</p>';
                        echo '<a href="' . htmlspecialchars($row["lien_actu"]) . '" target="_blank">Voir l\'article</a><br />';
                        if (!empty($row["pdf_actu"])) {
                            echo '<a href="' . htmlspecialchars($row["pdf_actu"]) . '" target="_blank">Télécharger le PDF</a>';
                        }
                        echo '</article>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </section>
        </main>
        <?php include './footer.html'; ?>
    </body>
</html>
