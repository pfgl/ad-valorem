<div id="sidebar-news" class="sidebar" role="complementary">

    <?php if ( is_active_sidebar( 'sidebar-news' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar-news' ); ?>

    <?php else : ?>

        <div class="no-widgets">
            <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
        </div>

    <?php endif; ?>

</div>
