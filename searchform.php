<i class="fa fa-search" aria-hidden="true" id ="search-button"><div class="mobile-search">SEARCH</div></i>

<div  class= "hide" id="searchform">

<form role="search" method="get" class="search-form dark-overlay align-content-center align-items-center" id="header-search" action="<?php echo esc_url( home_url( '/' ) ) ?>">
<div class="input-group form-dark-overlay">
<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
  <button type="submit" class="search-submit search-button"><i class="fa fa-search form-field-icon"></i></button>
  </label>
 
</div>
</form>
<div class="close-btn" id="close">
<i class="fa fa-times" aria-hidden="true"></i>
</div>
</div>
</form>
</div>