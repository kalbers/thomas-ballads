<?php 
queue_js_file('lightbox.min', 'javascripts/vendor');
queue_css_file('lightbox');
?>

<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>

<div id="item-title">
            <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>
</div>
<div id="primary">
    <?php if(!$item->hasTag('Ballad')): ?>
    <div id="item-images">
        <?php echo item_image('fullsize'); ?>
    </div>
    <?php endif; ?>


    <div class="main-metadata">
        <?php echo metadata('item', array('Dublin Core', 'Description'), array('index' => 1)); ?>
    </div>



    <!-- Items metadata -->
    <div id="item-metadata" class="panel">
        <h3>Additional Metadata</h3>

        <?php if (metadata('item', array('Dublin Core', 'Date'))): ?>
            <h4>Date</h4>
            <?php echo metadata('item', array('Dublin Core', 'Date'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <?php if (metadata('item', array('Dublin Core', 'Publisher'))): ?>
            <h4>Publisher</h4>
            <?php echo metadata('item', array('Dublin Core', 'Publisher'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <?php if (metadata('item', array('Dublin Core', 'Spatial Coverage'))): ?>
            <h4>Place of Publication</h4>
            <?php echo metadata('item', array('Dublin Core', 'Spatial Coverage'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <?php if (metadata('item', array('Dublin Core', 'Subject'))): ?>
            <h4>Subjects</h4>
            <?php echo metadata('item', array('Dublin Core', 'Subject'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <?php if (metadata('item', array('Dublin Core', 'Alternative Title'))): ?>
            <h4>First Line</h4>
            <?php echo metadata('item', array('Dublin Core', 'Alternative Title'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <?php if (metadata('item', array('Dublin Core', 'Identifier'))): ?>
            <h4>Identifiers</h4>
            <?php echo metadata('item', array('Dublin Core', 'Identifier'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <?php if (metadata('item', array('Item Type Metadata', 'Physical Dimensions'))): ?>
            <h4>Physical Dimensions</h4>
            <?php echo metadata('item', array('Item Type Metadata', 'Physical Dimensions'), array('delimiter' => '<br/>')); ?>
        <?php endif; ?>

        <!-- <h3>Additional Metadata</h3> -->
        <?php// echo all_element_texts('item'); ?>
    </div>




</div> <!-- End of Primary. -->

<div id="secondary">
    <?php if($item->hasTag('Ballad')): ?>
    <div id="item-images">
        <h4>Ballad</h4>
        <?php
            set_loop_records('files', get_current_record('item')->Files);
            foreach(loop('files') as $file): ?>

                <?php $GigiID = metadata('file', 'display title');
                $strGigiID = substr($GigiID, 0, 6);
                ?>
                <div class="item-file">
                    <a href="<?php echo file_display_url($file); ?>" data-lightbox="lightbox" data-title="<a target='_blank' href='http://gigi.mwa.org/netpub/server.np?quickfind=<?php echo $strGigiID; ?>&site=public&catalog=catalog&sorton=filename&template=detail.np&offset=0&TabletNPResults=/netpub/server.np%3Fquickfind%3D203762%26site%3Dpublic%26catalog%3Dcatalog%26sorton%3Dfilename%26template%3Dresults.np&TabletNPResultsCount=1&playMode=stop'>View Original&rarr;</a>"><?php echo file_image('thumbnail', array('class' => 'thumbnail'), $file); ?></a>
                </div>



        <a href="http://gigi.mwa.org/netpub/server.np?quickfind=<?php echo $strGigiID; ?>&site=public&catalog=catalog&sorton=filename&template=detail.np&offset=0&TabletNPResults=/netpub/server.np%3Fquickfind%3D203762%26site%3Dpublic%26catalog%3Dcatalog%26sorton%3Dfilename%26template%3Dresults.np&TabletNPResultsCount=1&playMode=stop" target="_blank">View Original</a>
   
                    <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    

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
