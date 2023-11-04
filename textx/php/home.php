<header class="row p-3 border-bottom border-dark">
<div class="col-md-10 p-3 p-md-5">
<h1><strong><a href="<?php echo $site->url(); ?>" class="display-4"><?php echo $site->title(); ?></a></strong></h1>
<h2 class="lead mt-3"><?php echo $site->description(); ?></h2>
</div>
</header>
<div class="row p-3 border-bottom border-dark">
<div class="col-md-12 p-3 p-md-5">
<div class="row">
<?php Theme::plugins('pageBegin'); ?>
<?php if (empty($content)) : ?><div class="mt-4"><?php $language->p('No pages found') ?></div><?php endif ?>
<?php foreach ($content as $page) : ?>
<div class="col-md-6 p-3 mb-5">
<h3><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h3>
<p class="mt-3 mb-3">
<i class="bi bi-calendar"></i> &nbsp;<?php echo $page->date(); ?>
<i class="ml-3 bi bi-clock-history"></i> &nbsp;<?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>
</p>
<?php echo $page->description(); ?>
<?php Theme::plugins('pageEnd'); ?>
</div>
<?php endforeach ?>
</div>
</div>
</div>

<?php if (Paginator::numberOfPages() > 1) : ?>
<div class="row p-3 text-center justify-content-center border-bottom border-dark">
<div class="col-4 col-md-4 p-1">
<?php if (Paginator::showPrev()) : ?>
<a href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">← <?php echo $L->get('Previous'); ?></a>
<?php endif; ?>
</div>
<div class="col-4 col-md-4 p-1"><a href="<?php echo Theme::siteUrl() ?>">Home</a></div>
<div class="col-4 col-md-4 p-1">
<?php if (Paginator::showNext()) : ?>
<a href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> →</a>
<?php endif; ?>
</div>
<?php endif ?>