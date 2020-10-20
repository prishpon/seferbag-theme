<footer class="container-fluid"> 
     <div class="container">
       <div class="row ">
         <div class="col-md-11 col-sm-6 copyright"><h3>2020 Safebag All rights reserved</h3></div>
         <div class="col-md-1  col-sm-6 d-flex align-items-center"><a href=""><i class="fa fa-chevron-up" aria-hidden="true"></i></a></div>
       </div>
      </div>
  </footer>
  <script>
       var bootSubmenu = document.querySelectorAll(".dropdown-menu.depth_0"),
           bootSubSubmenu = document.querySelectorAll(".dropdown-menu.sub-menu.depth_1");
       
       bootSubmenu.addEventListener('click',function(){
                bootSubSubmenu.classList.toggle("show");
   
});

  </script>
  <?php wp_footer(); ?>
</body>
</html>