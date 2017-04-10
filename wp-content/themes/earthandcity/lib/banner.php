<?php
class banner {

  function __construct() {
    $this->image = get_post_meta(get_the_ID(),'banner_meta_banner_image',true);
    
    if ($this->image == "") {
      $this->image = get_bloginfo("stylesheet_directory").'/assets/images/RED photos/banner-homepage.jpg';
    }

    $this->title = get_field("banner_title");

    $this->content = get_field("banner_content");
    
    self::output();
  }

  public function banner_start() {
    $return .= '
    <style>
    	.banner-wrap {background: no-repeat url("'.$this->image.'") center center  / 100% }
	  </style>
    <div class="banner-wrap">
      <div class="banner-content">
        '.self::get_title().'
      </div>
      <div class="banner-buttons">'.self::get_buttons().'</div>
    </div>';
    return $return;
  }

  public function get_title() {
    if (is_tax('venue')) {
      $taxonomies = get_queried_object();
      $this->title = $taxonomies->name;
    }elseif( is_archive()) {
      $this->title = get_post_type();
      
    }elseif($this->title == "") {
      $this->title = get_the_title();
    }
    $return = '<h1 class="text-white text-bold text-upper">'.$this->title.'</h1>';
    if ($this->content != "") {
    	$return .= '<p class="text-white">'.$this->content.'</p>';
    }
    return $return;
  }

  public function get_buttons () {

  	for ($i = 1; $i < 3; $i++ ) {
  		$button_title = get_field('button_'.$i.'_title');
  		if ($button_title != "") {
  			$return .= '<div class="button"> <a href="'.get_field('button_'.$i.'_link').'">'.$button_title.'</a></div>';	
  		}
  	}
  	return $return;
  }
  
  public function output () {
    echo self::banner_start();
  }
}