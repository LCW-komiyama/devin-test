    </body>
    <?php include( get_template_directory().'/lib/layout/footer.php' ); ?>

    <?php if (is_404()) : ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.js" id="theme-vendor-js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js" id="theme-scripts-js"></script>
    <?php endif; ?>

  <?php wp_footer(); ?>
</html>