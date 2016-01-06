$(document).ready(function(){
    var currentPage = location.pathname.substring(location.pathname.lastIndexOf("/") + 1) ;
     
     if (currentPage == "index.php")
     {
          $("#1").css("border", "1px solid black");
     }
     else if (currentPage == "about.php")
     {
          $("#2").css("border", "1px solid black");
     }
     //resume page, figure this out later after adding resume filler page
     /*if (currentPage == "index.php")
     {
          $("#li3").css("border", "1px solid black");
     }*/
     else if (currentPage == "contact.php")
     {
          $("#4").css("border", "1px solid black");
     }
});