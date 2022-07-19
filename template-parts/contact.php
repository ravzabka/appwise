<?php if (get_row_layout() == 'contact_section') { ?>

    <?php
    $contact_section_title = get_sub_field('contact_section_title');
    $contact_section_shortcode_field = get_sub_field('contact_section_shortcode_field');
    ?>

    <section class="contact">
        <div class="contact__container container">
            <?php if ($contact_section_title) { ?>
                <h3 class="headline"><?php echo $contact_section_title; ?></h3>
            <?php } ?>
            <?php if ($contact_section_shortcode_field) { ?>
                <div class="form">
                    <?php echo do_shortcode($contact_section_shortcode_field); ?>
                </div>
            <?php } ?>
        </div>
    </section>

<?php } ?>

