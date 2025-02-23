<?php snippet('nav') ?>
<div class="content">
  <ul class="flex writing">
    <?php snippet('link_item', ['header' => 'poetry', 'section' => $page-> poetry()]) ?>
  </ul>
  <ul class="flex writing">
    <?php snippet('link_item', ['header' => 'essays', 'section' => $page-> essays()]) ?>
  </ul>
</div>
<?php snippet('footer') ?>