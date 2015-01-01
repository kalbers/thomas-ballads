<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

    

    <!-- Featured Item -->
        <div id="featured-item">
            <h3>Featured Ballad</h3>
            <?php echo random_featured_items(1); ?>
        </div><!--end featured-item-->


    <div id="about" class="panel">
        <img class="left" src="<?php echo img('tree.png'); ?>" alt="tree woodcut"> 
        <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
            <?php echo $homepageText; ?>
        <?php endif; ?>
    </div>



<?php echo foot(); ?>
