<?php get_header(); ?>

    <main>
        <div class="hero__cta hero__cta--mobile">
            <a href="#" class="button button--primary">Zobacz ofertę</a>
        </div>

        <?php if (have_rows('content')) { ?>
            <?php while (have_rows('content')) {
                the_row(); ?>


                <?php get_template_part('template-parts/introduction'); ?>
                <?php get_template_part('template-parts/counters'); ?>
                <?php get_template_part('template-parts/wework'); ?>
                <?php get_template_part('template-parts/whatwedo'); ?>
                <?php get_template_part('template-parts/callus'); ?>
                <?php get_template_part('template-parts/specialists'); ?>
                <?php get_template_part('template-parts/contact'); ?>

            <?php } ?>
        <?php } ?>


    </main>

<?php get_footer(); ?>