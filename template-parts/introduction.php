<?php if (get_row_layout() == 'intro_section') { ?>

    <?php
    $box_one_title = get_sub_field('box_one_title');
    $box_one_description = get_sub_field('box_one_description');
    $box_one_icon = get_sub_field('box_one_icon');

    $box_two_title = get_sub_field('box_two_title');
    $box_two_description = get_sub_field('box_two_description');
    $box_two_icon = get_sub_field('box_two_icon');

    $box_three_title = get_sub_field('box_three_title');
    $box_three_description = get_sub_field('box_three_description');
    $box_three_icon = get_sub_field('box_three_icon');

    $introduction_logo = get_sub_field('introduction_logo');
    $introduction_title = get_sub_field('introduction_title');
    $introduction_description = get_sub_field('introduction_description');

    ?>

    <section class="introduction">
        <div class="introduction__container container">

            <div class="contact-boxes">
                <div class="contact-boxes__container">
                    <div class="contact-boxes__item contact-boxes__item--opacity70">
                        <?php if ($box_one_title) { ?>
                            <h2 class="contact-boxes__headline"><?php echo $box_one_title; ?></h2>
                        <?php } ?>
                        <div class="contact-boxes__content">
                            <?php if (!empty($box_one_icon)): ?>
                                <img src="<?php echo esc_url($box_one_icon['url']); ?>"
                                     alt="<?php echo esc_attr($box_one_icon['alt']); ?>"
                                     class="contact-boxes__image"/>
                            <?php endif; ?>
                            <?php if ($box_one_description) { ?>
                                <p class="contact-boxes__description"><?php echo $box_one_description; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="contact-boxes__item contact-boxes__item--opacity85">
                        <?php if ($box_two_title) { ?>
                            <h2 class="contact-boxes__headline"><?php echo $box_two_title; ?></h2>
                        <?php } ?>
                        <div class="contact-boxes__content">
                            <?php if (!empty($box_two_icon)): ?>
                                <img src="<?php echo esc_url($box_two_icon['url']); ?>"
                                     alt="<?php echo esc_attr($box_two_icon['alt']); ?>"
                                     class="contact-boxes__image"/>
                            <?php endif; ?>
                            <?php if ($box_two_description) { ?>
                                <address class="contact-boxes__address"><?php echo $box_two_description; ?></address>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="contact-boxes__item">
                        <?php if ($box_three_title) { ?>
                            <h2 class="contact-boxes__headline"><?php echo $box_three_title; ?></h2>
                        <?php } ?>
                        <div class="contact-boxes__content">
                            <?php if (!empty($box_three_icon)): ?>
                                <img src="<?php echo esc_url($box_three_icon['url']); ?>"
                                     alt="<?php echo esc_attr($box_three_icon['alt']); ?>"
                                     class="contact-boxes__image"/>
                            <?php endif; ?>
                            <?php if ($box_three_description) { ?>
                                <div class="contact-boxes__hours"><?php echo $box_three_description; ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="introduction__content-container">
                <img src="<?php echo esc_url($introduction_logo['url']); ?>"
                     alt="<?php echo esc_attr($image['alt']); ?>"
                     class="introduction__image"/>
                <div class="introduction__content">
                    <h3 class="headline introduction__headline"><?php echo $introduction_title; ?></h3>
                    <p class="introduction__description"><?php echo $introduction_description; ?></p>
                </div>
            </div>


        </div>
    </section>
<?php } ?>
