<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $site->title()?> | <?= $page->title() ?></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌸</text></svg>">

	
  <?= css(['assets/css/global.css', 'assets/type/typography.css', 'assets/css/mobile.css', '@auto',]) ?>
</head>

<body class="">
  <div class="header">
    <div class="title">
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </div>
  </div>

	<nav>
    <ul class="nav">
      <?php foreach ($site->children()->listed() as $item): ?>
        <li class="item">
          <a <?php e($item->isActive(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          <?php if($item->isOpen() and $item->hasChildren()): ?>
            <ul class="sublist desktop-only">
              <?php foreach ($item->children()->listed() as $subitem): ?> 
                <li class="subitem <?=$subitem->title()?>">
                  <a <?php e($subitem->isOpen(), 'class="active"') ?> href="<?= $subitem->url()?>"><?= $subitem->title()?></a>
                </li>
              <?php endforeach ?>
              </ul>
          <?php endif ?> 
        </li>
      <?php endforeach ?>
    </ul>
</nav>
