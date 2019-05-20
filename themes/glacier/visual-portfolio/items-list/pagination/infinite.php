<?php
/**
 * Infinite pagination template.
 *
 * @var $args
 * @package glacier
 */

?>

<ul class="<?php echo esc_attr( $args['class'] ); ?> vp-pagination__style-default" data-vp-pagination-type="<?php echo esc_attr( $args['type'] ); ?>">
    <li class="vp-pagination__item">
        <a class="vp-pagination__load-more" href="<?php echo esc_url( $args['next_page_url'] ); ?>">
            <span><?php echo esc_html__( 'Load More', 'glacier' ); ?></span>
            <span class="vp-pagination__load-more-loading"><?php echo esc_html__( 'Loading...', 'glacier' ); ?></span>
            <span class="vp-pagination__load-more-no-more"><?php echo esc_html__( 'No More', 'glacier' ); ?></span>
        </a>
    </li>
</ul>
