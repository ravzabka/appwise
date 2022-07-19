<?php if (get_row_layout() == 'whatwedo_section') { ?>

    <?php $what_we_do_section_title = get_sub_field('what_we_do_section_title'); ?>

    <section class="what-we-do">
        <div class="what-we-do__container container">
            <h3 class="headline headline--underline what-we-do__headline"><?php echo $what_we_do_section_title; ?></h3>
            <ul class="tabs__controls">
                <?php

                if (have_rows('tabs')) {
                    $i = 1;

                    while (have_rows('tabs')) {
                        the_row();
                        $tab_title = get_sub_field('tab_title');
                        $tab_description = get_sub_field('tab_description');
                        $tab_tab_icon = get_sub_field('tab_icon');
                        ?>
                        <?php if ($tab_title && $tab_description) { ?>
                            <li class="tabs__item">
                                <button class="js-tab-title tabs__title <?php if ($i === 1) echo 'is-active'; ?>"
                                        data-target="tab<?php echo $i; ?>">
                                    <img
                                            src="<?php echo esc_url($tab_tab_icon['url']); ?>"
                                            alt="<?php echo esc_attr($tab_tab_icon['alt']); ?>"
                                            class="tabs__icon">

                                    <span><?php echo $tab_title; ?></span>
                                </button>
                            </li>
                        <?php } ?>
                        <?php $i++;
                    }
                }

                ?>
            </ul>

        </div>
        <div class="what-we-do__content-container">
            <div class="container">
                <ul class="tabs__section">

                    <?php if (have_rows('tabs')) {
                        $i = 1;
                        while (have_rows('tabs')) {
                            the_row();
                            $tab_title = get_sub_field('tab_title');
                            $tab_description = get_sub_field('tab_description');
                            $tab_tab_icon = get_sub_field('tab_icon');
                            ?>
                            <?php if ($tab_title && $tab_description) { ?>
                                <li class="tabs__item">
                                    <button class="js-tab-title tabs__title <?php if ($i === 1) echo 'is-active'; ?>"
                                            data-target="tab<?php echo $i; ?>">
                                        <img src="<?php echo esc_url($tab_tab_icon['url']); ?>"
                                             alt="<?php echo esc_attr($tab_tab_icon['alt']); ?>"
                                             class="tabs__icon"><span><?php echo $tab_title; ?></span></button>
                                    <div id="tab<?php echo $i; ?>"
                                         class="tabs__content <?php if ($i === 1) echo 'is-active'; ?>">
                                        <p><?php echo $tab_description; ?></p>
                                    </div>
                                </li>
                            <?php } ?>

                            <?php $i++;
                        }
                    }
                    ?>
                </ul>
            </div>

        </div>
    </section>
<?php } ?>