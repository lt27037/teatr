<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="./images/favicon.ico"/>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/homePage.css">
  <title>Teatr Polski w Poznaniu | Strona główna</title>
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
    <section class="programSection">
      <header class="programSection__header">
        <h2 class="programSection__title">Program festiwalu</h2>
        <a href="" class="programSection__viewAll">Zobacz wszystkie</a>
      </header>
      <?php @include './components/secondaryEvent.php' ?>
    </section>
    <section class="archivesSection">
      <header class="archivesSection__header">
        <h2 class="archivesSection__title">Archiwum</h2>
        <a href="" class="archivesSection__viewAll">Zobacz wszystkie</a>
      </header>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content">Ukraina</span>
        <span class="archivesSection__item__content">2019</span>
      </article>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content">Polska</span>
        <span class="archivesSection__item__content">2018</span>
      </article>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content">One</span>
        <span class="archivesSection__item__content">2015</span>
      </article>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content">Kain i Abel</span>
        <span class="archivesSection__item__content">2014</span>
      </article>
    </section>
  </main>
  <?php @include './components/footer.php' ?>
</body>
</html>