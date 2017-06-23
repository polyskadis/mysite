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

    <div class="row full">
        <div class="medium-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(4), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
        <div class="medium-6 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(5), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
    </div>

    <div class="row full">
        <div class="medium-12 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(6), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">             
        </div>
        <div class="medium-12 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(7), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">  
        </div>          

        <div class="medium-12 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(8), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
    </div>

    <div class="row full">
        <div class="large-4 medium-12 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(9), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
        <div class="large-4 medium-12 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(10), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">     
        </div>       
        <div class="large-4 medium-12 small-12 columns">
            <img class="lazyLoading" src="../assets/images/loading.gif" data-src="<?php echo thumb($images->nth(11), array('width' => 1028, 'height' => 800))->url(); ?>" alt="<? echo $page->client() ?> <? echo $page->category() ?>">            
        </div>
    </div>


<section>
    <div class="row full">
        <div class="medium-4 large-3 small-12 small-centered columns">
            <a class="button primary light" target="_blank" href="<?php echo $page->link() ?>">Visit Website</a>
        </div>
    </div>
</section>

</article>

<?php snippet('project-navigation') ?>

<?php snippet ('footer') ?>
