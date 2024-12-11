<?php
class wordpresscdx_About_Widget extends WP_Widget {

	function __construct() {
		parent::__construct('wordpresscdx_about_widget', esc_html__('About Widget', 'wordpresscdx'), array('description'=> esc_html('Our First Widget','wordpresscdx') ) );
	}

	public function widget($args, $instance) {
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']);
		$text = apply_filters('the_title', empty($instance['text']);

		echo $before_widget;

		if($text){
			echo $before_title . $text . $after_title;
		}
		if($text){
			echo wp_kses($text);
		}
		echo $after_widget;
	}

	public function form($instance){
		if(isset($instance['title'])){
			$title = $instance['title'];
	} else {
		$title = '';

		if(isset($instance['text'])){
			$title = $instance['text'];
	} else {
		$title = '';
	}

?>
		<p>
			<label for="<?php  echo $this->get_field_id('title'); ?>" >
				<?php esc_html_e('Title','wordpresscdx'); ?>
				</label>
				<input class="widefatt" id="?php  echo $this->get_field_id('title'); ?>" name= "<?php  echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title) ?>" type="text" />
		</p>

<?php 

	public function update($new_instance, $old_instance){

	}
}
