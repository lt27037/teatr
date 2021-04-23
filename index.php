<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <link rel="stylesheet" href="styles/homePage.css">
  <title>Teatr Polski w Poznaniu | Strona główna</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="container">
    <section class="topSection">
      <?php @include './components/homePageMenu.php' ?>
      <img src="./images/topSection-baner.png" alt="Baner" class="topSection__banner">
    </section>
    <section class="newsSection">
      <header class="newsSection__header">
        <h2 class="newsSection__title">Aktualnie</h2>
        <a href="news.php" class="newsSection__viewAll">
          <button class="button button--ghost">Zobacz wszystkie</button>
        </a>
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
        <a href="program.php" class="programSection__viewAll">Zobacz wszystkie</a>
        <nav class="programSection__header__buttons">
          <button 
          class="programSection__header__button button--prev" 
          onClick={handlePrev()}>
          </button>
          <button class="programSection__header__button button--next"
          onClick={handleNext()}>
          </button>
        </nav>
      </header>
      <div class="owl-carousel owl-theme">
        <?php @include './components/secondaryEvent.php' ?>
        <?php @include './components/secondaryEvent.php' ?>
        <?php @include './components/secondaryEvent.php' ?>
      </div>
    </section>
    <section class="archivesSection">
      <header class="archivesSection__header">
        <h2 class="archivesSection__title">Archiwum</h2>
        <a href="archive.php" class="archivesSection__viewAll">
          <button class="button button--ghost">Zobacz wszystkie</button>
        </a>
      </header>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content content--title">Ukraina</span>
        <span class="archivesSection__item__content">2019</span>
      </article>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content content--title">Polska</span>
        <span class="archivesSection__item__content">2018</span>
      </article>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content content--title">One</span>
        <span class="archivesSection__item__content">2015</span>
      </article>
      <article class="archivesSection__item">
        <span class="archivesSection__item__content content--title">Kain i Abel</span>
        <span class="archivesSection__item__content">2014</span>
      </article>
    </section>
  </main>
  <?php @include './components/footer.php' ?>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="owl/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2.2
            }
        }
      })
    });

    const handleNext = () => document.querySelector('.owl-next').click();
    const handlePrev = () => document.querySelector('.owl-prev').click();

    gsap.fromTo('.mainHeader__list', {
      visibility: 'hidden',
      opacity: 0
    }, {
      visibility: 'visible',
      scrollTrigger: {
        trigger: '.topSection',
        start: 'top top',
        scrub: true,
      },
      opacity: 1,
      duration: 0.2,
    });

  </script>
</body>
</html>