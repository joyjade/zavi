<?php snippet('nav') ?>
<div class="content">
  <ul class="flex writing">
    <h3>Poetry</h3>
    <?php foreach(  $page-> poetry() -> toStructure() as $poetry ): ?> 
      <li>
        <p>“<a href="<?=$poetry -> link() ?>"><?=$poetry -> title()?></a>,” ⟶
        <?=$poetry -> publisher() ?> (<?=$poetry -> date() ?>)</p>
      </li>
      <?php endforeach ?>
    </ul>
  <ul class="flex writing">
    <h3>Essays</h3>
    <?php foreach(  $page-> essays() -> toStructure() as $essay ): ?> 
      <li>
        <p>“<a href="<?=$essay -> link() ?>"><?=$essay -> title()?></a>,” ⟶
        <?=$essay -> publisher() ?></p>
      </li>
    <?php endforeach ?>
  </ul>
</div>
<?php snippet('footer') ?>