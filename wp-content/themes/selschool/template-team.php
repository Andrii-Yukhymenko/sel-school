<?php
/*
Template Name: Шаблон страницы команды
Template Post Type: page
*/
get_header();
?>

	<section class="agency" style="background: <?php echo the_field('agency__bg_color')?>; display: <?php the_field('agency__display') ?>;">
        <p class="title" style="color: <?php echo the_field('agency__title_color')?>;"><?php the_field('agency__title')?></p>
        <p class="subtitle" style="color: <?php echo the_field('agency__subtitle_color')?>;"><?php the_field('agency__subtitle')?></p>
        <div class="content container">
            <div class="content">
                <div class="content__item">
                    <img src="<?php echo the_field('agency__img')?>" alt="" class="content__img">
                </div>
                <div class="content__item">
                    <p class="content__title" style="color: <?php echo the_field('agency__in_title_color')?>;"><?php echo the_field('agency__in_title')?></p>
                    <p class="content__paragraph" style="color: <?php echo the_field('agency__in_text_color')?>;"><?php echo the_field('agency__in_text')?></p>
                    <a href="#meet-team" class="content__button button">Переглянути</a>
                </div>
            </div>
        </div>
    </section>

	<section class="meet-team meet-team_admins" style="background: <?php echo the_field('meet_team_admins__bg_color')?>; display: <?php the_field('meet_team_admins__display') ?>;">
        <p class="title" style="color: <?php echo the_field('meet_team_admins__title_color')?>;"><?php the_field('meet_team_admins__title')?></p>
        <p class="subtitle" style="color: <?php echo the_field('meet_team_admins__subtitle_color')?>;"><?php the_field('meet_team_admins__subtitle')?></p>
        <div class="container meet-team__container">
			<?php
                $team_members_admins_item = get_posts(array(
                                        'post_type' => 'team_members_admins',
                                        'publish' => true,
                                        'numberposts' => 9999
                ));
                foreach ($team_members_admins_item as $post){
                include(get_template_directory() . '/particles/team_members_admins.php');
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <section id="meet-team" class="meet-team" style="background: <?php echo the_field('meet_team__bg_color')?>; display: <?php the_field('meet_team__display') ?>;">
		<p class="title" style="color: <?php echo the_field('meet_team__title_color')?>;"><?php the_field('meet_team__title')?></p>
        <p class="subtitle" style="color: <?php echo the_field('meet_team__subtitle_color')?>;"><?php the_field('meet_team__subtitle')?></p>
        <div class="container meet-team__container">
			<?php
                $team_members_admins_item = get_posts(array(
                                        'post_type' => 'team_members',
                                        'publish' => true,
                                        'numberposts' => 9999
                ));
                foreach ($team_members_admins_item as $post){
                include(get_template_directory() . '/particles/team_members.php');
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

<?php
get_footer();
