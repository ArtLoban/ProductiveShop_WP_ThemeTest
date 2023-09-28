<?php

$fields	= get_fields('option');

//___debug_print($fields);

$site_logo_id = (isset($fields['header_site_logo']) && !empty($fields['header_site_logo'])) ? $fields['header_site_logo'] : false;
$action_button = (isset($fields['header_action_button']) && is_array($fields['header_action_button'])) ? $fields['header_action_button'] : false;
$menu_items = (isset($fields['header_menu_items']) && is_array($fields['header_menu_items'])) ? $fields['header_menu_items'] : false;

//___debug_print($menu_items);
?>

<header>
    <div class="container">
        <div class="mainMenu">
            <div class="mainMenu_body">
                <?php if ($site_logo_id) { ?>
                    <a href="<?php site_url() ?>" class="mainMenu_logo">
                        <img src="<?= wp_get_attachment_image_url($site_logo_id, 'full')?>"  width="225" height="36" alt="logo">
                    </a>
                <?php } ?>

                <?php if (is_array($menu_items) && count($menu_items)) { ?>
                    <nav>
                        <ul id="menuItems" class="mainMenu_items">
                            <?php foreach ($menu_items as $key => $item) {
                                $menu_item = is_array($item['menu_item']) ? $item['menu_item'] : false;
                                $is_parent_class = $item['has_submenu'] ? 'mainMenu_parent' : '';
                                $data_attr = $item['has_submenu'] ? sprintf('data-drop="%s"', esc_attr($key)) : '';
                                $link_target = $menu_item['target'] ? $menu_item['target'] : '_self';
                            ?>
                                <?php if ($menu_item) { ?>
                                    <li class="mainMenu_item <?= esc_attr($is_parent_class) ?>" <?= $data_attr ?>>
                                        <a href="<?= esc_url($menu_item['url']) ?>" target="<?= esc_attr($link_target) ?>">
                                            <?= esc_html($menu_item['title']) ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </nav>
                <?php } ?>

                <?php if ($action_button) {
                    $link_target = $action_button['target'] ? $action_button['target'] : '_self';
                ?>
                    <div class="mainMenu_actions">
                        <a href="<?= esc_url($action_button['url']) ?>" class="button button-secondary" role="button" target="<?= esc_attr($link_target) ?>">
                            <?= esc_html($action_button['title']) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>

            <?php if (is_array($menu_items) && count($menu_items)) { ?>
                <div id="menuDropdown" class="mainMenu_dropdown d-none">
                    <hr>

                    <?php foreach ($menu_items as $key => $item) {
                        $menu_item = is_array($item['menu_item']) ? $item['menu_item'] : false;
                        $is_parent_class = $item['has_submenu'] ? 'mainMenu_parent' : '';
                        $data_attr = $item['has_submenu'] ? sprintf('data-drop="%s"', esc_attr($key)) : '';

                        $show_column_1 = (boolean) $item['show_column_1'];
                        $show_column_2 = (boolean) $item['show_column_2'];
//                        ___debug_print($item)
                    ?>
                        <div class="mainMenu_dropdownItem" <?= $data_attr ?>>
                            <div class="mainMenu_dropdownMain">
                                <?php if ($show_column_1) { ?>
                                    <div>
                                        <span class="mainMenu_dropdownTitle"><?= esc_html($item['column_1_title']) ?></span>

                                        <?php if (is_array($item['column_1_items']) && count($item['column_1_items'])) { ?>
                                            <div class="menuSubitems">
                                                <?php foreach($item['column_1_items'] as $column_item) {
//                                                    ___debug_print($column_item)
                                                ?>
                                                    <div class="menuSubitem">
                                                        <div class="menuSubitem_img">
                                                            <img src="<?= esc_attr($column_item['icon']) ?>"  width="32" height="32" alt="icon">
                                                        </div>
                                                        <div class="menuSubitem_body">
                                                            <span class="menuSubitem_title"><?= esc_html($column_item['title']) ?></span>
                                                            <div class="menuSubitem_content"><?= $column_item['content'] ?></div>
                                                            <?php if (is_array($column_item['categories']) && count($column_item['categories'])) { ?>
                                                                <div class="menuSubitem_category">
                                                                    <span><?= __('Top services:', 'productiveshop') ?></span>
                                                                    <?php foreach ($column_item['categories'] as $cat_item) {
                                                                        $category = (is_array($cat_item['category']) && count($cat_item['category'])) ? $cat_item['category'] : [];
                                                                        $link_target = $category['target'] ? $category['target'] : '_self';
                                                                    ?>
                                                                        <a href="<?= esc_attr($category['url'])?>" target="<?= esc_attr($link_target) ?>">
                                                                            <?= esc_html($category['title'])?>
                                                                        </a>
                                                                    <?php } ?>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                                <?php if ($show_column_2) { ?>
                                    <div>
                                        <span class="mainMenu_dropdownTitle"><?= esc_html($item['column_2_title']) ?></span>

                                        <?php if (is_array($item['column_2_items']) && count($item['column_2_items'])) { ?>
                                            <div class="menuSubitems">
                                                <?php foreach($item['column_2_items'] as $column_item) {
//                                                    ___debug_print($column_item)
                                                    ?>
                                                    <div class="menuSubitem">
                                                        <div class="menuSubitem_img">
                                                            <img src="<?= esc_attr($column_item['icon']) ?>"  width="32" height="32" alt="icon">
                                                        </div>
                                                        <div class="menuSubitem_body">
                                                            <span class="menuSubitem_title"><?= esc_html($column_item['title']) ?></span>
                                                            <div class="menuSubitem_content"><?= $column_item['content'] ?></div>
                                                            <?php if (is_array($column_item['categories']) && count($column_item['categories'])) { ?>
                                                                <div class="menuSubitem_category">
                                                                    <span><?= __('Top services:', 'productiveshop') ?></span>
                                                                    <?php foreach ($column_item['categories'] as $cat_item) {
                                                                        $category = (is_array($cat_item['category']) && count($cat_item['category'])) ? $cat_item['category'] : [];
                                                                        $link_target = $category['target'] ? $category['target'] : '_self';
                                                                        ?>
                                                                        <a href="<?= esc_attr($category['url'])?>" target="<?= esc_attr($link_target) ?>">
                                                                            <?= esc_html($category['title'])?>
                                                                        </a>
                                                                    <?php } ?>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="mainMenu_dropdownSide">
                                <div>
                                    <span class="mainMenu_dropdownTitle">Case study</span>
                                    <div class="menuSubitem">
                                        <div class="menuSubitem_body">
                                            <span class="menuSubitem_title">Another Happy Client. Shocking.</span>
                                            <div class="menuSubitem_content">
                                                <p>Average CTR rate went up <strong>by 2.3%</strong></p>
                                                <p>New users traffic increased <strong>by 15.26%</strong></p>
                                                <p>Average session duration 53.63%</p>
                                            </div>
                                            <a href="#" class="button" role="button">Read the story</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</header>
