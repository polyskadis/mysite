<?php snippet('header') ?>

<?php snippet('project-header') ?>

<?php $images = $page->images() ?>
<article>
    <div class="row full">
        <?php foreach($images as $image): ?>

        <div class="medium-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src=" <?php
            if($image->name() != 'portfolio_tile') {
              echo thumb($image, array('width' => 1028, 'height' => 800))->url();
            } ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">
        </div>

        <?php endforeach ?>
    </div>
</article>

<?php snippet('project-navigation') ?>

<?php snippet ('footer') ?>
