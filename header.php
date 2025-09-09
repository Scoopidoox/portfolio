<header>
  <?php
  // dynamisation des articles de veille
                // connexion à la base de données
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "portfolio";
                $conn = new mysqli($servername, $username, $password, $dbname);
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
          <li><a href="./documentation.php">Documentation</a></li>
        </ul>
      </nav>
    </div>
    <img src="./public/images/profil.png" alt="Hugo Pidoux" />
  </div>
</header>
