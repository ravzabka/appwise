<?php if (get_row_layout() == 'callus_section') { ?>

    <?php
    $call_us_section_title = get_sub_field('call_us_section_title');
    $call_us_phone_number = get_sub_field('call_us_phone_number');
    $call_us_phone_number_label = get_sub_field('call_us_phone_number_label');
    $call_us_background_image = get_sub_field('call_us_background_image');
    ?>

    <section class="call-us"
             style="background-image: url('<?php echo $call_us_background_image; ?>');">
        <div class="call-us__container container">
            <?php if ($call_us_section_title) { ?>
                <h3 class="headline call-us__headline"><?php echo $call_us_section_title; ?></h3>
            <?php } ?>
            <?php if ($call_us_phone_number && $call_us_phone_number_label) { ?>
                <a href="tel:<?php echo $call_us_phone_number; ?>"
                   class="call-us__link"><?php echo $call_us_phone_number_label; ?></a>
            <?php } ?>
        </div>
    </section>
<?php } ?>