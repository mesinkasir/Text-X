<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
<?php Theme::plugins('siteBodyBegin'); ?>
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<div class="container-fluid">
<?php
if ($WHERE_AM_I == 'page') {
include(THEME_DIR_PHP.'page.php');
} else {
include(THEME_DIR_PHP.'home.php');
}
?>
</div>
<?php include(THEME_DIR_PHP.'footer.php'); ?>
<?php 
echo Theme::jquery();
echo Theme::jsBootstrap();
?>
<?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>