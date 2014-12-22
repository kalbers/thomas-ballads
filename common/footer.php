</div><!-- end content -->

<footer>
<div id="footer-container">
    
    <div id="footer-content" class="center-div">
        
        <div id="footer-logo">
            <a href="http://www.americanantiquarian.org/"><img src="<?php echo img('AAS-original-seal.png'); ?>" alt="AAS Logo"></a> 
        </div>
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>

        <div id="footer-nav">
            <ul>
                <li><a href="#">Footer Link</a></li>
                <li><a href="#">Footer Link</a></li>
                <li><a href="#">Footer Link</a></li>
                <li><a href="#">Footer Link</a></li>
                <li><a href="#">Footer Link</a></li>
            </ul>
        </div>
        
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
</div><!-- end footer-container -->
</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

</body>

</html>
