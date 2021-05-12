<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <title>Teatr Polski w Poznaniu | Aktualnie</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="container">
    <header class="container__header">
      <h2 class="container__title">Aktualnie</h2>
    </header>
    <section class="news">
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
    </section>
    <button class="button button--ghost">Wczytaj więcej</button>
  </main>
  <?php @include './components/footer.php' ?>
  <script>
    
    const wrapper = document.querySelector('.news');

    const handleResize = () => {
      const posts = document.getElementsByClassName('primaryArticle');
      wrapper.style.height = `${Math.ceil(posts.length / 2) * 490}px`;
    }

    window.onload = () => handleResize();

  </script>
</body>
</html>