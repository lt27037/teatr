<footer class="footer footer--contact">
  <section class="footer__leftBar">
    <?php @include 'logo.php' ?>
  </section>
  <section class="footer__rightBar">
  <div class="footer__wrapper">
    <a href="" class="footer__link">Teatr Polski w Poznaniu</a>
    <a href="" class="footer__link">Facebook</a>
  </div>
  </section>
  <div class="footer__toTop" onClick={handleToTop()}>
    <span class="footer__link">na górę</span>
  </div>
</footer>
<script src="./scripts/mobileMenu.js"></script>
<script>
  const handleToTop = () => window.scroll({
  top: 0, 
  left: 0, 
  behavior: 'smooth',
  })
</script>