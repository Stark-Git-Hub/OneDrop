function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

 var a;
function showhide() {
{

 if(a==1)
{ document.getElementById("logo").classList="fa fa-eye-slash";
  return a=0;
}
else
{document.getElementById("logo").classList="fa fa-eye";
 return a=1;
}
}
}