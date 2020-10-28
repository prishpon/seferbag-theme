<i class="fa fa-search" aria-hidden="true" id ="search-button"></i></a>

<form id="header-search" class="hide" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search" />
	<button id="close" class="close"><i class="fa fa-close"></i></button>
</form>