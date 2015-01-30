<div class="solvencias view">
<h2><?php echo __('Solvencia'); ?></h2>
	<dl>
		<dt><?php echo __('id'); ?></dt>
		<dd>
			<?php echo h($solvencia['Solvencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instituciones'); ?></dt>
		<dd>
			<?php echo h($solvencia['Instituciones']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($solvencia['Solvencia']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($solvencia['Solvencia']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($solvencia['Solvencia']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>


