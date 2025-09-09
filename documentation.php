<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugo Pidoux | Documentation</title>
        <link rel="stylesheet" href="./main.css" />
    </head>
    <body>
        <?php include './header.php'; ?>
        <section class="documentation">
            <h2>Documentation</h2>

            <div class="doc-cards-container">
                <a href="./public/doc/HPI_TableauDeSynthese.xlsx" download class="doc-download-card">
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/732/732220.png"
                        alt="Excel Icon"
                    />
                    <p>HPI_TableauDeSynthese.xlsx</p>
                </a>

                <a href="./public/doc/HPI_CertificatScolarite.pdf" download class="doc-download-card">
                    <img
                        src="./public/images/logo_campus_la_chataigneraie.png"
                        alt="chatos"
                    />
                    <p>HPI_CertificatScolarite.pdf</p>
                </a>

                <a href="./public/doc/HPI_AttestationStage1.pdf" download class="doc-download-card">
                    <img
                        src="./public/images/stage.png"
                        alt="chatos"
                    />
                    <p>Attestation de stage 1ère année</p>
                </a>

                <a href="./competences.php" class="doc-download-card">
                    <img
                        src="./public/images/comp.png"
                        alt="chatos"
                    />
                    <p>Synthèse compétences</p>
                </a>
            </div>
        </section>
        <?php include './footer.html'; ?>
    </body>
</html>
