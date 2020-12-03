
<header class="flex a_center" id="header">
  <nav class="flex a_center">
    <ul class="flex a_center j_around" id="Menu">

<!-- ========================== IF WE ARE CONNECTED ============================= -->

      <?php if (isset($_SESSION['id'])) { ?>

        <li class="menu-html"> <a href='/Project Pool 2/discussion/index.php'>Acceuil</a> </li>
        <li class="menu-html"> <a href='/Project Pool 2/discussion/pages/discussion.php'>Discussion</a> </li>
        <li class="menu-html"> <a href="#" class="hoversub"> Profil <i class='fas fa-user-alt'></i> </a>
          <ul class="submenu flex a_center">
            <li id="submenu_deconnexion"> <a class="" href="/Project Pool 2/discussion/pages/profil.php">Mon Profil</a></li>
          </ul>
        </li>

<!--=========================== IF WE ARE DOESN'T CONNECTED =============================== -->
      <?php } else { ?>

        <li class="menu-html"> <a href='/Project Pool 2/discussion/index.php'>Acceuil</a> </li>
        <li class="menu-html"> <a href='/Project Pool 2/discussion/pages/discussion.php'>Discussion</a> </li>
        <li class="menu-html"> <a href="#" class="hoversub"> Profil <i class='fas fa-user-alt'></i> </a>
          <ul class="submenu flex a_center">
            <li id="submenu_connexion"> <a href='/Project Pool 2/discussion/pages/connexion.php'>Connexion</a> </li>
            <li id="submenu_inscription"> <a href='/Project Pool 2/discussion/pages/inscription.php'>Inscription</a> </li>
          </ul>
        </li>

<!-- ==================================== END ==================================== -->
      <?php } ?>
    </ul>
  </nav>
</header>
