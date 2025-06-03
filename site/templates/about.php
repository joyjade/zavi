<?php snippet('nav') ?>
<div class="content">
  <div class="about">
    <div class="photo-col">
      <?php if($image = $page->photo()->toFile()): ?>
        <img class="profile" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <figcaption><?= $image->credit()?></figcaption>
      <?php endif ?>
    </div>
    <div>
      <?= $page->text()->kirbytext() ?> 
      <br />
      <?php if($page->hasChildren()):
          $subpage = $page->children()->first();?>
        <p class="mobile-only">
          <a href="<?=$subpage->url()?>" class="red"><?=$subpage->title()?>  ❁✿</a>
      </p>
      <?php endif ?>
    </div>
  </div>
</div>
<?php snippet('footer') ?>