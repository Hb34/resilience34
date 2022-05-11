<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=resilience34;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
 if($bdd){
     echo 'connexion bdd ok';
 } else {
    echo 'connexion bdd échouée';
 }

  $reponse = $bdd->query('SELECT * FROM soignants');
  $donnees = $reponse->fetchall();
  ?>
  <div class="row">
  <?php     

      foreach ($donnees as $ligne) {
          echo '<div class="col-12 col-md-4 mb-4">';
          echo '<div class="card h-100">';
          echo '<a href="#">
                      <img src=" '.$ligne["email"] .'" class="card-img-top" alt="...">
                  </a>';
          echo'<div class="card-body">';
          echo  '<ul class="list-unstyled d-flex justify-content-between">
                          <li>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                          </li>

                        </ul>';
          echo '<a href="#" class="h2 text-decoration-none text-dark">'.$ligne["nom"].'</a>';
          echo '<p class="card-text">' .
                      $ligne["prenom"].
                      '</p>';

          echo '</div>';
          echo  '</div>';
          echo '</div>';
        }
        ?>
      </div>
  </div>
