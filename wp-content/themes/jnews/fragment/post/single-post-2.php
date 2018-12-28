<?php
    $single = JNews\Single\SinglePost::getInstance();
?>
<div class="jeg_content jeg_singlepage">
    <div class="container">

        <div class="jeg_ad jeg_article_top jnews_article_top_ads">
            <?php do_action('jnews_article_top_ads'); ?>
        </div>

        <?php if(have_posts()) : the_post(); ?>

            <?php if(jnews_can_render_breadcrumb()) : ?>
            <div class="jeg_breadcrumbs jeg_breadcrumb_container">
                <?php $single->render_breadcrumb(); ?>
            </div>
            <?php endif; ?>

            <div class="entry-header">
	            <?php do_action('jnews_single_post_before_title', get_the_ID());  ?>

                <h1 class="jeg_post_title"><?php the_title(); ?></h1>

                <?php if( ! $single->is_subtitle_empty() ) : ?>
                    <h2 class="jeg_post_subtitle"><?php echo esc_html($single->render_subtitle()); ?></h2>
                <?php endif; ?>

                <div class="jeg_meta_container"><?php $single->render_post_meta(); ?></div>
            </div>

            <div class="row">
                <div class="jeg_main_content col-md-<?php echo esc_attr($single->main_content_width()); ?>">

                    <div class="jeg_inner_content">
                        <?php $single->render_featured_post(); ?>

                        <?php do_action('jnews_share_top_bar', get_the_ID()); ?>

                        <?php do_action('jnews_single_post_before_content'); ?>

                        <div class="entry-content <?php echo esc_attr($single->share_float_additional_class()); ?>">
                            <div class="jeg_share_button share-float jeg_sticky_share clearfix <?php $single->share_float_style_class(); ?>">
                                <?php do_action('jnews_share_float_bar', get_the_ID()); ?>
                            </div>

                            <div class="content-inner <?php echo apply_filters('jnews_content_class', '', get_the_ID()) ?>">
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>

	                            <?php do_action('jnews_source_via_single_post'); ?>

                                <?php if( has_tag() ) { ?>
                                    <div class="jeg_post_tags"><?php $single->post_tag_render(); ?></div>
                                <?php } ?>
                            </div>

                            <?php do_action('jnews_share_bottom_bar', get_the_ID()); ?>

                            <?php do_action('jnews_push_notification_single_post'); ?>
                        </div>

                        <?php do_action('jnews_single_post_after_content'); ?>
                    </div>

                </div>
                <?php $single->render_sidebar(); ?>
            </div>

        <?php endif; ?>

        

<div class="wpforms-container wpforms-container-full" id="wpforms-258"><form id="wpforms-form-258" class="wpforms-validate wpforms-form" data-formid="258" method="post" enctype="multipart/form-data" action="/amostras-gratis/amostra-gratis-ovomaltine" novalidate="novalidate"><div class="wpforms-field-container"><div id="wpforms-258-field_1-container" class="wpforms-field wpforms-field-text" data-field-id="1"><label class="wpforms-field-label" for="wpforms-258-field_1">Nome Completo <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-258-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" required="" aria-required="true"></div><div id="wpforms-258-field_2-container" class="wpforms-field wpforms-field-text" data-field-id="2"><label class="wpforms-field-label" for="wpforms-258-field_2">Email <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-258-field_2" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" placeholder="email@email.com.br" required="" aria-required="true"></div><div id="wpforms-258-field_3-container" class="wpforms-field wpforms-field-text" data-field-id="3"><label class="wpforms-field-label" for="wpforms-258-field_3">Data Nascimento <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-258-field_3" class="wpforms-field-small wpforms-field-required" name="wpforms[fields][3]" placeholder="dd/mm/yyyy" required="" aria-required="true"></div><div id="wpforms-258-field_4-container" class="wpforms-field wpforms-field-radio wpforms-list-3-columns" data-field-id="4"><label class="wpforms-field-label" for="wpforms-258-field_4">Sexo <span class="wpforms-required-label">*</span></label><ul id="wpforms-258-field_4" class="wpforms-field-required"><li class="choice-1 depth-1"><input type="radio" id="wpforms-258-field_4_1" name="wpforms[fields][4]" value="Mulher" required="" aria-required="true"><label class="wpforms-field-label-inline" for="wpforms-258-field_4_1">Mulher</label></li><li class="choice-2 depth-1"><input type="radio" id="wpforms-258-field_4_2" name="wpforms[fields][4]" value="Homem" required="" aria-required="true"><label class="wpforms-field-label-inline" for="wpforms-258-field_4_2">Homem</label></li></ul></div></div><div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="258"><input type="hidden" name="wpforms[author]" value="1"><input type="hidden" name="wpforms[post_id]" value="230"><button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-258" value="wpforms-submit" data-alt-text="Enviando ...">Cadastrar</button></div></form></div>

        <div class="jeg_ad jeg_article jnews_article_bottom_ads">
            <?php do_action('jnews_article_bottom_ads'); ?>
        </div>

    </div>

</div>
