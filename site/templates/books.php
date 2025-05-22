<?php snippet('nav') ?>
<div class="content">
  <?php foreach($page -> children() -> listed() as $book): ?>
    <div class="book">
      <div class="photo-col">
        <?php if($image = $book->image()): ?>
          <img class="cover" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <?php endif ?>
      </div>
      <div>
        <a href="<?= $book-> url() ?>"><h2><?= $book->title() ?></h2></a>
        <?= $book->summary()->excerpt(200)->kirbytext() ?>
      </div>
    </div>
  <?php endforeach ?>
</div>
<?php snippet('footer') ?>