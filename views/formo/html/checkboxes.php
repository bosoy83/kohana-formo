<?php $class = ($field->error()) ? ' class="error"' : NULL; ?>
<p<?php echo $class; ?>>
	<label><?php echo ucfirst($field->label()); ?>:</label>
	<span class="error-message"><?php echo ucfirst($field->error()); ?></span>
	<?php foreach ($field->fields() as $checkbox): ?>
		<span>
			<?php echo $checkbox->render('html'); ?>
		</span>
	<?php endforeach; ?>
</p>