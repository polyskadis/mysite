<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

	<?= css(array(
		'assets/css/foundation.min.css',
		'assets/css/font-awesome.min.css',
		'assets/css/fonts.css',
		'assets/css/styles.css'
	)) ?>

</head>
<body>

<header>
	<div class="row">
		<div class="small-6 medium-2 large-3 columns">
			<a class="headerLogo" href="<?= $site->url() ?>"><img src="<?= url('assets/images/logo_horizontal_purple.png') ?>"/></a>
		</div>
		<div class="small-6 medium-10 large-8 columns">
			<nav>
			  <ul>
			  	<?php $items = $pages->visible(); ?>
			    <?php foreach($items as $item): ?>
			    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
			    <?php endforeach ?>
			  </ul>
			</nav>
		</div>
	</div>
</header>
