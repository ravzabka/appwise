<?php if (get_row_layout() == 'work_section') { ?>

    <?php

    $work_section_title = get_sub_field('work_section_title');
    $work_section_description = get_sub_field('work_section_description');
    $work_section_image = get_sub_field('work_section_image');

    ?>
    <section class="how-we-work">
        <div class="how-we-work__container container">
            <div class="how-we-work__content">
                <?php if ($work_section_title) { ?>
                    <h3 class="headline how-we-work__headline"><?php echo $work_section_title; ?></h3>
                <?php } ?>
                <?php if ($work_section_description) { ?>
                    <p class="how-we-work__description"><?php echo $work_section_description; ?></p>
                <?php } ?>
            </div>
            <?php if (!empty($work_section_image)): ?>
                <img src="<?php echo esc_url($work_section_image['url']); ?>"
                     alt="<?php echo esc_attr($work_section_image['alt']); ?>"
                     class="how-we-work__image"/>
            <?php endif; ?>
        </div>
    </section>
<?php } ?>