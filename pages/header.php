
<header class="flex a_center" id="header">
<!-- ========================== IF WE ARE CONNECTED ============================= -->

  <?php if (isset($_SESSION['id'])) { ?>

    <nav class="flex a_center">
      <ul class="flex a_center">
        <li id="Title_Page"> <a href="/discussion/index.php">JONADEVYS</a></li>
      </ul>

      <ul class="flex j_around a_center">
        <li> <a href="/discussion/pages/discussion.php">Discussion</a></li>
        <li id="Profil_Menu" class="flex flex_column j_center a_center"> <a href="/discussion/pages/profil.php" id="Profil_submenu" class="flex a_center j_center">Profil </a>
      </ul>
    </nav>

  <!--=========================== IF WE ARE DOESN'T CONNECTED =============================== -->
  <?php } else { ?>

    <nav class="flex a_center j_around">
      <ul class="flex a_center">
        <li id="Title_Page"><a href="/discussion/index.php">JONADEVYS</a></li>
      </ul>

      <ul class="flex j_around a_center">
        <li id="Discussion_Menu" class="flex j_center flex_column a_center"><a href="/discussion/pages/discussion.php">Discussion</a></li>
        <li id="Profil_Menu" class="flex flex_column j_center a_center"> <a href="#" id="Profil_submenu" class="flex a_center j_center">Profil </a>
          <ul id="submenu">
            <li> <a href='/discussion/pages/inscription.php'>Inscription</a> </li>
            <li> <a href="/discussion/pages/connexion.php">Connexion</a> </li>
          </ul>
        </li>
      </ul>
    </nav>


<!-- ==================================== END ==================================== -->
      <?php } ?>
</header>
