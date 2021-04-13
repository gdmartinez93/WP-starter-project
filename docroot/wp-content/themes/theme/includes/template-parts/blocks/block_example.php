<?php
/**
 * Block Name: Client Stories
 */

$title = get_field( 'title' ); // Text

// create id attribute for specific styling
$id = 'block-example-' . $block[ 'id' ]; ?>

<section id="<?php echo $id; ?>" class="block_example">
    <h1><?php echo $title; ?></h1>
</section>
