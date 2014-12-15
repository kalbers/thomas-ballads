<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

    

    <?php if (get_theme_option('Display Featured Item') == 1): ?>
    <!-- Featured Item -->
        <div id="featured-item">
            <h3>Featured Ballad</h3>
            <?php echo random_featured_items(1); ?>
        </div><!--end featured-item-->
    <?php endif; ?>

    <div id="about" class="panel">
        <h3>About</h3>
        <img class="left" src="<?php echo img('tree.png'); ?>" alt="tree woodcut"> 
        <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
            <p><?php echo $homepageText; ?></p>
        <?php endif; ?>
    </div>

    <div id="featured-essays">
        <h3>Featured Essays</h3>
        
    </div>



<?php echo foot(); ?>
