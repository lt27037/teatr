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
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
      <a href="" class="linkWrapper"><?php @include './components/primaryArticle.php' ?></a>
    </section>
    <button class="button button--ghost">Wczytaj więcej</button>
  </main>
  <?php @include './components/footer.php' ?>
  <script>
    const posts = document.getElementsByClassName('primaryArticles');
    const wrapper = document.querySelector('.news');

    // posts.onChange = () => {
    //   wrapper.style.height = `${math.floor(wrapper.length / 4) * 898}px`
    // };

    // posts.addEventListener('change', () => {
    //   console.log(posts.length);
    // })
    console.log(posts)

  </script>
</body>
</html>