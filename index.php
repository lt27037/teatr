<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <link rel="stylesheet" href="styles/homePage.css">
  <title>Teatr Polski w Poznaniu | Strona główna</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="homeContainer">
    <section class="topSection">
      <?php @include './components/homePageMenu.php' ?>
      <img src="./images/topSection-baner.png" alt="Baner" class="topSection__banner">
      <span class="topSection__mobileIcon">
        <svg width="24" height="50" viewBox="0 0 24 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.9995 15.5C11.9995 16.3285 11.1055 17 10.2992 17C9.49285 17 9 16.3285 9 15.5V14.5C9 15.3285 8.18582 16 7.3795 16C6.57319 16 6 15.3285 6 14.5V13V13.531C6 14.3595 5.26615 15.031 4.45983 15.031C3.65352 15.031 3 14.3595 3 13.531V8.49998C3 4.35798 6.26808 0.999984 10.2992 0.999985C12.3147 0.999985 14.1395 1.83949 15.4607 3.19649L20.6844 9.95549C21.1443 10.5505 21.0966 11.405 20.574 11.9425C20.0056 12.5265 19.0844 12.5265 18.5161 11.9425L16.4602 9.82999C15.8027 9.15449 15 9.633 15 10.588V13V21.5C15 22.3285 14.3465 23 13.5402 23C12.7338 23 12 22.3285 12 21.5V14.5" stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path id="arrow-top" d="M4 25L11.5833 32.56L19.1667 25" stroke="#161616" stroke-width="1.5"/>
          <path id="arrow-bottom" d="M4 31L11.5833 38.56L19.1667 31" stroke="#161616" stroke-width="1.5"/>
        </svg>
      </span>
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
  crossorigin="anonymous">
  </script>
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
                items:1.15
            },
            600:{
                items:1.6
            },
            1000:{
                items:2.2
            }
        }
      })
    });

    const handleNext = () => document.querySelector('.owl-next').click();
    const handlePrev = () => document.querySelector('.owl-prev').click();

    if(window.innerWidth > 786){
      gsap.fromTo('.mainHeader__list', {
        visibility: 'hidden',
        opacity: 0
        }, {
        visibility: 'visible',
        scrollTrigger: {
          trigger: '.topSection',
          start: 'top top',
          end: 'center top',
          scrub: 0.2,
        },
        opacity: 1,
        duration: 0.2,
      });
    }

  </script>
</body>
</html>