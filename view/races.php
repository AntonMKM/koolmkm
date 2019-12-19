<?php $title = 'Les races jouables';
ob_start();
?>

<!-- Affichage des cartes -->
<h3 style="text-align: center"> Races jouables alliés</h3>
<br>

<div class="container row">
  <div class="card col-md-3" style="margin-left:6%">
    <img class="card-img-top" src="public/img/races/nain.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nain</h5>
      <p class="card-text">Braves et intrépides, les nains sont une race antique descendant des terrestres, des êtres de pierre vivante créés par les titans à l’aube du monde.</p>
      <a href="https://worldofwarcraft.com/fr-fr/game/races/dwarf" class="btn btn-warning">En savoir plus</a>
    </div>
  </div>
  <div class="card col-md-3 offset-1">

    <img class=" card-img-top" src="public/img/races/humain.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Humain</h5>
      <p class="card-text">De récentes découvertes ont permis d’établir que les humains descendent des sauvages vrykuls, des guerriers géants vivant dans le Norfendre. </p>
      <a href="https://worldofwarcraft.com/fr-fr/game/races/human" class="btn btn-warning">En savoir plus</a>
    </div>
  </div>
  <div class="card col-md-3 offset-1">
    <img class=" card-img-top" src="public/img/races/elfe.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Elfe</h5>
      <p class="card-text">L’antique et solitaire peuple des elfes de la nuit joua un rôle crucial dans le destin d’Azeroth. Ceux d’aujourd’hui se rappellent encore la guerre des Anciens.</p>
      <a href="https://worldofwarcraft.com/fr-fr/game/races/night-elf" class="btn btn-warning">En savoir plus</a>
    </div>
  </div>
</div>

<h3 style="text-align: center"> Races jouables horde</h3>
<br>
<div class="container row">
  <div class="card col-md-3" style=" margin-left:6%">
    <img class="card-img-top" src="public/img/races/undead.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mort vivant</h5>
      <p class="card-text">La mort n’offrit nul repos aux humains tués par centaines lors de la campagne d’extermination menée par le roi-liche en Lordaeron.</p>
      <a href="https://worldofwarcraft.com/fr-fr/game/races/undead" class="btn btn-warning">En savoir plus</a>
    </div>
  </div>
  <div class="card col-md-3 offset-1">

    <img class=" card-img-top" src="public/img/races/orc.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Orc</h5>
      <p class="card-text">Contrairement aux autres peuples de la Horde, les orcs ne sont pas originaires d’Azeroth, mais descendent de clans chamaniques qui peuplaient la verdoyante Draenor.</p>
      <a href="https://worldofwarcraft.com/fr-fr/game/races/orc" class="btn btn-warning">En savoir plus</a>
    </div>
  </div>
  <div class="card col-md-3 offset-1">

    <img class=" card-img-top" src="public/img/races/troll.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Troll</h5>
      <p class="card-text">Les trolls sauvages d’Azeroth sont tristement connus pour leur cruauté, leur pratique de la magie noire, et leur haine féroce des autres races.</p>
      <a href="https://worldofwarcraft.com/fr-fr/game/races/troll" class="btn btn-warning">En savoir plus</a>
    </div>
  </div>
</div>
<hr>

<?php
$content = ob_get_clean();
require 'template.php';
?>