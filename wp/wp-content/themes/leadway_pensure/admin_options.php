<?php
// display the admin options page
function theme_options_page()
{ ?>
    <div class="wrap">

        <div id="icon-themes" class="icon32"></div>
        <h2>Leadway Pensure Custom Settings</h2>
        <?php settings_errors(); ?>

        <?php
        $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'main_options';
        ?>

        <h2 class="nav-tab-wrapper">
            <a href="?page=leadway_pensure_theme&tab=main_options"
               class="nav-tab <?php echo $active_tab == 'main_options' ? 'nav-tab-active' : ''; ?>">Main Options</a>
            <a href="?page=leadway_pensure_theme&tab=social_options"
               class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>">Social Options</a>
        </h2>

        <form action="options.php" method="post">

            <?php

            if ($active_tab == 'main_options') {
                settings_fields('theme_options');
                do_settings_sections('theme');
            } else {
                settings_fields('theme_social_options');
                do_settings_sections('theme_socials');
            }
            ?>

            <input class="button button-primary" name="Submit" type="submit"
                   value="<?php esc_attr_e('Save Changes'); ?>"/>
        </form>
    </div>

<?php } ?>