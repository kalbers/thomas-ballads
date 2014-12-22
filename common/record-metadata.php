<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
<div class="element-set">
    <?php foreach ($setElements as $elementName => $elementInfo): ?>
        <?php if ($elementName !== 'Description' && $elementName !== 'Title'): ?>
            <div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
                <h4><?php echo html_escape(__($elementName)); ?></h4>
                <?php foreach ($elementInfo['texts'] as $text): ?>
                    <div class="element-text"><?php echo $text; ?></div>           
                <?php endforeach; ?>
            </div><!-- end element -->
        <?php endif; ?> 
    <?php endforeach; ?>
</div><!-- end element-set -->
<?php endforeach;
