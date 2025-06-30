<?php
// Récupère l'URL de connexion depuis les secrets Fly.io
$url = parse_url(getenv("DATABASE_URL"));

$host = $url["shinkansen.proxy.rlwy.net"];
$port = $url["41356"];
$user = $url["root"];
$pass = $url["hwztiwMYuYYzxNgChLabQrFoDunjzotm"];
$db   = ltrim($url["railway"], "/");

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie, MASTER-SAMA!";
} catch (PDOException $e) {
    die("❌ Erreur de connexion : " . $e->getMessage());
}

// Vérifie que l'ID est fourni dans l'URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Projet non trouvé.");
}

$id_tp = (int)$_GET['id'];

// Requête pour récupérer le projet spécifique
$sql = "SELECT tp.nom_tp, projet_detail.contexte, projet_detail.environnement,
               projet_detail.competence_principale, projet_detail.conclusion,
               projet_detail.lien_projet, projet_detail.image
        FROM projet_detail
        JOIN tp ON projet_detail.id_tp = tp.id_tp
        WHERE tp.id_tp = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id_tp]);
$projet = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$projet) {
    die("Projet introuvable.");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($projet['nom_tp']) ?> - Détail du projet</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include './header.html'; ?>

  <main class="container">
    <h2><?= htmlspecialchars($projet['nom_tp']) ?></h2>

    <div class="card">
      <h3>Contexte</h3>
      <p><?= nl2br(htmlspecialchars($projet['contexte'])) ?></p>
      <br />

      <h3>Visuel</h3>
      <?php if (!empty($projet['image'])): ?>
        <img src="public/images/<?= htmlspecialchars($projet['image']) ?>" alt="Visuel du projet" style="max-width:100%;height:auto;">
      <?php else: ?>
        <p>Aucun visuel disponible pour ce projet.</p>
      <?php endif; ?>
      <br />


      <h3>Environnement</h3>
      <p><?= nl2br(htmlspecialchars($projet['environnement'])) ?></p>
      <br />

      <h3>Compétence principale mobilisée</h3>
      <p><?= htmlspecialchars($projet['competence_principale']) ?></p>
      <br />

      <h3>Conclusion</h3>
      <p><?= nl2br(htmlspecialchars($projet['conclusion'])) ?></p>

      <?php if (!empty($projet['lien_projet'])): ?>
        <a href="<?= htmlspecialchars($projet['lien_projet']) ?>" class="btn" target="_blank">Voir le projet</a>
      <?php endif; ?>
    </div>
  </main>

  <?php include './footer.html'; ?>
</body>
</html>
