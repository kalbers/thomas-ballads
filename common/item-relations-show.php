<h4>Related Items</h4>

<?php foreach ($subjectRelations as $subjectRelation): ?>
        <div class="related-items">
<!--             <h5><a href="<?php echo url('items/show/' . $subjectRelation['object_item_id']); ?>"><?php echo $subjectRelation['object_item_title']; ?></a></h5>
 -->            <?php $relatedItem = get_record_by_id('Item', $subjectRelation['object_item_id']); ?>
            <a href="<?php echo url('items/show/' . $subjectRelation['object_item_id']); ?>"><?php echo item_image('square_thumbnail', array('alt' => $subjectRelation['object_item_title']), 0, $relatedItem); ?></a>
        </div>
        <?php endforeach; ?>


        <?php foreach ($objectRelations as $objectRelation): ?>
        <div class="related-items">
<!--             <h5><a href="<?php echo url('items/show/' . $objectRelation['subject_item_id']); ?>"><?php echo $objectRelation['subject_item_title']; ?></a></h5>
 -->            <?php $relatedItem = get_record_by_id('Item', $objectRelation['subject_item_id']); ?>
            <a href="<?php echo url('items/show/' . $objectRelation['subject_item_id']); ?>"><?php echo item_image('square_thumbnail', array('alt' => $objectRelation['subject_item_title']), 0, $relatedItem); ?></a>
        </div>
        <?php endforeach; ?>