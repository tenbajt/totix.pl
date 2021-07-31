<?php

$meta_title = 'Certyfikaty | W pogoni za perfekcją | Totix - Tobiasz Nowacki';
$meta_description = 'Dla naszych klientów stale podnosimy poziom naszej wiedzy i umiejętności, tak aby wykonana przez nas praca spełniała oczekiwania zleceniodawcy. Skontaktuj się z nami i poznaj indywidualną wycenę.';
$meta_image = 'images/backgrounds/certificates-intro.jpg';

$permalink = 'https://www.totix.pl/certyfikaty';

$page_name = 'certificatespage';

$certificates = array_filter( scandir( 'images/certificates' ), function( $item ) {
  return $item[0] !== '.';
});

while ( count( $certificates ) < 3 ) {
  $certificates[] = '';
}

include 'template-parts/header.php';

?>

<div class="intro-section">
  <div class="content-wrapper">
    <div class="text-wrapper">
      <h3 class="eyebrow">
        Certyfikaty
      </h3>
      <h1 class="heading">
        W pogoni za perfekcją
      </h1>
      <p class="text">
        Dla naszych klientów stale podnosimy poziom naszej wiedzy i umiejętności, tak aby wykonana przez nas praca spełniała oczekiwania zleceniodawcy.
      </p>
    </div>
    <img class="image" src="images/backgrounds/certificates-intro.svg">
  </div>
</div>
<div class="certificates-listing">
  <div class="content-wrapper">
    <?php foreach( $certificates as $certificate ): ?>
      <?php if ( ! empty( $certificate ) ): ?>
        <img class="certificate-image" src="images/certificates/<?= $certificate ?>">
      <?php else: ?>
        <img class="reference-image">
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

<?php

include 'template-parts/footer.php';

?>