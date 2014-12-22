<?php
$title = __('Browse Items by Subject');
echo head(array(
    'title' => $title,
    'bodyclass' => 'subject-browse browse list',
)); ?>
<div id="primary" class="subject-browse">
    <h1>Subjects</h1>
    <?php
    if (count($subjects)) :
        echo $this->subjectBrowseList($subjects);
    else:
        echo '<p>' . __('There is no subjects.') . '</p>';
    endif;
    ?>
</div>
<?php echo foot(); ?>