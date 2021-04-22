<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/homePage.css">
  <title>Teatr polski w Poznaniu</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="container">
    <section class="topSection">
      <img src="./images/topSection-baner.png" alt="Baner" class="topSection__banner">
    </section>
    <section class="newsSection">
      <header class="newsSection__header">
        <h2 class="newsSection__title">Aktualnie</h2>
        <a href="" class="newsSection__viewAll">Zobacz wszystkie</a>
      </header>
      <div class="newsSection__wrapper">
        <div class="newsSection__mainArticle">
          <?php @include './components/primaryArticle.php' ?>
        </div>
        <div class="newsSection__articles">
          <?php @include './components/secondaryArticle.php' ?>
          <?php @include './components/secondaryArticle.php' ?>
          <?php @include './components/secondaryArticle.php' ?>
        </div>
      </div>
    </section>
  </main>
  <?php @include './components/footer.php' ?>
</body>
</html>