<?php

    $btn_color = wp_kses_post($instance['button-color']);
    if(wp_kses_post($instance['is-outline'])){
        $btn_outline = "outline-";
    }else{
        $btn_outline = "";
    }

    if($instance['button-size'] == 'default'){
        $btn_size = '';
    }elseif($instance['button-size'] == 'block'){
        $btn_size = 'btn-lg btn-block';
    }else{
        $btn_size = 'btn-' . wp_kses_post($instance['button-size']);
    }

    if($instance['is-disabled']){
        $btn_disabled = "disabled";
    }else{
        $btn_disabled = "";
    }

    $btn_attrib = $btn_outline . $btn_color . ' ' . $btn_size . ' ' . $btn_disabled;

?>

<a class="btn btn-<?php echo($btn_attrib);?>" role="button" href="<?php echo wp_kses_post($instance['button-link']); ?>" target="<?php echo wp_kses_post($instance['button-target']); ?>" title="<?php echo wp_kses_post($instance['button-title']); ?>">
    <?php echo wp_kses_post($instance['button-text']); ?>
</a>

