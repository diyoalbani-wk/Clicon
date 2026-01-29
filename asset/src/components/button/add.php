<?php
$text  = $text  ?? 'Button';
$href  = $href  ?? '#';
$bg    = $bg    ?? 'bg-orange-500';
$hover = $hover ?? ''; 
?>

<a href="<?= $href ?>"
   class="<?= $bg ?> <?= $hover ?> font-bold flex items-center justify-center text-white px-6 py-2 w-[85%] rounded transition duration-200">
   <?= $text ?>
</a>
