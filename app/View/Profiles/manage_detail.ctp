Profile
<div class="profiles view">
<h2><?php echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avatar Url'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['avatar_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Name'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal Number'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['personal_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['published']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
