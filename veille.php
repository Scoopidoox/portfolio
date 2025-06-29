<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugo Pidoux | Veilles</title>
        <link rel="stylesheet" href="./main.css" />
    </head>
    <body>
        <?php include './header.html'; ?>
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
                <h2>Actus récentes</h2>

                <article class="news">
                    <h3>GitHub Copilot gratuit intégré à VS Code</h3>
                    <p><strong>Par :</strong> Burke HOLLAND – <strong>2024/12/18</strong></p>
                    <p>
                        Copilot Chat intégré à VS Code gratuitement : boost de productivité assuré pour les
                        développeurs.
                    </p>
                    <a
                        href="https://code.visualstudio.com/blogs/2024/12/18/free-github-copilot#_the-ai-code-editor-for-everyone"
                        target="_blank"
                    >
                        Voir l'article
                    </a>
                    <br />
                    <a href="./public/news/news_copilot.pdf" target="_blank">Télécharger le PDF</a>
                </article>

                <article class="news">
                    <h3>Les tendances clés de Docker pour 2025</h3>
                    <p><strong>Par :</strong> Rikki ENDSLEY – <strong>2025/01/16</strong></p>
                    <p>
                        Mise en avant de l'intégration de l'IA, le renforcement de la sécurité et l'amélioration des
                        outils pour les développeurs.
                    </p>
                    <a
                        href="https://www.docker.com/resources/2025-01-13-kickstart-2025-ai-security-empowered-developer-teams/"
                        target="_blank"
                    >
                        Voir l'article
                    </a>
                    <br />
                    <a href="./public/news/news_docker.pdf" target="_blank">Télécharger le PDF</a>
                </article>

                <article class="news">
                    <h3>Cinq tendances qui façonneront le développement logiciel en 2025</h3>
                    <p><strong>Par :</strong> Michel ISNARD – <strong>2025/03/03</strong></p>
                    <p>
                        Cet article explore les principales tendances qui influenceront le développement logiciel en
                        2025, telles que l'intégration de l'IA, l'automatisation accrue des processus de développement,
                        et l'importance croissante des plateformes centralisées pour améliorer l'efficacité et la
                        sécurité.
                    </p>
                    <a
                        href="https://www.journaldunet.com/developpeur/1539615-cinq-tendances-qui-faconneront-le-developpement-logiciel-en-2025/"
                        target="_blank"
                    >
                        Voir l'article
                    </a>
                    <br />
                    <a href="./public/news/news_tendances_dev_2025.pdf" target="_blank">Télécharger le PDF</a>
                </article>

                <article class="news">
                    <h3>Étude : les nouvelles tendances de l’écosystème des développeurs en 2025</h3>
                    <p><strong>Par :</strong> Nicolas LECOINTRE – <strong>2025/02/20</strong></p>
                    <p>
                        Cette étude de JetBrains met en lumière l'évolution de l'écosystème des développeurs en 2025,
                        avec une omniprésence de l'IA, une transformation des rôles des développeurs, et une adoption
                        croissante de nouveaux outils et langages pour s'adapter aux défis technologiques actuels.
                    </p>
                    <a href="https://lesjoiesducode.fr/etude-developpeurs-2025-enquete-ecosysteme-devs" target="_blank">
                        Voir l'article
                    </a>
                    <br />
                    <a href="./public/news/news_ecosysteme_devs_2025.pdf" target="_blank">Télécharger le PDF</a>
                </article>
            </section>
        </main>
        <?php include './footer.html'; ?>
    </body>
</html>
