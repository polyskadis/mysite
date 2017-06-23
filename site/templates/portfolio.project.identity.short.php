<?php snippet('header') ?>

<?php snippet('project-header') ?>

<?php $images = $page->images() ?>
<article>
    <div class="row full">
        <div class="medium-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(0), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
        <div class="medium-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(1), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
    </div>
    <div class="row full">
        <div class="medium-6 medium-push-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(2), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
        <div class="medium-6 medium-pull-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(3), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
    </div>
    <?php if($images->count() > 5): ?>
    <div class="row full">
        <div class="small-12 columns">
            <figure>
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(4), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
            </figure>
        </div>
    </div>
    <?php endif ?>
</article>

<?php snippet('project-navigation') ?>

<?php snippet ('footer') ?>
