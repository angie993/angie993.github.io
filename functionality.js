//PRELOADER
$(document).ready(function($) {
    // hide preloader when everthing in the document load
    $('#preloader').css('display', 'none');
 });
//SIDE MENU
function openNav() {
            document.getElementById("mySidenav").style.width = "270px";
            document.getElementById("portfolio").style.marginLeft = "250px";
}
function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("portfolio").style.marginLeft= "0";
}
//CONTACT JQUERY VALIDACIJA
$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});

$("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
})


