<?php

    if($instance['type'] == 'lead'){
        $p_type = 'lead ';
    }else{
        $p_type = '';
    }

    $classes = $p_type . ' ' . wp_kses_post($instance['custom-classes']);
?>

<p class="<?php echo($classes); ?>">
    <?php echo(wp_kses_post($instance['text'])); ?>
</p>