<?php snippet('nav') ?>
<div class="content">
  <ul class="flex writing">
    <?php foreach(  $page-> poetry() -> toStructure() as $poetry ): ?> 
      <li>
        <p>“<a href="<?=$poetry -> link() ?>"><?=$poetry -> title()?></a>,” ⟶
        <?=$poetry -> publisher() ?></p>
      </li>
    <?php endforeach ?>
    </ul>
</div>
<?php snippet('footer') ?>