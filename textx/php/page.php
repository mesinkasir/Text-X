<div class="row border-bottom border-dark">
<header class="col-md-12 p-3 border-bottom border-dark">
<div class="col-md-10 p-3 p-md-5">
<h1><strong><a href="<?php echo $page->permalink(); ?>" class="display-4"><?php echo $page->title(); ?></a></strong></h1>
<?php if (!$page->isStatic() && !$url->notFound()): ?><p class="lead mt-3"><?php echo $page->date(); ?> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?></p><?php endif ?>
</div>
</header>
<div class="col-md-8 p-3 p-md-5">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<img class="card-img-top mb-3 rounded-0" alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
<?php endif ?>
<h3 class="mt-3 mb-3"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->description(); ?></a></h3>
<?php echo $page->content(); ?>
</div>
<div class="col-md-4 p-3 p-md-5">
<?php include(THEME_DIR_PHP.'sidebar.php'); ?>
</div>
<?php Theme::plugins('pageEnd'); ?>
</div>