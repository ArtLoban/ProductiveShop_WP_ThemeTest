<?php
//___debug_print($args);

$title      = (isset($args['title']) && !empty($args['title'])) ? $args['title'] : false;
$content    = (isset($args['content']) && !empty($args['content'])) ? $args['content'] : false;
$button     = (isset($args['action_button']) && is_array($args['action_button'])) ? $args['action_button'] : false;
$link_target = $button['target'] ? $button['target'] : '_self';
?>
<div class="caseStudy">
    <?php if ($title) { ?>
        <span class="caseStudy_title"><?= esc_html($title) ?></span>
    <?php } ?>

    <?php if ($content) { ?>
        <div class="caseStudy_content"><?= $content ?></div>
    <?php } ?>

    <?php if ($button) { ?>
        <div class="caseStudy_action">
            <a href="<?= esc_url($button['url']) ?>" class="button" role="button" target="<?= esc_attr($link_target) ?>">
                <?= esc_html($button['title']) ?>
            </a>
        </div>
    <?php } ?>
</div>
