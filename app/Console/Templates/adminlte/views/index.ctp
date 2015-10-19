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
		<h3 class="box-title"><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h3></br></br>
		<?php echo "<?php echo \$this->Html->link(__(' Add '),\n";
					echo "\t\t\tarray('controller' => '$pluralVar', 'action' => 'add'),\n";
					echo "\t\t\tarray('class'=>'btn btn-primary btn-flat btn-xs col-lg-12')\n";
					echo "\t\t\t); ?>\n"; ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
		<?php foreach ($fields as $field): ?>
			<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
		<?php endforeach; ?>
			<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
		</tr>
		</thead>
		<tbody>
		<?php
		echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
		echo "\t<tr>\n";
			foreach ($fields as $field) {
				$isKey = false;
				if (!empty($associations['belongsTo'])) {
					foreach ($associations['belongsTo'] as $alias => $details) {
						if ($field === $details['foreignKey']) {
							$isKey = true;
							echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
							break;
						}
					}
				}
				if ($isKey !== true) {
					echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
				}
			}

			echo "\t\t<td class=\"actions\">\n";
			echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn tn-block btn-xs btn-info btn-flat')); ?>\n";
			echo "\t\t\t<?php echo \$this->Html->link(__('Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn tn-block btn-xs btn-success btn-flat')); ?>\n";
			echo "\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn tn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}']))); ?>\n";
			echo "\t\t</td>\n";
		echo "\t</tr>\n";

		echo "<?php endforeach; ?>\n";
		?>
		</tbody>
		</table>
	</div>
	<div class="box-footer clearfix">
		<p>
		<?php echo "<?php
		echo \$this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>"; ?>
		</p>
		<?php
			echo "<?php\n";
			echo "\t\techo \$this->Paginator->prev('« ', array(), null, array('class' => 'prev disabled'));\n";
			echo "\t\techo \$this->Paginator->numbers(array('separator' => ' '));\n";
			echo "\t\techo \$this->Paginator->next(' »', array(), null, array('class' => 'next disabled'));\n";
			echo "\t?>\n";
		?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
	<?php echo "var actions = '<li class=\\\"header\\\">';\n"; ?>
	<?php echo "actions += '<?php echo __(\"ACTIONS\"); ?>';\n"; ?>
	<?php echo "actions += '<li>';\n"; ?>
	<?php echo "actions += '<?php echo \$this->Html->link(\"<i class=\\\"fa fa-circle-o text-aqua\\\"></i> <span>New " . $singularHumanName . "</span>\", array(\"action\" => \"add\"), array(\"escape\" => false)); ?>';\n"; ?>
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