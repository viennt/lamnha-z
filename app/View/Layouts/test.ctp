<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="viennt">
    <meta name="description" content="Website lease products">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $this->fetch('title'); ?></title>

    <?php echo $this->Html->meta('icon');?>

    <!-- jQuery 2.1.4 -->
    <?php echo $this->Html->script('jquery-2.1.4.min'); ?>

    <?php echo $this->Html->css("vertical-menu"); ?>
    <?php echo $this->Html->script('vertical-menu-hover'); ?>
    <?php echo $this->Html->script('vertical-menu'); ?>

    <?php echo $this->fetch('css');?>
</head>
<body>
    
        
<script type="text/javascript">
	jQuery(document).ready(function($) {
    $('#mega-1').dcVerticalMegaMenu();
});
</script>
</body>
</html>