<?php
    $classes =  'text-' . wp_kses_post($instance['text-align']) . ' ' . wp_kses_post($instance['custom-classes']);
    $size = wp_kses_post($instance['size']);
?>

<<?php echo($size);?> class="<?php echo($classes); ?>">
    <?php echo(wp_kses_post($instance['text'])); ?>
</<?php echo($size);?>>