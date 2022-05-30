$(document).ready(function () { 


  // paginazione risultati giornalieri per l'oroscopo
  $('#custom_table_page').DataTable();

    // disabilitazione div relativo al profilo
    document.getElementById("myDIV").style.display = "none";


    // carousel per i risultati settimanali
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



