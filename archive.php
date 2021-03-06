<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <!-- <link rel="stylesheet" href="styles/archive.css"> -->
  <title>Teate Polski w Poznaniu | Archiwum</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="archiveContainer">
    <header class="archiveContainer__header">
      <h2 class="archiveContainer__title">Archiwum</h2>
    </header>
    <nav class="archiveContainer__years">
      <ul class="archiveContainer__years__list">
        <li class="archiveContainer__years__item item--active">
          <a href="" class="archiveContainer__years__link">2019</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2018</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2015</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2014</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2013</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2012</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2011</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2010</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2009</a>
        </li>
        <li class="archiveContainer__years__item">
          <a href="" class="archiveContainer__years__link">2007</a>
        </li>
      </ul>
    </nav>
    <section class="category">
      <h3 class="category__title">Edycja XII - Ukraina</h3>
      <div class="category__wrapper">
        <?php @include './components/archiveArticle.php' ?>
        <?php @include './components/archiveArticle.php' ?>
        <?php @include './components/archiveArticle.php' ?>
        <?php @include './components/archiveArticle.php' ?>
        <?php @include './components/archiveArticle.php' ?>
        <?php @include './components/archiveArticle.php' ?>
        <?php @include './components/archiveArticle.php' ?>
      </div>
    </section>
  </main>
  <?php @include './components/footer.php' ?>
</body>
</html>