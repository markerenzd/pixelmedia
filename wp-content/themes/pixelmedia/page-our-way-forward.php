<?php
/**
 * Template Name: Our Way Forward
 */
$thumb_item = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div class="banner-header-wrapper" style="background: url('<?php echo $thumb_item ?>') no-repeat bottom right scroll transparent">
    <div class="banner-header-content-wrapper">
        <div class="banner-header-content">
            <div class="grid-container">
                <div class="cell large-12">
                    <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-2">
                       <div class="cell">
                            <?php echo get_the_content() ?>
                            <div class="booknow">
                                <a href="#book" class="booknow-btn">book now</a>
                                <div>
                                    <span>*We won't charge you<br>until results delivered.</span>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div id="strategy-and-digital-marketing">
        <div class="intro grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-10 large-10 medium-offset-1 large-offset-1">
                    <h2><?php echo $item_id = get_post_meta( $post->ID, '_cmb_wayforward_heading', true ) ?></h2>
                    <p><?php echo $item_id = get_post_meta( $post->ID, '_cmb_wayforward_desc', true ) ?></p>
                </div>
            </div>
        </div>

        <div class="services grid-container">
            <div class="grid-x grid-padding-x small-up-1 medium-up-5 large-up-5">
                <?php $list_services = get_post_meta( $post->ID, '_cmb_services_list_inner', true ); ?>
                <?php foreach ($list_services as $services ): ?>
                    <div class="cell">
                        <img src="<?php echo $services[ 'image' ] ?>" alt="<?php echo $services[ 'title' ] ?>">
                        <span><?php echo $services[ 'title' ] ?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="learn-more-wrapper grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-12 large-12">
                    <a href="#" class="learn-more-btn">learn more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action-wrapper">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-10 large-10">
                    <?php echo $item_id = get_post_meta( $post->ID, '_cmb_wayforward_cta_desc', true ) ?>
                </div>
                <div class="cell medium-2 large-2">
                    <div class="booknow-wrapper">
                        <div class="booknow-content">
                            <a href="<?php echo $item_id = get_post_meta( $post->ID, '_cmb_wayforward_cta_url', true ) ?>" class="booknow-btn">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="branding-and-creative-services">
        <div class="intro grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-10 large-10 medium-offset-1 large-offset-1">
                    <h2><?php echo $item_id = get_post_meta( $post->ID, '_cmb_branding_heading', true ) ?></h2>
                    <p><?php echo $item_id = get_post_meta( $post->ID, '_cmb_branding_desc', true ) ?></p>
                </div>
            </div>
        </div>

        <div class="services grid-container">
            <div class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
                <?php $list_branding = get_post_meta( $post->ID, '_cmb_branding_list_inner', true ); ?>
                <?php foreach ($list_branding as $branding): ?>
                     <div class="cell">
                        <img src="<?php echo $branding[ 'image' ] ?>" alt="<?php $branding[ 'title' ] ?>">
                        <span><?php echo $branding[ 'title' ] ?></span>
                    </div>
                <?php endforeach ?>
            </div>

            <div class="learn-more-wrapper grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-12 large-12">
                        <a href="#" class="learn-more-btn">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>