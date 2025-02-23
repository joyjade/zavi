<h3><?= $header ?></h3>
  <?php foreach(  $section -> toStructure() as $item ): ?> 
    <li>
      <a href="<?=$item -> link() ?>" target="_blank">
        <p>“<span class="link_title"><?=$item -> title()?></span>,” ⟶
        <span class="publisher"><?=$item -> publisher() ?></span>
        (<?=$item -> date() ?>)</p>
      </a>
    </li>
  <?php endforeach ?>
</ul>