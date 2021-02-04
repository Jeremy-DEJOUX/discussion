<?php require_once('../configs/config.php');
$error = null;
if (isset($_SESSION['id'])) {


if (isset($_POST['ajouter'])) {
  $error = ajout_msg($bdd, $_POST['ajout_commentaire']);
}
$querry = mysqli_query($bdd, 'SELECT messages.id_utilisateur , utilisateurs.login, messages.message, messages.date FROM utilisateurs INNER JOIN messages ON messages.id_utilisateur = utilisateurs.id ORDER BY date DESC');

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/discussion.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <title>Discussion</title>
  </head>

  <body>

    <?php require_once('header.php'); ?>

    <main class="flex column j_between a_center" id="livre_main">

      <h1>Discussion</h1>
      <section>
        <?php
          while ($a = mysqli_fetch_assoc($querry))
          {
            echo "<br /> <br /> <br /> <br />"
            ."Le "
            ."<u>".$a['date']."</u>"
            ." <b>".$a['login']."</b>"
            ." a l'aissé ce message:"
            ."<br/> <br/>"
            .$a['message'];
          }
        ?>
      </section>

      <?php if (isset($error)) {
          echo "<h2>$error</h2>";
      }?>
      <form class="flex column j_around a_center" action="" method="post">

        <label for="ajout_commentaire">Discussion</label>
        <textarea name="ajout_commentaire" rows="20" cols="80"></textarea>
        <button type="submit" name="ajouter">Ajouter</button>
      </form>



    </main>

    <?php require_once('footer.php') ?>

  </body>
</html>
<?php }
else { ?>
  <html lang="fr" dir="ltr">

    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../CSS/discussion.css">
      <link rel="stylesheet" href="../CSS/header.css">
      <link rel="stylesheet" href="../CSS/footer.css">
      <title>Discussion</title>
    </head>

    <body>

      <?php require_once('header.php'); ?>

      <main class="flex column j_between a_center" id="livre_main">
        <h1>Vous n'êtes pas connecté</h1>
      </main>

      <?php include_once('footer.php'); ?>
    </body>
  </html>
  <?php
}
 ?>
