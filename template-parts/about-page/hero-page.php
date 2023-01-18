<div class="header page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description'); ?></h3>
                <a href="/alpha" class="site-title">
                    <h1 class="align-self-center display-1 text-center heading"><?php bloginfo('name'); ?></h1>
                </a>
            </div>
            <div class="col-md-12">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'topmenu',
                        'menu_id' => 'topmenu-container',
                        'menu_class' => 'top-nav-menu list-inline text-center',
                    )
                )

                ?>
            </div>
        </div>
    </div>
</div>