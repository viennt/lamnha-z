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
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="<?php echo $pluralVar; ?> box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h3>
	</div>
<?php echo "\t<?php echo \$this->Form->create('{$modelClass}', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>\n"; ?>
<?php
		echo "\t\t<div class=\"box-body\"><?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field === $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\t\techo \$this->Form->input('{$field}', array('class'=>'form-control'));\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\t\techo \$this->Form->input('{$assocName}', array('class'=>'form-control'));\n";
			}
		}
		echo "\t\t?></div>\n";
?>
<?php
	echo "\t<?php \$options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));\n";
	echo "\techo \$this->Form->end(\$options); ?>\n";
?>
</div>

<script type="text/javascript">
$(document).ready(function () {
	<?php echo "var actions = '<li class=\\\"header\\\">';\n"; ?>
	<?php echo "actions += '<?php echo __(\"ACTIONS\"); ?>';\n"; ?>

<?php if (strpos($action, 'add') === false): ?>
	<?php echo "actions += '<li>';\n"; ?>
	<?php echo "actions += '<?php echo \$this->Form->postLink(\"<i class=\\\"fa fa-circle-o text-red\\\"></i> <span>Delete</span>\", array(\"action\" => \"delete\", \$this->Form->value(\"{$modelClass}.{$primaryKey}\")), array(\"escape\" => false), __(\"Are you sure you want to delete # %s?\", \$this->Form->value(\"{$modelClass}.{$primaryKey}\"))); ?>';\n"; ?>
	<?php echo "actions += '</li>';\n"; ?>

<?php endif; ?>
	<?php echo "actions += '<li>';\n"; ?>
	<?php echo "actions += '<?php echo \$this->Html->link(\"<i class=\\\"fa fa-circle-o text-aqua\\\"></i> <span>List " . $pluralHumanName . "</span>\", array(\"action\" => \"index\"), array(\"escape\" => false)); ?>';\n"; ?>
	<?php echo "actions += '</li>';\n"; ?>

<?php
	$done = array();
	foreach ($associations as $type => $data) {
		foreach ($data as $alias => $details) {
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
				echo "\tactions += '<li>';\n";
				echo "\tactions += '<?php echo \$this->Html->link(\"<i class=\\\"fa fa-circle-o text-aqua\\\"></i> <span>List " . Inflector::humanize($details['controller']) . "</span>\", array(\"controller\" => \"{$details['controller']}\", \"action\" => \"index\"), array(\"escape\" => false)); ?>';\n";
				echo "\tactions += '</li>';\n";

				echo "\tactions += '<li>';\n";
				echo "\tactions += '<?php echo \$this->Html->link(\"<i class=\\\"fa fa-circle-o text-aqua\\\"></i> <span>New " . Inflector::humanize(Inflector::underscore($alias)) . "</span>\", array(\"controller\" => \"{$details['controller']}\", \"action\" => \"add\"), array(\"escape\" => false)); ?>';\n";
				echo "\tactions += '</li>';\n";
				$done[] = $details['controller'];
			}
		}
	}
?>
	$("li#action")
		.after(actions);

});
</script>