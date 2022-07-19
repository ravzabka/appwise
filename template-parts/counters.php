<?php if (get_row_layout() == 'counters_section') { ?>

    <?php
    $counter_one_value = get_sub_field('counter_one_value');
    $counter_one_description = get_sub_field('counter_one_description');

    $counter_two_value = get_sub_field('counter_two_value');
    $counter_two_description = get_sub_field('counter_two_description');

    $counter_three_value = get_sub_field('counter_three_value');
    $counter_three_description = get_sub_field('counter_three_description');

    $counter_bg_mobile = get_sub_field('counter_section_background_mobile');
    $counter_bg_desktop = get_sub_field('counter_section_background_desktop');

    ?>
    <style>
        .counters-block__bg--desktop {
            background-image: url('<?php echo $counter_bg_desktop;?>')
        }

        @media screen and (max-width: 990px) {
            .counters-block__bg--mobile {
                background-image: url('<?php echo $counter_bg_mobile; ?>')
            }
        }
    </style>

    <section class="counters-block counters-block__bg--desktop counters-block__bg--mobile">
        <div class="counters-block__container container">


            <?php if ($counter_one_value && $counter_one_description) { ?>
                <div class="counters-block__item">
                    <span class="counters-block__value"><?php echo $counter_one_value; ?></span>
                    <p class="counters-block__information"><?php echo $counter_one_description; ?></p>
                </div>
            <?php } ?>

            <?php if ($counter_two_value && $counter_two_description) { ?>
                <div class="counters-block__item">
                    <span class="counters-block__value"><?php echo $counter_two_value; ?></span>
                    <p class="counters-block__information"><?php echo $counter_two_description; ?></p>
                </div>
            <?php } ?>

            <?php if ($counter_three_value && $counter_three_description) { ?>

                <div class="counters-block__item">
                    <span class="counters-block__value"><?php echo $counter_three_value; ?></span>
                    <p class="counters-block__information"><?php echo $counter_three_description; ?></p>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>