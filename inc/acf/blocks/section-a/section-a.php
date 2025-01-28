<?php

    $block_css_classes = [
        'section-a'
    ];

    echo $is_preview ? '<div class="gt-block-preview"><p style="font-style: italic; background: green;">BLOCK: section-green</p>' : '' ;

    $green_title = get_field('a__title');
    $green_text = get_field('a__text')

?>

<section class='section-a'>

</section>

<?php
    echo $is_preview ? '</div>' : '';
?>