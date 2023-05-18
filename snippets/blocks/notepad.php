<?php
/**
 * @var \Kirby\Cms\Block $block
 */

$text = $block->text();
?>

<div class="notepad-outer">
    <div class="notepad-inner">
        <?= $text->kt() ?>
    </div>
</div>
