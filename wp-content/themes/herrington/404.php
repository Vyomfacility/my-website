<?php
/**
 * @package Bravis-Themes
 */
$subtitle_404 = herrington()->get_theme_opt('subtitle_404');
$title_404 = herrington()->get_theme_opt('title_404');
$des_404 = herrington()->get_theme_opt('des_404');
$button_404 = herrington()->get_theme_opt('button_404');
$background_404 = herrington()->get_opt( 'background_404', ['url' => get_template_directory_uri().'/assets/img/404.webp', 'id' => '' ] );
get_header(); ?>
<div class="wrap-content-404" style="background-image:url(<?php echo esc_url($background_404['url']); ?>);">
    <div class="pxl-error-image" ></div>
    <div class="pxl-error-inner">
        <div class="content">
            <span class="pxl-error-subtitle">
                <?php if (!empty($subtitle_404)) {
                    echo pxl_print_html($subtitle_404);
                } else{
                    echo esc_html__('oops!!', 'herrington'); 
                } ?>
            </span>
            <h3 class="pxl-error-title">
                <?php if (!empty($title_404)) {
                    echo pxl_print_html($title_404);
                } else{
                    echo esc_html__('Page not found, return to homepage!', 'herrington'); 
                } ?>
                
            </h3>
            <p class="pxl-error-description">
                <?php if (!empty($des_404)) {
                    echo pxl_print_html($des_404);
                } else{
                    echo esc_html__('The page you are looking is not available or has been removed.Try going to HomePage by using the button below.', 'herrington');
                } ?>
            </p>
            <a class="btn-sm" href="<?php echo esc_url(home_url('/')); ?>">
                <span>
                    <?php if (!empty($button_404)) {
                        echo pxl_print_html($button_404);
                    } else{
                       echo esc_html__('back to homepage', 'herrington'); 
                    } ?>
                </span>
            </a>
        </div>
    </div>
</div>
<?php get_footer();
