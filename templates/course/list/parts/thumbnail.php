<?php if ( 'yes' == $settings['course_list_image'] ) : ?>
    <?php
        $image_size = $settings['course_list_image_size_size'];
        $image_url  = get_tutor_course_thumbnail( $image_size, $url = true );
    ?>
    <div class="tutor-course-thumbnail">
        <a href="<?php the_permalink(); ?>" class="tutor-d-block">
            <div class="tutor-ratio tutor-ratio-<?php echo $settings['course_list_skin'] == 'overlayed' ? '1x1' : '16x9'; ?>">
                <img class="tutor-card-image-top" src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" style="<?php echo esc_attr( isset( $dynamic_style ) ? $dynamic_style : '' ); ?>" loading="lazy">
            </div>
        </a>
    </div>
<?php endif; ?>