<?php

    $block_css_classes = [
        'section-b'
    ];

    echo $is_preview ? '<div class="gt-block-preview"><p style="font-style: italic; background: green;">BLOCK: section-green</p>' : '' ;

    $green_title = get_field('b__title');
    $green_text = get_field('b__text')

?>

<section class='section-b'>
    
</section>

<?php
    echo $is_preview ? '</div>' : '';
?>