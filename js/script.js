//search field
var searchButton = document.querySelector("#search-button"),
     searchForm = document.querySelector("#header-search"),
     close=document.querySelector("#close");

     searchButton.addEventListener('click',function(){

     searchForm.classList.add("showform");
   
 });

 close.addEventListener('click',function(){
  searchForm.classList.remove("showform");
 });

 //dropdown menu
 (function($){
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(e) {
        e.preventDefault(); 
        e.stopPropagation(); 
  const par = $(this).parent();

        par.siblings().removeClass('open');
        par.toggleClass('open');
});
})(jQuery);