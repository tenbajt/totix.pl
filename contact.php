<?php

if ( $_POST ) {

  $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
  $surname = filter_var( $_POST['surname'], FILTER_SANITIZE_STRING );

  $phone_number = $_POST['phone'];

  $email_address = str_replace (array( "\r", "\n", "%0a", "%0d" ), '', $_POST['email'] );
  $email_address = filter_var( $email_address, FILTER_VALIDATE_EMAIL );

  $message = $_POST['message'];

  $to = 'biuro@totix.pl';

  $subject = '[Formularz kontaktowy] ' .$name. ' ' . $surname;

  $message .= "\n";
  $message .= '--------------------' . "\n";
  $message .= 'Imię: ' . $name . "\n";
  $message .= 'Nazwisko: ' . $surname . "\n";
  $message .= 'Telefon: ' . $phone_number . "\n";
  $message .= 'E-mail: ' . $email_address . "\n";
  $message = htmlspecialchars($message);

  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/plain; charset=utf-8';

  $headers[] = 'To: ' . $to;
  $headers[] = 'From: ' . $name . ' ' . $surname . ' <' . $email_address . '>';

  if ( mail( $to, $subject, $message, implode( "\r\n", $headers ) ) ) {
    $form_result_positive = 'Wiadomość została wysłana.';
  } else {
    $form_result_negative = 'Wystąpił problem. Spróbuj ponownie później.';
  }
}

$meta_title = 'Kontakt - Zapraszamy do kontaktu z naszą firmą | Totix - Tobiasz Nowacki';
$meta_description = 'Skontaktuj się z nami i poznaj indywidualną wycenę. Tel: (+48) 605 460 945 | E-mail: biuro@totix.pl | Adres: Zbrudzewo, ul. Długa 3, 63-100 Śrem
 | Poniedziałek - Sobota 08:00 - 18:00';
$meta_image = 'images/logos/totix.jpg';

$permalink = 'https://www.totix.pl/kontakt';

$page_name = 'contactpage';

include 'template-parts/header.php';

?>

<div class="intro-section">
  <div class="content-wrapper">
    <h1 class="heading">
      Zapraszamy do kontaktu z naszą firmą
    </h1>
  </div>
</div>
<div class="contact-options">
  <div class="contact-options__wrapper">
    <div class="contact-option">
      <i class="contact-option__icon material-icons">
        phone
      </i>
      <ul class="contact-option__list">
        <li class="contact-option__list-item">
          <h3 class="contact-option__list-text">
            (+48) 605 460 945
          </h3>
          <a class="contact-option__list-button" href="tel:+48605460945">
            Zadzwoń
          </a>
        </li>
        <li class="contact-option__list-item">
          <h3 class="contact-option__list-text">
            (+48) 661 100 219
          </h3>
          <a class="contact-option__list-button" href="tel:+48661100219">
            Zadzwoń
          </a>
        </li>
      </ul>
    </div>
    <div class="contact-option">
      <i class="contact-option__icon material-icons">
        mail
      </i>
      <h3 class="contact-option__text">
        biuro@totix.pl
      </h3>
      <a class="contact-option__button" href="mailto:biuro@totix.pl">
        Wyślij e-mail
      </a>
    </div>
    <div class="contact-option">
      <i class="contact-option__icon material-icons">
        business
      </i>
      <h3 class="contact-option__text">
        TOTIX<br>
        Tobiasz Nowacki<br>
        Zbrudzewo, ul. Długa 3<br>
        63-100 Śrem
      </h3>
    </div>
  </div>
</div>
<div class="form-section">
  <div class="content-wrapper">
    <h2 class="heading">
      Formularz kontaktowy
    </h2>
    <?php if ( isset( $form_result_positive ) ): ?>
      <p class="result-positive-text">
        <?= $form_result_positive ?>
      </p>
    <?php elseif ( isset( $form_result_negative ) ): ?>
      <p class="result-negative-text">
        <?= $form_result_negative ?>
      </p>
    <?php endif; ?>
    <form method="post">
      <input class="name" type="text" name="name" placeholder="Imię" pattern="[A-Z\sa-z]{3,20}" required></input>
      <input class="surname" type="text" name="surname" placeholder="Nazwisko" pattern="[A-Z\sa-z]{3,20}" required></input>
      <input class="phone" type="tel" name="phone" placeholder="Telefon" required></input>
      <input class="email" type="email" name="email" placeholder="E-mail" required></input>
      <textarea class="message" rows="5" name="message" placeholder="Wiadomość" required></textarea>
      <div class="agreement-wrapper">
        <input class="agreement-checkbox" type="checkbox" required></input>
        <i class="agreement-checkmark material-icons">
          check
        </i>
        <label class="agreement-text">
          Wyrażam zgodę na zbieranie i przetwarzanie moich danych osobowych zgodnie z Ogólnym Rozporządzeniem o Ochronie Danych (UE) 2016/679 w związku z realizacją zgłoszenia. Przyjmuję do wiadomości, że podanie danych jest dobrowolne, ale niezbędne do przetworzenia zgłoszenia oraz, że przysługuje mi prawo dostępu do swoich danych, możliwości ich poprawiania, żądania zaprzestania ich przetwarzania lub usunięcia.
        </label>
      </div>
      <button class="button" type="submit">
        Wyślij
      </button>
    </form>
  </div>
</div>
<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2449.8117952912!2d17.033119115792555!3d52.1195530797404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4705005ac5a7cda5%3A0x109379a08a9c18d0!2sD%C5%82uga%203%2C%2063-100%20Zbrudzewo!5e0!3m2!1spl!2spl!4v1581713623701!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

<?php

include 'template-parts/footer.php';

?>