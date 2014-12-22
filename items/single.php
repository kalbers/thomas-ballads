<div class="item record">
    <?php
    $title = metadata($item, array('Dublin Core', 'Title'));
    $description = metadata($item, array('Dublin Core', 'Description'), array('snippet' => 300));
    ?>
    <div class="item-image">
    <?php if (metadata($item, 'has files')) {
        echo link_to_item(
            item_image('fullsize', array(), 0, $item), 
            array('class' => 'image'), 'show', $item
        );
    }
    ?>
    </div>

    <div id="featured-metadata">
        <h4><?php echo link_to($item, 'show', strip_formatting($title)); ?></h4>
        <?php if ($description): ?>
            <p class="item-description">
            <?php echo $description; ?>
            <?php echo link_to_item(
            "Read More&rarr;",
             array('class' => 'more-link'),
             'show',
             $item);
              ?>
            </p>
        <?php endif; ?>
    </div>

</div>
