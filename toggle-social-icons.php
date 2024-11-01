<?php

/**
* Plugin Name: Toggle Social Icon
* Description: Toggle Social Icon use for add social links on a fixed position with some hover effect.
* Version: 1.0.1 
* Author: Satyam Sharma
* Author URI: https://sites.google.com/site/satyainfo0414/
*/


$tsi = "Toggle Social Icon"; //Use as prefix
$tsi_plugin_url = plugin_dir_url( __FILE__ );

// add custom post content
function tsi_social_media_icon_content($content) {
	
		$content .= do_shortcode('[tsi_social_media]');
		
		
	return $content;
}

function tsi_social_Media(){
	add_menu_page('Toggle Social Icon','Toggle Social Icon','manage_options','social_media','tsi_social_media_backend',
        plugin_dir_url( __FILE__ ).'img/logo2.png',
        6
    );
}
function tsi_social_media_backend(){
	global $tsi_plugin_url;
	?>
	<div class="wrap">
	
		<div class="toggle_social_color">
			<h3>Colors Selection</h3>
			<form method="post" action="options.php">
			<?php settings_fields( 'social_media_color' ); ?>
			<div class="fields_picker">
			<?php do_settings_sections( 'social_media_color' ); ?>
			<h4>Background_color</h4><input type="text" name="toggle_background_color" value="<?php echo esc_attr( get_option('toggle_background_color') ); ?>" id="toggle_background_color" data-default-color="#333">
			</div>
			<div class="fields_picker">
			<h4>Color</h4><input type="text" name="toggle_text_color" value="<?php echo esc_attr( get_option('toggle_text_color') ); ?>" id="toggle_text_color" data-default-color="#ffffff">
			</div>
			<div style="clear:both; margin-left:4%;padding-top:2%;"><?php submit_button(); ?></div>
			</form>
			
		</div>
	
	
	</div>
	<div class="wrap">
	<form method="post" action="options.php">
	<?php settings_fields( 'social_media_link' ); ?>
	<?php do_settings_sections( 'social_media_link' ); ?>
	<div class="social_media_list">
            <div class="social_media_header">
                <h3>Toggle Social Media</h3>
            </div>
            <div class="media_colomn">
                <table>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/fb.png" width="30px" alt="Facebook"></td>
                        <td><input type="text" placeholder="Facebook" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/twitter.png" width="30px" alt="Twitter"></td>
                        <td><input type="text" placeholder="Twitter" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/linkedin.png" width="30px" alt="LinkedIn"></td>
                        <td><input type="text" placeholder="LinkedIn" name="linkedin" value="<?php echo esc_attr( get_option('linkedin') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/google_plus.png" width="30px" alt="Google+"></td>
                        <td><input type="text" placeholder="Google+" name="google_plus" value="<?php echo esc_attr( get_option('google_plus') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/YouTube-icon.png" width="30px" alt="YouTube"></td>
                        <td><input type="text" placeholder="YouTube" name="youtube" value="<?php echo esc_attr( get_option('youtube') ); ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="media_colomn">
                <table>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/pinterest-icon.png" width="30px" alt="Pinterest"></td>
                        <td><input type="text" placeholder="Pinterest" name="pinterest" value="<?php echo esc_attr( get_option('pinterest') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/instagram.png" width="30px" alt="Instagram"></td>
                        <td><input type="text" placeholder="Instagram" name="instagram" value="<?php echo esc_attr( get_option('instagram') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/Tumblr_icon.png" width="30px" alt="Tumblr"></td>
                        <td><input type="text" placeholder="Tumblr" name="tumblr" value="<?php echo esc_attr( get_option('tumblr') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/flickr.png" width="30px" alt="Flickr"></td>
                        <td><input type="text" placeholder="Flickr" name="flickr" value="<?php echo esc_attr( get_option('flickr') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/reddit.png" width="30px" alt="Reddit"></td>
                        <td><input type="text" placeholder="Reddit" name="reddit" value="<?php echo esc_attr( get_option('reddit') ); ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="media_colomn">
                <table>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/snapchat.png" width="30px" alt="Snapchat"></td>
                        <td><input type="text" placeholder="Snapchat" name="snapchat" value="<?php echo esc_attr( get_option('snapchat') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/vm1.png" width="30px" alt="WhatsApp"></td>
                        <td><input type="text" placeholder="Vimeo" name="vimeo" value="<?php echo esc_attr( get_option('vimeo') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/quora.png" width="30px" alt="Quora"></td>
                        <td><input type="text" placeholder="Quora" name="quora" value="<?php echo esc_attr( get_option('quora') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/Vine.png" width="30px" alt="Vine"></td>
                        <td><input type="text" placeholder="Vine" name="vine" value="<?php echo esc_attr( get_option('vine') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/periscope.png" width="30px" alt="Periscope"></td>
                        <td><input type="text" placeholder="Periscope" name="periscope" value="<?php echo esc_attr( get_option('periscope') ); ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="media_colomn">
                <table>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/bizsugar.png" width="30px" alt="BizSugar"></td>
                        <td><input type="text" placeholder="BizSugar" name="bizsugar" value="<?php echo esc_attr( get_option('bizsugar') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/stumbleupon.png" width="30px" alt="StumbleUpon"></td>
                        <td><input type="text" placeholder="StumbleUpon" name="stumbleupon" value="<?php echo esc_attr( get_option('stumbleupon') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/deliciois.png" width="30px" alt="Delicious"></td>
                        <td><input type="text" placeholder="Delicious" name="delicious" value="<?php echo esc_attr( get_option('delicious') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/digg-icon.png" width="30px" alt="Digg"></td>
                        <td><input type="text" placeholder="Digg" name="digg" value="<?php echo esc_attr( get_option('digg') ); ?>"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $tsi_plugin_url;?>/img/viber2.png" width="30px" alt="Viber"></td>
                        <td><input type="text" placeholder="Viber" name="viber" value="<?php echo esc_attr( get_option('viber') ); ?>"></td>
                    </tr>
                </table>
            </div>
           <div class="media_submit_tcs" style="text-align:center;"><?php submit_button(); ?></div>

        </div>
	</form>
	</div>
	<style>
		.media_colomn {
    width: 46%;
    float: left;
    margin: 12px 2%;
}
.media_colomn tr td:nth-child(even) {
    width: 95%;
    padding: 0 2%;
}
.media_colomn input[type="text"] {
    width: 96%;
    border: none;
    padding: 5px 15px;
	background-color:#eee;
}
.social_media_list {
    background-color: #fff;
    width: 88%;
    margin: 0 5%;
}
.social_media_header h3 {
    margin: 0;
    text-align: center;
    background-color: #d94865;
    color: #fff;
    font-family: sans-serif;
    padding: 5px 0px;
}
.media_submit_tcs input#submit {
    margin: 21px 45%;
}
.toggle_social_color {
    width: 88%;
    margin: 0 5%;
    background-color: #fff;
}
.toggle_social_color h3 {
    background-color: #d94865;
    color: #fff;
    padding: 6px 0;
    text-align: center;
}
.fields_picker {
    width: 43%;
    float: left;
    margin: 0% 3%;
}

	</style>
	<?php
}
add_action( 'wp_head', 'tsi_style_css' );
function tsi_style_css(){
	?>
	<style>
	.sticky li{
	background-color: <?php echo esc_attr( get_option('toggle_background_color') ); ?> !important;
	color: <?php echo esc_attr( get_option('toggle_text_color') ); ?> !important;
}
	</style>
	<?php
}

add_action( 'admin_menu', 'tsi_social_Media' );

function tsi_register_mysettings() { // whitelist options  
  register_setting( 'social_media_link', 'facebook' );  
  register_setting( 'social_media_link', 'twitter' );  
  register_setting( 'social_media_link', 'linkedin' );  
  register_setting( 'social_media_link', 'google_plus' );  
  register_setting( 'social_media_link', 'youtube' );  
  register_setting( 'social_media_link', 'pinterest' );  
  register_setting( 'social_media_link', 'instagram' );  
  register_setting( 'social_media_link', 'tumblr' );  
  register_setting( 'social_media_link', 'flickr' );  
  register_setting( 'social_media_link', 'reddit' );  
  register_setting( 'social_media_link', 'snapchat' );  
  register_setting( 'social_media_link', 'vimeo' );  
  register_setting( 'social_media_link', 'quora' );  
  register_setting( 'social_media_link', 'periscope' );  
  register_setting( 'social_media_link', 'bizsugar' );  
  register_setting( 'social_media_link', 'stumbleupon' );  
  register_setting( 'social_media_link', 'delicious' );  
  register_setting( 'social_media_link', 'digg' );  
  register_setting( 'social_media_link', 'viber' );  
  register_setting( 'social_media_link', 'vine' );  
}


add_action( 'admin_menu', 'social_icon_color' );
function social_icon_color(){
	register_setting( 'social_media_color', 'toggle_background_color' );  
	register_setting( 'social_media_color', 'toggle_text_color' );  
}
add_action( 'admin_init', 'tsi_register_mysettings' );

add_filter('the_content', 'tsi_social_media_icon_content');
function tsi_social_media_content(){
	global $tsi_plugin_url;
	$facebook = get_option('facebook');
	$twitter = get_option('twitter');
	$linkedin = get_option('linkedin');
	$google_plus = get_option('google_plus');
	$youtube = get_option('youtube');
	$pinterest = get_option('pinterest');
	$instagram = get_option('instagram');
	$tumblr = get_option('tumblr');
	$flickr = get_option('flickr');
	$reddit = get_option('reddit');
	$snapchat = get_option('snapchat');
	$vimeo = get_option('vimeo');
	$quora = get_option('quora');
	$periscope = get_option('periscope');
	$bizsugar = get_option('bizsugar');
	$stumbleupon = get_option('stumbleupon');
	$delicious = get_option('delicious');
	$digg = get_option('digg');
	$viber = get_option('viber');
	$vine = get_option('vine');
	?>
	<div class="sticky-container">
			<ul class="sticky">
<?php if($facebook != ''){?>
			<a href="<?php echo $facebook; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/fb1.png" />
			<p>Facebook</p>
			</li></a>
<?php } ?>
<?php if($twitter != ''){?>
			<a href="<?php echo $twitter; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/twitter.png" />
			<p>Twitter</p>
			</li></a>
<?php } ?>
<?php if($linkedin != ''){?>
			<a href="<?php echo $linkedin; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/linkedin.png" />
			<p>LinkedIn</p>
			</li></a>
<?php } ?>
<?php if($google_plus != ''){?>
			<a href="<?php echo $google_plus; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/google_plus.png" />
			<p>Google+</p>
			</li></a>
<?php } ?>
<?php if($youtube != ''){?>
			<a href="<?php echo $youtube; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/YouTube-icon.png" />
			<p>YouTube</p>
			</li></a>
<?php } ?>
<?php if($pinterest != ''){?>
			<a href="<?php echo $pinterest; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/pinterest-icon.png" />
			<p>Pinterest</p>
			</li></a>
<?php } ?>
<?php if($instagram != ''){?>
			<a href="<?php echo $instagram; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/instagram.png" />
			<p>Instagram</p>
			</li></a>
<?php } ?>
<?php if($tumblr != ''){?>
			<a href="<?php echo $tumblr; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/Tumblr_icon.png" />
			<p>Tumblr</p>
			</li></a>
<?php } ?>
<?php if($flickr != ''){?>
			<a href="<?php echo $flickr; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/flickr.png" />
			<p>Flickr</p>
			</li></a>
<?php } ?>
<?php if($reddit != ''){?>
			<a href="<?php echo $reddit; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/reddit.png" />
			<p>Reddit</p>
			</li></a>
<?php } ?>
<?php if($snapchat != ''){?>
			<a href="<?php echo $snapchat; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/snapchat.png" />
			<p>Snapchat</p>
			</li></a>
<?php } ?>
<?php if($vimeo != ''){?>
			<a href="<?php echo $vimeo; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/vm1.png" />
			<p>Vimeo</p>
			</li></a>
<?php } ?>
<?php if($quora != ''){?>
			<a href="<?php echo $quora; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/quora.png" />
			<p>Quora</p>
			</li></a>
<?php } ?>
<?php if($vine != ''){?>
			<a href="<?php echo $vine; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/Vine.png" />
			<p>Vine</p>
			</li></a>
<?php } ?>
<?php if($periscope != ''){?>
			<a href="<?php echo $periscope; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/periscope.png" />
			<p>Periscope</p>
			</li></a>
<?php } ?>
<?php if($bizsugar != ''){?>
			<a href="<?php echo $bizsugar; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/bizsugar.png" />
			<p>BizSugar</p>
			</li></a>
<?php } ?>
<?php if($stumbleupon != ''){?>
			<a href="<?php echo $stumbleupon; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/stumbleupon.png" />
			<p>StumbleUpon</p>
			</li></a>
<?php } ?>
<?php if($delicious != ''){?>
			<a href="<?php echo $delicious; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/deliciois.png" />
			<p>Delicious</p>
			</li></a>
<?php } ?>
<?php if($digg != ''){?>
			<a href="<?php echo $digg; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/digg-icon.png" />
			<p>Digg</p>
			</li></a>
<?php } ?>
<?php if($viber != ''){?>
			<a href="<?php echo $viber; ?>"><li> <img width="32" height="32" title="" alt="" src="<?php echo $tsi_plugin_url;?>/img/viber2.png" />
			<p>Viber</p>
			</li></a>
<?php } ?>

			</ul>
			</div>

	
	<?php
}
add_shortcode('tsi_social_media','tsi_social_media_content');



function tsi_theme_scripts() {
	global $tsi_plugin_url; 
  wp_enqueue_style( 'slider', $tsi_plugin_url. '/assest/style.css', array(), '1.1', 'all');
 
}
add_action( 'wp_enqueue_scripts', 'tsi_theme_scripts' );
function tsi_backend_theme_scripts() {
  wp_enqueue_style( 'wp-color-picker');
 
}
add_action( 'admin_enqueue_scripts', 'tsi_backend_theme_scripts' );


add_action( 'admin_footer', 'tsi_color_picker_script' ); // Write our JS below here

function tsi_color_picker_script() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {

		 $('#toggle_background_color').iris();
		 $('#toggle_text_color').iris();
	});
	</script> <?php
}
