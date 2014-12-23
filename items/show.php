<?php 
queue_js_file('lightbox.min', 'javascripts/vendor');
queue_css_file('lightbox');
?>

<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>

<div id="item-title">
            <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>
</div>
<div id="primary">



    <div class="main-metadata">
        <?php echo metadata('item', array('Dublin Core', 'Description'), array('index' => 1)); ?>
    </div>
    

    <!-- Items metadata -->
    <div id="item-metadata" class="panel">
        <h3>Additional Metadata</h3>
        <?php echo all_element_texts('item'); ?>
    </div>




</div> <!-- End of Primary. -->

<div id="secondary">
    
    <div id="item-images">
        <h4>Ballad</h4>
        <?php echo files_for_item(array('linkToFile' => 'fullsize','linkAttributes' => array('data-lightbox'=>'lightbox',),'imageSize' => 'thumbnail')); ?>
        <a href="#" target="_blank">View Original</a>
    </div>
    
    

    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
</div>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item','citation',array('no_escape'=>true)); ?></div>
    </div>
       


    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

 <?php echo foot(); ?>
