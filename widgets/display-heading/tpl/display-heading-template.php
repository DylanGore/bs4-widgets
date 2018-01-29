<?php
    $classes = wp_kses_post($instance['size']) . ' text-' . wp_kses_post($instance['text-align']) . ' ' . wp_kses_post($instance['custom-classes']);
?>

<h1 class="<?php echo($classes); ?>">
    <?php echo(wp_kses_post($instance['text'])); ?>
</h1>