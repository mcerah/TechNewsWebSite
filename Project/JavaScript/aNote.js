function emailOnBlurFunc() {
   
      var email = $("#emailTextbox").val();
  if (validateEmail(email)) {
       document.getElementById("emailTextbox").style.borderColor = "#50D050";
  }
  else
  {
      document.getElementById("emailTextbox").style.borderColor = "red";
  }
}
function validateEmail(email) {
    var x = email;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+1>=x.length) {
        return false;
    }
    return true;
}

function emailOnChangeFunc() {
   
   var email = $("#emailTextbox").val();
 
    if (validateEmail(email)) {
       document.getElementById("emailTextbox").style.borderColor = "#50D050";
  }
  else
  {
      document.getElementById("emailTextbox").style.borderColor = "blue";
  }
}

function emailOnFocusFunc() {
   
      var email = $("#emailTextbox").val();
  if (validateEmail(email)) {
       document.getElementById("emailTextbox").style.borderColor = "#50D050";
  }
  else
  {
      document.getElementById("emailTextbox").style.borderColor = "blue";
  }
}



function textOnBlurFunc(x) {
   
      var text = $("#".concat(x)).val();
  if (text=="") {
        document.getElementById(x).style.borderColor = "red";
     
  }
  else
  {
        document.getElementById(x).style.borderColor = "#50D050";
  }
}

function textOnChangeFunc(x) {
   
   var text = $("#".concat(x)).val();
 
    if (text=="") {
        document.getElementById(x).style.borderColor = "blue";
     
  }
  else
  {
        document.getElementById(x).style.borderColor = "#50D050";
        try{setCustomValidity('')}catch(e){}
  }
}

function textOnFocusFunc(x) {
   
   var text = $("#".concat(x)).val();
      
  if (text=="") {
        document.getElementById(x).style.borderColor = "red";
     
  }
  else
  {
        document.getElementById(x).style.borderColor = "#50D050";
  }
}