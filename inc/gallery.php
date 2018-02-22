<?php
add_shortcode( 'gallery', 'portfolio_shortcode' );

function portfolio_shortcode( $atts ) {

  global $post;
  global $gallery_count;

  if ( ! empty( $atts['ids'] ) ) {
  // 'ids' is explicitly ordered, unless you specify otherwise.
  if ( empty( $atts['orderby'] ) )
  $atts['orderby'] = 'post__in';
  $atts['include'] = $atts['ids'];
  }

  extract(shortcode_atts(array(
    'id' => intval($post->ID),
    'order' => 'ASC',
    'orderby' => 'menu_order ID',
    'include' => '',
    'exclude' => '',
    'sync_transitions' => 1
  ), $atts));

  $gallery_count += 1;
  $post_id = intval($post->ID) . '_' . $gallery_count;

  if ( 'RAND' == $order )
  $orderby = 'none';

  $output_buffer ='
  <div id="gallery" class="gallery">
    <div id="thumbnails" class="thumbnail-container" >
      <ul class="thumbs noscript">';

      if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
          $attachments[$val->ID] = $_attachments[$key];
        }
      } elseif ( !empty($exclude) ) {
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
      } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
      }

      if ( !empty($attachments) ) {
        foreach ( $attachments as $aid => $attachment ) {

          $img = wp_get_attachment_image_src( $aid , $size = 'full');
          $thumb = wp_get_attachment_image_src( $aid , $size = 'thumbnail');
          $medium = wp_get_attachment_image_src( $aid , $size = 'medium');
          $full = wp_get_attachment_image_src( $aid , $size = 'full');
          $_post = get_post($aid);

          $image_title = esc_attr($_post->post_title);
          $image_alttext = get_post_meta($aid, '_wp_attachment_image_alt', true);
          $image_caption = $_post->post_excerpt;
          $image_description = $_post->post_content;

          $image_slug = preg_replace('/[^A-Za-z0-9 ]/', '', $image_alttext);
          $image_slug = strtolower(str_replace(' ', '-', $image_slug));

          $output_buffer .='
          <li class="thumbs__item">
            <a class="thumbs__link" href="' . $img[0] . '" name="' . $image_slug . '" title="' . $image_title . '" >
              <img src="' . $medium[0] . '" class="thumbs__img" alt="' . $image_alttext . '" title="' . $image_title . '" />
              <span class="thumbs__caption">' .  $image_caption . '</span>
              <span class="thumbs-caption">' .  $image_caption . '</span>
            </a>
          </li>';
        }
      }

      $output_buffer .='
      </ul>
    </div>
    <div id="loader" class="loader">
      <div class="loader__ball">
        <div></div>
      </div>
    </div>
    <div id="slideshow" class="slideshow-container">
      <div id="slides" class="slides"></div>
      <div id="info" class="info">
        <div id="controls" class="controls"></div>
        <div id="caption" class="caption"></div>
        <a href="javascript:void(0);" id="view" class="view">View All</a>
      </div>
    </div>
  </div>';

  return $output_buffer;
}
?>
