<?php
$text = $text ?? 'Button';
$href = $href ?? '#';
?>
<a href="<?= $href ?>"
   class="inline-block bg-orange-500 px-4 py-2 text-sm text-white font-semibold">
   <?= $text ?>
</a>