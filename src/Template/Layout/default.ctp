<!DOCTYPE html>
<!--
App: 21kanban - System dystrybucji drobnych komponentów produkcyjnych typu „C”
Version: 1.1.1
Author: Sylwester Kowal
Website: http://21w.pl/
Contact: sylwester.kowal@21w.pl
Follow: https://twitter.com/sylwester_kowal
LinkedIn: https://pl.linkedin.com/in/sylwesterkowal
Like: https://www.facebook.com/sylwester.kowal
Purchase: http://21kanban.pl
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $this->fetch('title');?></title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="21kanban - System dystrybucji drobnych komponentów produkcyjnych typu" name="description" />
	<meta content="Sylwester Kowal" name="author" />
	<?php echo $this->fetch('meta'); ?>
	<?php echo $this->Html->meta('icon'); ?>

</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-footer-fixed page-sidebar-fixed page-sidebar-closed">


	<?= $this->Flash->render() ?>
	<?php echo $this->fetch('content'); ?>


</body>
</html>