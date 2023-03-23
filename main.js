$(document).ready(function(){
  $("#menu-btn-close").click(function(){
    $(this).parent().parent().hide();

  }); 
  $("#menu-btn-open").click(function(){
    $(this).next().show();

  }); 
  
})