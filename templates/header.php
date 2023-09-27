<?php

?>

<header>
    <div class="container">
        <div class="mainMenu">
            <div class="mainMenu_body">
                <a href="#" class="mainMenu_logo">
                    <img src="<?= get_stylesheet_directory_uri(). '/assets/img/logo.png' ?>" alt="logo">
                </a>
                <nav>
                    <ul id="menuItems" class="mainMenu_items">
                        <li class="mainMenu_item mainMenu_parent" data-drop="0">
                            <a href="#">I need</a>
                        </li>
                        <li class="mainMenu_item mainMenu_parent" data-drop="1">
                            <a href="#">Expertise</a>
                        </li>
                        <li class="mainMenu_item ">
                            <a href="#">Resources</a>
                        </li>
                        <li class="mainMenu_item mainMenu_parent" data-drop="3">
                            <a href="#">Company</a>
                        </li>
                    </ul>
                </nav>
                <div class="mainMenu_actions">
                    <a href="#" class="button button-secondary" role="button">Become A Client</a>
                </div>
            </div>
            <div id="menuDropdown" class="mainMenu_dropdown d-none">
                <hr>
                <div class="mainMenu_dropdownItem" data-drop="0">
                    <div class="mainMenu_dropdownMain">
                        <div>
                            <span class="mainMenu_dropdownTitle">By workflow</span>
                            <div class="menuSubitems">
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="mainMenu_dropdownTitle">By team</span>
                            <div class="menuSubitems">
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                <div class="mainMenu_dropdownItem" data-drop="1">
                    <div class="mainMenu_dropdownMain">
                        <div>
                            <span class="mainMenu_dropdownTitle">By workflow</span>
                            <div class="menuSubitems">
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuSubitem">
                                    <div class="menuSubitem_img">
                                        <?= wp_get_attachment_image(16, 'thumb', false, ['alt'=> 'icon']); ?>
                                    </div>
                                    <div class="menuSubitem_body">
                                        <span class="menuSubitem_title">Uncover market and competitor insights</span>
                                        <div class="menuSubitem_content">
                                            <p>Uncover and outpace your competitors in organic marketing. </p>
                                        </div>
                                        <div class="menuSubitem_category">
                                            <span>Top services:</span>
                                            <a href="#">Enterprise SEO</a>
                                            <a href="#">Local SEO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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


                <div class="d-none" data-drop="3">
                    <h3>Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis exercitationem fugiat illo iste iusto, nemo perspiciatis praesentium! Ad asperiores assumenda at autem culpa cum debitis delectus dolor eaque enim facere fugiat hic, ipsam, iure maxime nam nemo nesciunt omnis perferendis quasi repudiandae rerum sapiente suscipit, tempora temporibus ullam ut!</p>
                </div>
            </div>

        </div>
    </div>
</header>
