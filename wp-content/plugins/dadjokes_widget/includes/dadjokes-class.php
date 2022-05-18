<?php

/**
 * Adds Dad_Jokes widget.
 */
class Dad_Jokes_Widget extends WP_Widget
{

  /**
   * Register widget with WordPress.
   */
  function __construct()
  {
    parent::__construct(
      'dadjokes_widget', // Base ID
      esc_html__('Dad Jokes', 'dj_domain'), // Name
      array('description' => esc_html__('Widget to display random dad joke', 'dj_domain'),) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget($args, $instance)
  {
    echo $args['before_widget']; // Whatever you want to display before widget (<div>, etc)

    if (!empty($instance['title'])) {
      echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
    }

    // Widget Content Output
    if ($instance['joke_type']) :
	  ?>
      <img id="joke" src="https://icanhazdadjoke.com/j/R7UfaahVfFd.png" alt="Dad Joke" />
      <button id="new-joke" onclick="fetch('https://icanhazdadjoke.com/', {headers: {Accept: 'application/json'}}).then(response => response.json()).then(data => {console.log(data);document.getElementById('joke').src = 'https://icanhazdadjoke.com/j/'+data.id+'.png';});">New Joke</button>
	<?php
    else :
	  ?>
		<p id="joke">What's blue and not very heavy? Light blue.</p>
		<button id="new-joke" onclick="fetch('https://icanhazdadjoke.com/', {headers: {Accept: 'application/json'}}).then(response => response.json()).then(data => {console.log(data);document.getElementById('joke').innerHTML = data.joke;});">New Joke</button>
    <?php
	  endif;

    echo $args['after_widget']; // Whatever you want to display after widget (</div>, etc)
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form($instance)
  {
?>

    <!-- Title -->
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title :</label>

      <input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>">
    </p>
    <!-- Check if you want Image joke -->
    <p>
      <label for="<?php echo $this->get_field_id('joke_type'); ?>">Image :</label>

      <input class="checkbox" type="checkbox" <?php checked($instance['joke_type'], 'on'); ?> id="<?php echo $this->get_field_id('joke_type'); ?>" name="<?php echo $this->get_field_name('joke_type'); ?>" />
    </p>

<?php
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update($new_instance, $old_instance)
  {
    $instance = array();

    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    $instance['joke_type'] = (!empty($new_instance['joke_type'])) ? strip_tags($new_instance['joke_type']) : '';

    return $instance;
  }
}
