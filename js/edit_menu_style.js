$(document).ready(function(){
    var currentPage = location.pathname.substring(location.pathname.lastIndexOf("/") + 1) ;
    var borderStyle = "1px solid #D4D1D1"
     if (currentPage == "index.php")
     {
          $("#1").css("border", borderStyle);
     }
     else if (currentPage == "about.php")
     {
          $("#2").css("border", borderStyle);
     }
     //resume page, figure this out later after adding resume filler page
     /*if (currentPage == "index.php")
     {
          $("#li3").css("border", "1px solid black");
     }*/
     else if (currentPage == "contact.php")
     {
          $("#4").css("border", borderStyle);
     }
});