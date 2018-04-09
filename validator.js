function validate(){
   var name=document.getElementById('name').value;
   var email=document.getElementById('email').value;
   var access=document.getElementById('access').value;
   
   if (name.length==0){
      document.getElementById('namef').innerHTML="*данное поле обязательно для заполнения";
   }
   else
   {
     var reg=/[А-Я]{1}[а-я]+/;
   
      if(!reg.test(name))
      {
	    document.getElementById('namef').innerHTML="*name указано неверно";
      }
      else
	    document.getElementById('namef').innerHTML="";
    }

   if (email.length==0){
      document.getElementById('emailf').innerHTML="*данное поле обязательно для заполнения";
   }
   else
   {
     var reg=/[A-z]+/;
      
      if(!reg.test(email))
      {
	      document.getElementById('emailf').innerHTML="*email введен неверно";
      }
      else
      {
	      at=email.indexOf('@');
	      dot=email.indexOf('.');
	      if (at<1 || dot <1){
	          document.getElementById('emailf').innerHTML="*email введен неверно";
	      }
	      else
	        document.getElementById('emailf').innerHTML="";
      }
    }
    
   if (access.length==0){
      document.getElementById('accessf').innerHTML="*данное поле обязательно для заполнения";
   }
   else
      document.getElementById('accessf').innerHTML = "";

   return false;
}
function init() {
    var theForm = document.getElementById('form');
    theForm.onsubmit = validate;
} 
window.onload = init;

