<?php if (get_row_layout() == 'specialists_section') { ?>

    <?php $specialist_section_title = get_sub_field('specialist_section_title');
    $specialist_section_description = get_sub_field('specialist_section_description');
    ?>

    <section class="container specialists">
        <div class="specialist__wrapper">
            <?php if ($specialist_section_title) { ?>
                <h2 class="headline headline--underline"><?php echo $specialist_section_title; ?></h2>
            <?php } ?>

            <?php if ($specialist_section_description) { ?>
                <p class="specialists__description"><?php echo $specialist_section_description; ?></p>
            <?php } ?>

            <div class="specialists__container">
                <?php
                $featured_posts = get_sub_field('specialists');
                if ($featured_posts): ?>

                    <?php foreach ($featured_posts as $featured_post):
                        $title = get_the_title($featured_post->ID);
                        $specialist_name = get_field('specialist_name', $featured_post->ID);
                        $specialist_position = get_field('specialist_position', $featured_post->ID);
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($featured_post->ID), 'full');
                        ?>

                        <div class="specialists__item">
                            <?php if ($image && $title) { ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>"
                                     class="specialists__image">
                            <?php } ?>
                            <div class="specialists__details">
                                <?php if ($specialist_name) { ?>
                                    <h3 class="specialists__person"><?php echo $specialist_name; ?></h3>
                                <?php } ?>

                                <?php if ($specialist_position) { ?>
                                    <h4 class="specialists__position"><?php echo $specialist_position; ?></h4>
                                <?php } ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php } ?>