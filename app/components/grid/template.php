<nav class="<?= $this->class_name('grid') ?>">
  <ul class="<?= $this->class_name('items') ?>">
    <? foreach($items as $link => $url) { ?>
      <?= $this->component(ItemComponent, ["link" => $link, "url" => $url]); ?>
    <? } ?>
  </ul>
</nav>
