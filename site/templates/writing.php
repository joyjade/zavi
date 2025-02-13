<?php snippet('nav') ?>
<div class="content">
  <?php foreach(  $page-> poetry() -> toStructure() as $poetry ): ?> 
    <div class="flex table">
      <h1> hello </h1>
      <p><a href="<?=$poetry -> link() ?>"><?=$poetry -> title()?></a> ⟶</p>
      <p><?=$poetry -> publisher() ?></p>
    </div>
  <?php endforeach ?>
</div>
<?php snippet('footer') ?>