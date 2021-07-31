<?php

$meta_title = 'Referencje | Satsysfakcja dla nas to zadowolony klient | Totix - Tobiasz Nowacki';
$meta_description = 'Realizując projekty dbamy o wszelkie szczegóły, pracując na jak najwyższym poziomie z zachowaniem założonych terminów. 
W konsekwencji nasza firma posiada szereg zadowolonych klientów, z którymi prowadzimy stałą współpracę. Skontaktuj się z nami i poznaj indywidualną wycenę.';
$meta_image = 'images/backgrounds/references-intro.jpg';

$permalink = 'https://www.totix.pl/referencje';

$page_name = 'referencespage';

$references = array_filter( scandir( 'images/references' ), function( $item ) {
  return $item[0] !== '.';
});

while ( count( $references ) < 3 ) {
  $references[] = '';
}

include 'template-parts/header.php';

?>

<div class="intro-section">
  <div class="background-wrapper">
    <img class="background-image" src="images/backgrounds/references-intro.jpg">
    <div class="background-overlay"></div>
  </div>
  <div class="content-wrapper">
    <div class="text-wrapper">
      <h3 class="eyebrow">
        Referencje
      </h3>
      <h1 class="heading">
        Satysfakcja dla nas to zadowolony klient
      </h1>
      <p class="text">
        Realizując projekty dbamy o wszelkie szczegóły, pracując na jak najwyższym poziomie z zachowaniem założonych terminów. W konsekwencji nasza firma posiada szereg zadowolonych klientów, z którymi prowadzimy stałą współpracę.
      </p>
    </div>
  </div>
</div>
<div class="references-listing">
  <div class="content-wrapper">
    <?php foreach( $references as $reference ): ?>
      <?php if ( ! empty( $reference ) ): ?>
        <img class="reference-image" src="images/references/<?= $reference ?>">
      <?php else: ?>
        <img class="reference-image">
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

<?php

include 'template-parts/footer.php';

?>