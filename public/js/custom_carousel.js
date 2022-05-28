$(document).ready(function () { 

    document.getElementById("myDIV").style.display = "none";

    $(".carousel-caption h5").addClass('animated slideInLeft');
    $(".carousel-caption p").addClass('animated slideInRight');
    
    

    
});

function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }


