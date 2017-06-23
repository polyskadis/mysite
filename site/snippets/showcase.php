<?php
$projects = page('portfolio')->children()->visible()->flip();

if(isset($limit)) $projects = $projects->limit($limit);
if(isset($offset)) $projects = $projects->offset($offset);

?>

  <div class="row column">
    <h3>Selected Work</h3>
  <div class="row small-up-3">
    <?php foreach($projects as $project): ?>
      <div class="column">
          <a href="<?= $project->url() ?>" class="showcase-link">
            <?php $image = $project->files()->findBy('name', 'portfolio_tile') ?>
            <?php if($image): ?>
              <img src="<?= $image->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase" />
            <?php endif ?>
          </a>
      </div>
    <?php endforeach ?>
  </div>
