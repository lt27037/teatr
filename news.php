<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <!-- <link rel="stylesheet" href="./styles/news.css"> -->
  <title>Teatr Polski w Poznaniu | Aktualnie</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="container">
    <header class="container__header">
      <h2 class="container__title">Aktualnie</h2>
    </header>
    <section class="news">
      <div class="news__column">
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
        <?php @include './components/primaryArticle.php' ?>
      </div>
      <div class="news__column">
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