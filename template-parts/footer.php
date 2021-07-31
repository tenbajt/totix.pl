<?php

$contact_items = array(
  (object) array(
    'icon' => 'phone',
    'href' => 'tel:+48605460945',
    'name' => '(+48) 605 460 945',
  ),
  (object) array(
    'icon' => 'mail',
    'href' => 'mailto:totix.biuro@gmail.com',
    'name' => 'totix.biuro@gmail.com',
  ),
  (object) array(
    'icon' => 'business',
    'href' => 'https://goo.gl/maps/jkFzo3a3rGkUHgcQA',
    'name' => 'Zbrudzewo, ul. Długa 3<br>63-100 Śrem',
  ),
);

?>
    
    </main>
    <footer>
      <div class="content-wrapper">
        <div class="block">
          <h6 class="heading">
            Totix
          </h6>
          <ul class="nav-items-list">
            <?php foreach ( $nav_menu_items as $nav_item ): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $nav_item->href ?>">
                  <?= $nav_item->name ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="block">
          <h6 class="heading">
            Godziny otwarcia
          </h6>
          <p class="text">
            Poniedziałek - Sobota<br>
            08:00 - 18:00
          </p>
        </div>
        <div class="block">
          <h6 class="heading">
            Kontakt
          </h6>
          <ul class="footer__contact-items">
            <li class="footer__contact-item">
              <i class="footer__contact-icon material-icons">
                phone
              </i>
              <a class="footer__contact-link" href="tel:+48605460945">
                (+48) 605 460 945
              </a><br>
              <a class="footer__contact-link" href="tel:+48661100219">
                (+48) 661 100 219
              </a>
            </li>
            <li class="footer__contact-item">
              <i class="footer__contact-icon material-icons">
                mail
              </i>
              <a class="footer__contact-link" href="mailto:biuro@totix.pl">
                biuro@totix.pl
              </a>
            </li>
            <li class="footer__contact-item">
              <i class="footer__contact-icon footer__contact-icon--multiline material-icons">
                business
              </i>
              <a class="footer__contact-link" href="https://goo.gl/maps/jkFzo3a3rGkUHgcQA" target="_blank">
                Zbrudzewo, ul. Długa 3<br>
                63-100 Śrem
              </a>
            </li>
          </ul>
        </div>
        <div class="block">
          <a class="logo-wrapper" href="/">
            <img class="logo-image" src="images/logos/totix-light.svg">
          </a>
          <div class="copyright">
            © 2020 Totix - Tobiasz Nowacki
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/tenbajt.js?ver=1.0"></script>
  </body>
</html>




