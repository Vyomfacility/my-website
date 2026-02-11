<?php
/**
 * Template part for displaying posts in loop
 *
 * @package Bravis-Themes
 */

if(has_post_thumbnail()){
    $content_inner_cls = 'single-post-inner has-post-thumbnail';
    $meta_class    = ''; 
} else {
    $content_inner_cls = 'single-post-inner  no-post-thumbnail';
    $meta_class = '';
}

if(class_exists('\Elementor\Plugin') && \Elementor\Plugin::$instance->documents->get( $id )->is_built_with_elementor()){
    $post_content_classes = 'single-elementor-content';
} else {
    $post_content_classes = '';
}
$sg_featured_img_size = herrington()->get_theme_opt('sg_featured_img_size', '960x545');
$sg_post_title = herrington()->get_theme_opt('sg_post_title', 'default');
$feature_image_display = herrington()->get_theme_opt('feature_image_display', 'hide');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('pxl-single-post'); ?>>
    <div class="<?php echo esc_attr($content_inner_cls);?>">
        <?php if (has_post_thumbnail() && ($feature_image_display == 'show')) {
            $img  = pxl_get_image_by_size( array(
                'attach_id'  => get_post_thumbnail_id($post->ID),
                'thumb_size' => $sg_featured_img_size,
            ) );
            $thumbnail    = $img['thumbnail']; ?>
            <div class="pxl-item--image">
                <?php echo wp_kses_post($thumbnail); ?>
                <?php if(!empty($post_video_link)) : ?>
                    <a href="<?php echo esc_url($post_video_link); ?>" class="post-button-video pxl-action-popup"><i class="caseicon-play1"></i></a>
                <?php endif; ?>        
            </div>
        <?php } ?>
        <?php
        herrington()->blog->get_post_metas();
        ?>
        <?php if(is_singular('post') && $sg_post_title == 'custom_text') { ?>
            <h2 class="pxl-item--title">
                <?php the_title(); ?>
            </h2>
        <?php } ?>
        <div class="post-content overflow-hidden">
            <div class="content-inner clearfix <?php echo esc_attr($post_content_classes);?>"><?php
            the_content();
        ?></div>
        <div class="<?php echo trim(implode(' ', ['navigation page-links clearfix empty-none'])); ?>"><?php 
        wp_link_pages(); 
    ?></div>
</div>
<?php
$post_tag = herrington()->get_theme_opt( 'post_tag', true );
$post_social_share = herrington()->get_theme_opt( 'post_social_share', false );
if ($post_tag == '1' || $post_social_share == '1'){
    ?>
    <div class="pxl-el-divider"></div>
    <div class="post-tags-share d-flex">
        <?php
        if ($post_tag == '1'){
            ?><div class="post-tags-wrap "><?php herrington()->blog->get_post_tags(); ?></div><?php
        }
        if ($post_social_share == '1'){
            ?><div class="post-share-wrap "><?php herrington()->blog->get_post_share(); ?></div><?php
        }
        ?>
    </div>
    <div class="pxl-el-divider"></div>
    <?php
}
?>
</div>

<?php herrington()->blog->get_post_nav(); ?>
</article>