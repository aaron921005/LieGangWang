function $(id){return document.getElementById(id);}
 window.onload = function(){
     document.onclick = function(e){
  $("destoon_word").style.display = "none";
 }
 
     $("destoon_kw").onclick = function(e){
   if($("destoon_word").style.display == "none"){
    $("destoon_word").style.display = "block";
   }else{
     $("destoon_word").style.display = "none";
   }
  
  stopFunc(e);
 }
 
    $("destoon_word").onclick = function(e){
       stopFunc(e);
   }
 }