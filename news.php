<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <!-- <link rel="stylesheet" href="./styles/news.css"> -->
  <title>Teatr Polski w Poznaniu | Aktualnie</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="newsContainer">
    <header class="newsContainer__header">
      <h2 class="newsContainer__title">Aktualnie</h2>
    </header>
    <section class="newsContainer__wrapper">
      <div class="newsContainer__wrapper__column">
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
      </div>
      <div class="newsContainer__wrapper__column">
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
      </div>
    </section>
    <button class="button button--ghost">Wczytaj więcej</button>
  </main>
  <?php @include './components/footer.php' ?>
</body>
</html>