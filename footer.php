<footer id="footer" class="footer">
    <div class="footer__container container">

        <?php
        $image = get_field('footer_logo', 'option'); ?>

        <div class="footer__logo-container">
            <a href="<?php echo site_url() ?>">
                <?php if (!empty($image)): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                         class="footer__logo"/>
                <?php endif; ?>
            </a>
        </div>

        <?php if (have_rows('footer_col_1', 'option')): ?>
            <?php while (have_rows('footer_col_1', 'option')): the_row();

                $column_title = get_sub_field('column_title', 'option');
                $column_description = get_sub_field('column_description', 'option'); ?>

                <div class="footer__col">
                    <?php if ($column_title) { ?>
                        <h4 class="footer__col-headline"><?php echo $column_title; ?></h4>
                    <?php } ?>
                    <?php if ($column_description) { ?>
                        <p class="footer__col-description"><?php echo $column_description; ?></p>
                    <?php } ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('footer_col_2', 'option')): ?>
            <?php while (have_rows('footer_col_2', 'option')): the_row();

                $column_title_two = get_sub_field('column_title_two', 'option');
                $column_description_two = get_sub_field('column_description_two', 'option');
                $phone_number = get_sub_field('phone_number', 'option');
                $phone_number_label = get_sub_field('phone_number_label', 'option'); ?>
                <div class="footer__col">
                    <?php if ($column_title_two) { ?>
                        <h4 class="footer__col-headline"><?php echo $column_title_two; ?></h4>
                    <?php } ?>

                    <?php if ($column_description_two) { ?>
                        <p class="footer__col-description"><?php echo $column_description_two; ?>
                        </p>
                    <?php } ?>

                    <?php if ($phone_number) { ?>
                        <a href="tel:<?php echo $phone_number; ?>">tel: <?php echo $phone_number_label; ?></a>
                    <?php } ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('footer_col_3', 'option')): ?>
            <?php while (have_rows('footer_col_3', 'option')): the_row();

                $column_title_three = get_sub_field('column_title_three', 'option');
                $column_description_three = get_sub_field('column_description_three', 'option'); ?>
                <div class="footer__col">
                    <?php if ($column_title_three) { ?>
                        <h4 class="footer__col-headline"><?php echo $column_title_three; ?></h4>
                    <?php } ?>
                    <?php if ($column_description_three) { ?>
                        <p class="footer__col-description"><?php echo $column_description_three; ?></p>
                    <?php } ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>


        <?php if (have_rows('footer_col_4', 'option')): ?>
            <?php while (have_rows('footer_col_4', 'option')): the_row();

                $column_title_four = get_sub_field('column_title_four', 'option');
                $social_link_icon = get_sub_field('social_link_icon', 'option');
                $social_link = get_sub_field('social_link', 'option'); ?>
                <div class="footer__col">
                    <?php if ($column_title_four) { ?>
                        <h4 class="footer__col-headline"><?php echo $column_title_four; ?></h4>
                    <?php } ?>
                    <p class="footer__col-description footer__col-description--social">
                        <a href="<?php echo $social_link; ?>" target="_blank">
                            <?php if (!empty($social_link_icon)): ?>
                                <img src="<?php echo esc_url($social_link_icon['url']); ?>"
                                     alt="<?php echo esc_attr($social_link_icon['alt']); ?>"/>
                            <?php endif; ?>
                        </a>
                    </p>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>