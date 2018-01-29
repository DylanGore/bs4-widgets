<?php
    $classes =  wp_kses_post($instance['custom-classes']);
    $type = wp_kses_post($instance['type']);
?>

<<?php echo($type);?> class="<?php echo($classes); ?>">