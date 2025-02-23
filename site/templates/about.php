<?php snippet('nav') ?>
<div class="content">
  <div class="about">
    <?= $page->text()->kirbytext() ?> 
    <?php if($image = $page->image()): ?>
      <img class="profile" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
  </div>
</div>
<?php snippet('footer') ?>