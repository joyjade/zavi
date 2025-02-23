<h3><?= $header ?></h3>
  <?php foreach(  $section -> toStructure() as $item ): ?> 
    <li>
      <p>“<a href="<?=$item -> link() ?>"><?=$item -> title()?></a>,” ⟶
      <span class="publisher"><?=$item -> publisher() ?></span>
      (<?=$item -> date() ?>)</p>
    </li>
  <?php endforeach ?>
</ul>