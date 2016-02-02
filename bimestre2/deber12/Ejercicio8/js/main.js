$(document).ready(function(){

$("#txt1").focus(function(){
 
  $("#txt1").css("background-color", "yellow");

});

$("#txt1").blur(function(){
 
  $("#txt1").css("background-color", "blue");

});

$("#txt2").focus(function(){
 
  $("#txt2").css("background-color", "aqua");

});

$("#txt2").blur(function(){
 
  $("#txt2").css("background-color", "pink");

});



});