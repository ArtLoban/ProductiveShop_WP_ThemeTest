<?php
//___debug_print($args);
$title  = (isset($args['title']) && !empty($args['title'])) ? $args['title'] : false;
$items  = (isset($args['items']) && is_array($args['items'])) ? $args['items'] : false;
?>
<div class="socials">
    <?php if ($title) { ?>
        <span class="socials_title"><?= esc_html($title) ?></span>
    <?php } ?>

    <?php if ($items) { ?>
        <div class="socials_items">
            <?php foreach ($items as $name => $item) {
                if (!is_array($item) || !count($item)) {
                    continue;
                }
                $hook_name = "ps_include_svg_$name";

                $url = isset($item['url']) ? $item['url'] : '#';
                $title = isset($item['title']) ? $item['title'] : '';
                $link_target = isset($item['target']) ? $item['target'] : '_self';
            ?>
                <a href="<?= esc_url($url) ?>" target="<?= esc_attr($link_target) ?>">
                    <span class="socials_icon">
                        <?php do_action($hook_name) ?>
                    </span>
                    <?= esc_html($title) ?>
                </a>
            <?php } ?>
        </div>
    <?php } ?>
</div>
