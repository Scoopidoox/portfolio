<header>
  <?php
  // dynamisation des articles de veille
                // connexion à la base de données
                $host = 'localhost';
                $dbname = 'u581402098_portfolio';
                $user = 'u581402098_pidoux';
                $password = 'Chloelyloo789.';
                $conn = new mysqli($host, $user, $password, $dbname);
                // vérifier la connexion
                if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
  ?>
  <div class="container">
    <div>
      <h1>Hugo Pidoux</h1>
      <nav>
        <ul>
          <li><a href="./index.php">Accueil</a></li>
          <li><a href="./veille.php">Veille</a></li>
          <li><a href="./rectorat.php">Rectorat</a></li>
          <li><a href="./competences.php">Réalisation</a></li>
        </ul>
      </nav>
    </div>
    <img src="./public/images/profil.png" alt="Hugo Pidoux" />
  </div>
</header>
