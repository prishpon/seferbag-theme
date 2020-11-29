//search field
var searchButton = document.querySelector("#search-button"),
     searchForm = document.querySelector("#searchform"),
     close=document.querySelector("#close"),
     searchItem = document.querySelector("#search-item.nav-item.search"),
     x = window.matchMedia("(max-width: 724px)");
    

     searchButton.addEventListener('click',function(){

     if(searchForm.classList.contains("showform")){
        searchForm.classList.remove("showform");
        searchItem.style.height = "0rem";
     } else{
        searchForm.classList.add("showform");
        searchItem.style.height = "5rem";
     }
   
 });
//media


//close
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

//
