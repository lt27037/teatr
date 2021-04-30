<!DOCTYPE html>
<html lang="en">
<head>
  <?php @include './bodyElements/head.php' ?>
  <link rel="stylesheet" href="./styles/lightbox.css">
  <!-- <link rel="stylesheet" href="./styles/eventDetails.css"> -->
  <title>Teatr Polski w Poznaniu | Wydarzenie</title>
</head>
<body>
  <?php @include './components/mainHeader.php' ?>
  <main class="eventDetailsContainer">
    <header class="eventDetailsContainer__header">
      <h2 class="eventDetailsContainer__title">KOINCYDENCJA | instalacja multimedialna</h2>
    </header>
    <section class="details">
      <div class="details__element main--element">
        <span class="details__date">9 / 11 / 2020</span>
        <h3 class="details__title">KOINCYDENCJA | instalacja multimedialna</h3>
      </div>
      <div class="details__leftBar">
        <div class="details__element">
          <span class="details__element__title">miejsce</span>
          <span class="details__element__content">KINO MUZA, sala nr. 1</span>
        </div>
        <div class="details__element">
          <span class="details__element__title">kiedy</span>
          <span class="details__element__content">9 / 11 / 2020</span>
        </div>
        <div class="details__element">
          <span class="details__element__title">godzina</span>
          <span class="details__element__content">17:00</span>
        </div>
        <div class="details__element">
          <span class="details__element__title">cena</span>
          <span class="details__element__content">Wydarzenie już się odbyło</span>
        </div>
        <div class="details__element">
          <span class="details__element__title">artyści</span>
          <span class="details__element__content">Yuliia Andriichuk, Patryk Lichota</span>
        </div>
        <div class="details__element element--link">
          <span class="details__element__title">dokumentacja fotograficzna</span>
          <a href="" class="details__element__link">Link</a>
        </div>
        <div class="details__element ">
          <span class="details__element__title">instalacja w przestrzeni VR</span>
          <a href="" class="details__element__link">Link</a>
        </div>
      </div>
      <div class="details__rightBar">
        <p class="details__text">Ukraińsko-polskie małżeństwo artystów młodego pokolenia mieszkające w Poznaniu – Yuliia Andriichuk i Patryk Lichota – stworzą w Teatrze Polskim w Poznaniu instalację multimedialną. Dźwięki, obrazy i technologia przeniosą nas do świata na styku kultury polskiej i ukraińskiej, pozwalając zobaczyć (i usłyszeć) to, co kulturowo nas łączy i odróżnia, jak i to, co jest nam bliskie i dalekie.</p>
        <p class="details__text">Społeczność ukraińska bardzo wyraźnie zarysowała swoją obecność w Polsce. Jednocześnie jest to społeczność tylko pozornie skonsolidowana, która tworzy rodzaj diaspory w sposób szczątkowy. WSPÓŁWYSTĘPUJE. Jest czujna wobec siebie, obserwuje się i porównuje, identyfikuje się nieco z obowiązku, urzędniczego nadania. Jest tranzycyjna, chwilowo przemieszkuje w Polsce, by wysyłać pieniądze, znieść różnice ekonomiczne, wrócić do ojczyzny. ALBO, nigdy już nie wróci, wypiera i absorbuje jednocześnie, jest obcym pośród swoich. Instalacja „Koincydencja” pokazuje te relacje w sposób niedosłowny, raczej jako metafory napięć międzykulturowych relacji, gier, zderzeń, nieprzenikalności i autonomii. Pojęcie narodu – choćby w migotliwej definicji – zostaje wydestylowane do niemal fizykalnego laboratorium i gabinetu osobliwości. ZBIEŻNOŚĆ ta nie jest wyjątkowa na tle globalnych procesów migracyjnych, ale stwarza polskiemu społeczeństwu warunki do obserwacji swojej (już nie całkowicie) monokultury.</p>
      </div>
    </section>
    <section class="gallery">
      <h2 class="eventDetailsContainer__title">Galeria</h2>
      <div class="gallery__wrapper">
        <a href="images/gallery-examples/pictures1.jpg" data-lightbox="gallery">
          <img src="./images/gallery-examples/pictures1.jpg" alt="Zdjęcie w galerii" class="gallery__picture">
        </a>
        <a href="images/gallery-examples/pictures3.jpg" data-lightbox="gallery">
          <img src="./images/gallery-examples/pictures3.jpg" alt="Zdjęcie w galerii" class="gallery__picture">
        </a>
        <a href="images/gallery-examples/pictures2.jpg" data-lightbox="gallery">
          <img src="./images/gallery-examples/pictures2.jpg" alt="Zdjęcie w galerii" class="gallery__picture">
        </a>
      </div>
    </section>
    <section class="partners">
      <h2 class="eventDetailsContainer__title">Partnerzy</h2>
      <div class="partners__wrapper">
        <img 
        src="./images/poznan-logo.svg" 
        alt="Logo partnera" 
        class="partners__logo">
        <img 
        src="./images/ukrainian-institute-logo.svg" 
        alt="Logo partnera" 
        class="partners__logo">
        <img 
        src="./images/instytut-teatralny-logo.svg" 
        alt="Logo partnera" 
        class="partners__logo">
        <img 
        src="./images/ministerstwo-kultury-logo.svg" 
        alt="Logo partnera" 
        class="partners__logo">
      </div>
    </section>
  </main>
  <?php @include './components/footer.php' ?>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
  </script>
  <script src="./scripts/lightbox.js"></script>
</body>
</html>