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
                    <a class="button button-secondary" role="button">Become A Client</a>
                    <a class="button" role="button">Read the story</a>
                </div>
            </div>
            <div id="menuDropdown" class="mainMenu_dropdown d-none">
                <hr>
                <div data-drop="0">
                    <h3>I need</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis exercitationem fugiat illo iste iusto, nemo perspiciatis praesentium! Ad asperiores assumenda at autem culpa cum debitis delectus dolor eaque enim facere fugiat hic, ipsam, iure maxime nam nemo nesciunt omnis perferendis quasi repudiandae rerum sapiente suscipit, tempora temporibus ullam ut!</p>
                </div>
                <div class="d-none" data-drop="1">
                    <h3>Expertise</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis exercitationem fugiat illo iste iusto, nemo perspiciatis praesentium! Ad asperiores assumenda at autem culpa cum debitis delectus dolor eaque enim facere fugiat hic, ipsam, iure maxime nam nemo nesciunt omnis perferendis quasi repudiandae rerum sapiente suscipit, tempora temporibus ullam ut!</p>
                </div>
                <div class="d-none" data-drop="3">
                    <h3>Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis exercitationem fugiat illo iste iusto, nemo perspiciatis praesentium! Ad asperiores assumenda at autem culpa cum debitis delectus dolor eaque enim facere fugiat hic, ipsam, iure maxime nam nemo nesciunt omnis perferendis quasi repudiandae rerum sapiente suscipit, tempora temporibus ullam ut!</p>
                </div>
            </div>

        </div>
    </div>
</header>
