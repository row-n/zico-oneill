<?php
add_action('widgets_init', 'r_social_icons_widgets');

function r_social_icons_widgets()
{
    register_widget('r_social_icons');
}

class r_social_icons extends WP_Widget {

    function r_social_icons()
    {
        $widget_ops = array('classname' => 'Social', 'description' => 'Show a list of icons and followers number.');

        $control_ops = array('id_base' => 'social_icons-widget');

        $this->WP_Widget('social_icons-widget', __('(theme) Social','zicooneill'), $widget_ops, $control_ops);
    }

    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        $twitter = esc_attr($instance['twitter']);
        $instagram = esc_attr($instance['instagram']);
        $flickr = esc_attr($instance['flickr']);
        $facebook = esc_attr($instance['facebook']);
        $tumblr = esc_attr($instance['tumblr']);
        $linkedin = esc_attr($instance['linkedin']);
        $google_plus = esc_attr($instance['google_plus']);
        $pinterest = esc_attr($instance['pinterest']);
        $vimeo = esc_attr($instance['vimeo']);
        $youtube = esc_attr($instance['youtube']);
        $mail = esc_attr($instance['mail']);
        $blog = esc_attr($instance['blog']);

        ?>
        <div class="widget-subscribe">

            <?php if($title) {
                echo wp_kses_post($before_title) . $title . $after_title;
            } ?>

            <div class="social-icons clearfix">

                <ul>

                    <?php if($twitter): ?>
                    <li><a href="<?php echo esc_url($twitter) ?>" class="twitter">Twitter</a></li>
                    <?php endif; ?>

                    <?php if($instagram): ?>
                    <li><a href="<?php echo esc_url($instagram) ?>" class="instagram">Instagram</a></li>
                    <?php endif; ?>

                    <?php if($flickr): ?>
                    <li><a href="<?php echo esc_url($flickr) ?>" class="flickr">Flickr</a></li>
                    <?php endif; ?>

                    <?php if($facebook): ?>
                    <li><a href="<?php echo esc_url($facebook) ?>" class="facebook">Facebook</a></li>
                    <?php endif; ?>

                    <?php if($tumblr): ?>
                    <li><a href="<?php echo esc_url($tumblr) ?>" class="tumblr">Tumblr</a></li>
                    <?php endif; ?>

                    <?php if($linkedin): ?>
                    <li><a href="<?php echo esc_url($linkedin) ?>" class="linkedin">LinkedIn</a></li>
                    <?php endif; ?>

                    <?php if($google_plus): ?>
                    <li><a href="<?php echo esc_url($google_plus) ?>" class="google-plus">Google&#x2b;</a></li>
                    <?php endif; ?>

                    <?php if($pinterest): ?>
                    <li><a href="<?php echo esc_url($pinterest) ?>" class="pinterest">Pinterest</a></li>
                    <?php endif; ?>

                    <?php if($vimeo): ?>
                    <li><a href="<?php echo esc_url($vimeo) ?>" class="vimeo">Vimeo</a></li>
                    <?php endif; ?>

                    <?php if($youtube): ?>
                    <li><a href="<?php echo esc_url($youtube) ?>" class="youtube">YouTube</a></li>
                    <?php endif; ?>

                    <?php if($mail): ?>
                    <li><a href="<?php echo esc_url($mail) ?>" class="mail">E-mail</a></li>
                    <?php endif; ?>

                    <?php if($blog): ?>
                    <li><a href="<?php echo esc_url($blog) ?>" class="blog">Blog</a></li>
                    <?php endif; ?>

                </ul>
            </div>

            <hr />

        </div>

    <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);
        $instance['twitter'] = $new_instance['twitter'];
        $instance['instagram'] = $new_instance['instagram'];
        $instance['flickr'] = $new_instance['flickr'];
        $instance['facebook'] = $new_instance['facebook'];
        $instance['tumblr'] = $new_instance['tumblr'];
        $instance['linkedin'] = $new_instance['linkedin'];
        $instance['google_plus'] = $new_instance['google_plus'];
        $instance['pinterest'] = $new_instance['pinterest'];
        $instance['vimeo'] = $new_instance['vimeo'];
        $instance['youtube'] = $new_instance['youtube'];
        $instance['mail'] = $new_instance['mail'];
        $instance['blog'] = $new_instance['blog'];

        return $instance;
    }

    function form($instance)
    {

        $defaults = array('title' => '', 'text_label' => 'Socials');
        $instance = wp_parse_args((array) $instance, $defaults); ?>
        <p>

            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>" style="width: 120px; display: inline-block">Title:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>" style="width: 120px; display: inline-block">Twitter link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" value="<?php echo esc_url($instance['twitter']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>" style="width: 120px; display: inline-block">Instagram link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" value="<?php echo esc_url($instance['instagram']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('flickr')); ?>" style="width: 120px; display: inline-block">Flickr link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('flickr')); ?>" name="<?php echo esc_attr($this->get_field_name('flickr')); ?>" value="<?php echo esc_url($instance['flickr']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>" style="width: 120px; display: inline-block">Facebook link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" value="<?php echo esc_url($instance['facebook']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" style="width: 120px; display: inline-block">Tumblr link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" value="<?php echo esc_url($instance['tumblr']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" style="width: 120px; display: inline-block">Linkedin link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" value="<?php echo esc_url($instance['linkedin']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('google_plus')); ?>" style="width: 120px; display: inline-block">Google Plus link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('google_plus')); ?>" name="<?php echo esc_attr($this->get_field_name('google_plus')); ?>" value="<?php echo esc_url($instance['google_plus']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" style="width: 120px; display: inline-block">Pinterest link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" value="<?php echo esc_url($instance['pinterest']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('vimeo')); ?>" style="width: 120px; display: inline-block">Vimeo link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('vimeo')); ?>" name="<?php echo esc_attr($this->get_field_name('vimeo')); ?>" value="<?php echo esc_url($instance['vimeo']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>" style="width: 120px; display: inline-block">Youtube:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" value="<?php echo esc_url($instance['youtube']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('mail')); ?>" style="width: 120px; display: inline-block">Email link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('mail')); ?>" name="<?php echo esc_attr($this->get_field_name('mail')); ?>" value="<?php echo esc_url($instance['mail']); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('blog')); ?>" style="width: 120px; display: inline-block">Blog link:</label>
            <input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('blog')); ?>" name="<?php echo esc_attr($this->get_field_name('blog')); ?>" value="<?php echo esc_url($instance['blog']); ?>" />
        </p>

    <?php
    }
}
?>