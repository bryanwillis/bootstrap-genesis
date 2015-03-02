<?php

function add_bs_widgets_form($t,$return,$instance) {
    $instance = wp_parse_args(
        (array)$instance,
        array(
          'wpkmkz_bs_row_start' => '',
          'wpkmkz_bs_row_end'   => '',
          'wpkmkz_bs_col_lg'    => '',
          'wpkmkz_bs_col_lg_offset'    => '',
          'wpkmkz_bs_col_md'    => '',
          'wpkmkz_bs_col_md_offset'    => '',			
          'wpkmkz_bs_col_sm'    => '',
          'wpkmkz_bs_col_sm_offset'    => '',	
          'wpkmkz_bs_col_xs'    => '',
          'wpkmkz_bs_col_xs_offset'    => '',
		  'wpkmkz_bs_hide_lg'   => '',
          'wpkmkz_bs_hide_md'   => '',
          'wpkmkz_bs_hide_sm'   => '',
          'wpkmkz_bs_hide_xs'   => '',
        )
    );
    $cols = array(0,1,2,3,4,5,6,7,8,9,10,11,12);
    ?>
    <div class="wpkmkz-bs-grid-widgets">
      <h3><a href="#" class="wpkmkz-bs-grid-widgets-handle"><?php _e('Bootstrap grid class', 'wpkmkz-bsgw'); ?> <span class="dashicons dashicons-arrow-down-alt"></span></a></h3>
      <div class="wpkmkz-bs-grid-widgets-inner">
        <p>
          <?php _e('Please see ', 'wpkmkz-bsgw'); ?> 
          <a href="http://getbootstrap.com/css/#grid-options" target="_blank">
            <?php echo esc_url('http://getbootstrap.com/css/#grid-options'); ?>
          </a> 
          <?php _e(' for documentation.', 'wpkmkz-bsgw'); ?>
        </p>
		
        <hr>
		<!-- Rows -->
        <div class="form-group">
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_row_start'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_row_start'); ?>"
            name="<?php echo $t->get_field_name('wpkmkz_bs_row_start'); ?>"
            type="checkbox"
            value="1"
            <?php echo $instance['wpkmkz_bs_row_start'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Open a div.row', 'wpkmkz-bsgw'); ?></label>
        </div>
		
        <div class="form-group">
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_row_end'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_row_end'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_row_end'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_row_end'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Close a div.row', 'wpkmkz-bsgw'); ?></label>
        </div>
        <hr>
		
		
		<p>
		<!-- <i class="fa fa-desktop"></i> -->
		<span class="iconized font-awesome glyph-desktop size-sharp-2x"></span> <?php _e('Desktops ', 'wpkmkz-bsgw'); ?>
		</p>
		<div class="form-inline">
		
        <div class="form-group">          
		<label for="<?php echo $t->get_field_id('wpkmkz_bs_col_lg'); ?>"><?php _e('.col-lg- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_lg'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_lg'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_lg'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_lg_offset'); ?>"><?php _e('.col-lg-offset- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_lg_offset'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_lg_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_lg_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
		</div>	
		
		<hr>
				
		<p>
		<!-- <i class="fa fa-laptop"></i> -->
		<span class="iconized font-awesome glyph-laptop size-sharp-2x"></span> <?php _e('Labtops ', 'wpkmkz-bsgw'); ?>
		</p>
				
		<div class="form-inline">
				
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_md'); ?>"><?php _e('.col-md- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_md'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_md'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_md'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>		
				
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_md_offset'); ?>"><?php _e('.col-md-offset- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_md_offset'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_md_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_md_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>				
		</div>	
				
		<hr>	
		
		<p>
		<!-- <i class="fa fa-tablet"></i> -->
		<span class="iconized font-awesome glyph-tablet size-sharp-2x"></span> <?php _e('Tablets ', 'wpkmkz-bsgw'); ?>
		</p>

		<div class="form-inline">
		<div class="form-group">          
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_sm'); ?>"><?php _e('.col-sm- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_sm'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_sm'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_sm'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>	
				
        <div class="form-group">          
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_sm_offset'); ?>"><?php _e('.col-sm-offset- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_sm_offset'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_sm_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_sm_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>				
        </div>
				
		<hr>
		
		<p>
		<!-- <i class="fa fa-mobile"></i> -->
		<span class="iconized font-awesome glyph-mobile size-sharp-2x"></span> <?php _e('Phones ', 'wpkmkz-bsgw'); ?>	
		</p>

		<div class="form-inline">
		<div class="form-group">          
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_xs'); ?>"><?php _e('.col-xs- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_xs'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_xs'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_xs'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>				

        <div class="form-group">          		
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_col_xs_offset'); ?>"><?php _e('.col-xs-offset- ', 'wpkmkz'); ?></label>
          <select class="widefat" id="<?php echo $t->get_field_id('wpkmkz_bs_col_xs_offset'); ?>" name="<?php echo $t->get_field_name('wpkmkz_bs_col_xs_offset'); ?>">
            <?php foreach($cols as $col) : ?>
              <option value="<?php echo $col; ?>" <?php echo $instance['wpkmkz_bs_col_xs_offset'] == $col ? ' selected="selected"' : ''; ?>><?php echo $col; ?></option>
            <?php endforeach; ?>
          </select>
        </div>				
        </div>
				
				
		<hr>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_lg'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_hide_lg'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_hide_lg'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_hide_lg'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-lg', 'wpkmkz'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_md'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_hide_md'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_hide_md'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_hide_md'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-md', 'wpkmkz'); ?></label>
        </p>
        <p>
            <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_sm'); ?>">
            <input
              class="wpkmkz-bs-grid-input"
              id="<?php echo $t->get_field_id('wpkmkz_bs_hide_sm'); ?>"
              type="checkbox"
              name="<?php echo $t->get_field_name('wpkmkz_bs_hide_sm'); ?>"
              value="1"
              <?php echo $instance['wpkmkz_bs_hide_sm'] == '1' ? ' checked="checked"' : ''; ?>>
              <?php _e('Hide on .col-sm', 'wpkmkz'); ?></label>
        </p>
        <p>
          <label for="<?php echo $t->get_field_id('wpkmkz_bs_hide_xs'); ?>">
          <input
            class="wpkmkz-bs-grid-input"
            id="<?php echo $t->get_field_id('wpkmkz_bs_hide_xs'); ?>"
            type="checkbox"
            name="<?php echo $t->get_field_name('wpkmkz_bs_hide_xs'); ?>"
            value="1"
            <?php echo $instance['wpkmkz_bs_hide_xs'] == '1' ? ' checked="checked"' : ''; ?>>
            <?php _e('Hide on .col-xs', 'wpkmkz'); ?></label>
        </p>
				
      </div>
    </div>
    <?php
    $return = null;
    return array($t,$return,$instance);
}
add_action('in_widget_form', 'add_bs_widgets_form',5,3);


/*
|----------------------------------------------------------------
|   Save form options
|----------------------------------------------------------------
*/

function add_bs_widgets_form_update($instance, $new_instance, $old_instance){
    $instance['wpkmkz_bs_row_start'] = $new_instance['wpkmkz_bs_row_start'];
    $instance['wpkmkz_bs_row_end']   = $new_instance['wpkmkz_bs_row_end'];
    $instance['wpkmkz_bs_col_lg']    = $new_instance['wpkmkz_bs_col_lg'];
	$instance['wpkmkz_bs_col_lg_offset']    = $new_instance['wpkmkz_bs_col_lg_offset'];
    $instance['wpkmkz_bs_col_md']    = $new_instance['wpkmkz_bs_col_md'];
    $instance['wpkmkz_bs_col_md_offset']    = $new_instance['wpkmkz_bs_col_md_offset'];
    $instance['wpkmkz_bs_col_sm']    = $new_instance['wpkmkz_bs_col_sm'];
    $instance['wpkmkz_bs_col_sm_offset']    = $new_instance['wpkmkz_bs_col_sm_offset'];
    $instance['wpkmkz_bs_col_xs']    = $new_instance['wpkmkz_bs_col_xs'];
    $instance['wpkmkz_bs_col_xs_offset']    = $new_instance['wpkmkz_bs_col_xs_offset'];
    $instance['wpkmkz_bs_hide_lg']   = $new_instance['wpkmkz_bs_hide_lg'];
    $instance['wpkmkz_bs_hide_md']   = $new_instance['wpkmkz_bs_hide_md'];
    $instance['wpkmkz_bs_hide_sm']   = $new_instance['wpkmkz_bs_hide_sm'];
    $instance['wpkmkz_bs_hide_xs']   = $new_instance['wpkmkz_bs_hide_xs'];
	
    return $instance;
}
add_filter('widget_update_callback', 'add_bs_widgets_form_update',5,3);


/*
|----------------------------------------------------------------
|   Add widget css classes
|----------------------------------------------------------------
*/

function add_bs_widgets_dynamic_sidebar_params($params){
    global $wp_registered_widgets;
    $widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];

    $classes = array();
    $cols = array(
      'wpkmkz_bs_col_lg'  =>'col-lg-',
      'wpkmkz_bs_col_lg_offset'  =>'col-lg-offset-',
      'wpkmkz_bs_col_md'  =>'col-md-',
      'wpkmkz_bs_col_md_offset'  =>'col-md-offset-',
      'wpkmkz_bs_col_sm'  =>'col-sm-',
      'wpkmkz_bs_col_sm_offset'  =>'col-sm-offset-',
      'wpkmkz_bs_col_xs'  =>'col-xs-',
      'wpkmkz_bs_col_xs_offset'  =>'col-xs-offset-',
      'wpkmkz_bs_hide_lg' =>'hidden-lg',
      'wpkmkz_bs_hide_md' =>'hidden-md',
      'wpkmkz_bs_hide_sm' =>'hidden-sm',
      'wpkmkz_bs_hide_sm' =>'hidden-xs',

    );

    foreach($cols as $col_opt => $col)
    {
      if(isset($widget_opt[$widget_num][$col_opt]) && $widget_opt[$widget_num][$col_opt] != '0')
        $classes[] = strpos($col_opt, 'hide') ? $col : $col.$widget_opt[$widget_num][$col_opt];
    }

        $params[0]['before_widget'] = str_replace(
        'class="',
        'class="' . join(' ', $classes ) . ' ',
        $params[0]['before_widget']
    );

    if(isset($widget_opt[$widget_num]['wpkmkz_bs_row_start']) && $widget_opt[$widget_num]['wpkmkz_bs_row_start'] == '1')
      $params[0]['before_widget'] = '<div class="row">'.$params[0]['before_widget'];

    if(isset($widget_opt[$widget_num]['wpkmkz_bs_row_end']) && $widget_opt[$widget_num]['wpkmkz_bs_row_end'] == '1')
      $params[0]['after_widget'] = $params[0]['after_widget'].'</div><!-- /.row -->';

    return $params;
}
add_filter('dynamic_sidebar_params', 'add_bs_widgets_dynamic_sidebar_params');


function add_bs_widgets_head_style()
{
    echo '<style>.wpkmkz-bs-grid-widgets label{font-weight: bold;}.wpkmkz-bs-grid-widgets>h3 {background:#0074a2;color:#fff;border-top:3px solid #0074a2;text-align:center;border-radius:4px}.wpkmkz-bs-grid-widgets>h3>a{line-height:30px;color:#fff}.wpkmkz-bs-grid-widgets>h3>a span{line-height:30px;color:#fff}.wpkmkz-bs-grid-widgets-inner{display:none;}.wpkmkz-bs-grid-widgets-handle{text-decoration:none;}</style>';

    echo '<script type="text/javascript">
            jQuery(document).ready(function($){
              $("body").on("click", ".wpkmkz-bs-grid-widgets-handle", function(){
                $(this).parent().siblings(".wpkmkz-bs-grid-widgets-inner").slideToggle();
                return false;
              });
            });
        </script>';
  }
add_action('admin_head-widgets.php', 'add_bs_widgets_head_style');
add_action('customize_controls_print_scripts', 'add_bs_widgets_head_style', 9999);
