<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?= $head_description ?>">
<meta name="author" content="Winston Sahusilawane">
<link rel="icon" href="<?= site_url('assets/favicon.ico'); ?>">
<title><?= $head_title ?></title>
<!-- Custom fonts for this template-->
<link href="<?= site_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
<?php if (! empty($head_css)) {
	foreach($head_css as $css) {
		echo '<link rel="stylesheet" type="text/css" href="' . site_url($css) . '">' . "\n";
	}
} ?>
</head>
