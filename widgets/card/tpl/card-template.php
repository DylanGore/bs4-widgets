<?php

    $card_classes = 'text-' . wp_kses_post($instance['text-align']) . ' ' . wp_kses_post($instance['custom-classes']);
    $img_src = wp_kses_post($instance['img-src']);
?>

<div class="card <?php echo($card_classes);?>">
    <?php if($instance['show-card-image']){?>
        <img class="card-img-<?php echo(wp_kses_post($instance['card-image-loc']));?>" src="<?php echo($img_src);?>" alt="<?php echo(wp_kses_post($instance['card-image-alt']));?>"> 
    <?php } ?>
    <div class="card-body">
        <h5 class="card-title"><?php echo wp_kses_post($instance['card-title']) ?></h5>
        <div class="card-text"><?php echo wp_kses_post($instance['card-text']) ?></div>
    </div>
</div>