<?php if (! empty($messages)) : ?>
	<?php foreach ($messages as $message) : ?>
		<?= esc($message) ?>
	<?php endforeach ?>
<?php endif ?>
