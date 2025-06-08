<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $site->title()?> | <?= $page->title() ?></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌸</text></svg>">

	
  <?= css(['assets/css/global.css', 'assets/type/typography.css', 'assets/css/mobile.css', '@auto',]) ?>
</head>

<?php $afterpage = page('about'); ?>

<body class="home_landing">
  <div class="header">
    <div class="title">
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </div>
  </div>
  <div class="landing">
    <?php if($image = $site->landing()->toFile()): ?>
      <a href="<?= $afterpage->url() ?>">
        <img class="feature-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?> | Credit: <?= $image->credit() ?>">
        <figcaption>Enter</figcaption>
      </a>
    <?php endif ?>
  </div>

  <?php snippet('footer') ?>