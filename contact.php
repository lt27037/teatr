<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <!-- <link rel="stylesheet" href="./styles/contact.css"> -->
  <title>Teatr Polski w Poznaniu | Kontakt</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="contactContainer">
    <header class="contactContainer__header">
      <h2 class="contactContainer__title">Kontakt</h2>
    </header>
    <section class="contact">
      <div class="contact__wrapper">
        <div class="contact__data">
          <span class="contact__data__subtitle">Teatr Polski w Poznaniu</span>
        </div>
        <div class="contact__data">
          <span class="contact__data__line">27 Grudnia 8/10</span>
          <span class="contact__data__line">61-737 Poznań</span>
        </div>
        <div class="contact__data">
          <span class="contact__data__line">tel. +48 61 852 56 27</span>
          <span class="contact__data__line">fax. +48 61 852 05 41</span>
        </div>
        <div class="contact__data">
          <span class="contact__data__line">e-mail:</span>
          <span class="contact__data__line">rezerwacja@teatr-polski.pl</span>
          <span class="contact__data__line">teatr.polski@teatr-polski.pl</span>
        </div>
      </div>
      <div class="contact__map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.903695865318!2d16.921447415692626!3d52.40842157979318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b37ea9b7c4f%3A0x9fb0d5f3c44525db!2sTeatr%20Polski%20w%20Poznaniu%201875!5e0!3m2!1spl!2spl!4v1619186816241!5m2!1spl!2spl" width="587" height="292" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </main>
  <script src="./scripts/mobileMap.js"></script>
  <?php @include './components/footer.php' ?>
</body>
</html>