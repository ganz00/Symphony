function rech() {
  var text =  $('#rech').val();
  var text2 = text.split(" ");

  var url = "";
  var date ="";
  var patt = new RegExp("\\d");
  for (var i = 0; i < text2.length; i++) {
      if(text2[i].length > 1){
      var val = text2[i];
      if(patt.test(val)){
              date = date+val+"-";
       }else{
        url = url+val+"-";
    }
   }
}
   var a = window.location.pathname;  
   var i  = a.indexOf("seach");
   a = a.substring(0,i);
   window.location = a+"seach/"+url.substring(0,url.length-1)+"+"+date.substring(0,date.length-1);  
}