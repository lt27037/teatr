<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <!-- <link rel="stylesheet" href="./styles/program.css"> -->
  <title>Teatr Polski w Poznaniu | Program Festiwalu</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="programContainer">
    <header class="programContainer__header">
      <h2 class="programContainer__title">Program Festiwalu</h2>
    </header>
    <section class="programContainer__wrapper">
      <?php @include './components/primaryEvent.php' ?>
      <?php @include './components/primaryEvent.php' ?>
      <?php @include './components/primaryEvent.php' ?>
    </section>
    <button class="button button--ghost">Wczytaj więcej</button>
  </main>
  <?php @include './components/footer.php' ?>
</body>
</html>