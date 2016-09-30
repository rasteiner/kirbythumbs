<?php snippet('header') ?>

  <main class="main" role="main">

    <img src="<?php echo 
      thumb(new Media(
        kirby()->roots()->index() . DS . 'images' . DS . 'cute-cat.jpg',
        kirby()->roots()->urls() . '/images/cute-cat.jpg'
      ), ['width' => 20])->url() ?>">

  </main>

<?php snippet('footer') ?>