var button = document.getElementById('submit');
button.onclick = handle_submit;

function validate(name, email, feedback) {
   var isCorrect = true; 
   if (name.length==0){
      isCorrect = false;
      document.getElementById('namef').innerHTML="*данное поле обязательно для заполнения";
   }
   else
   {
     var reg=/[А-Я]{1}[а-я]+/;
   
      if(!reg.test(name))
      {
         isCorrect = false;
         document.getElementById('namef').innerHTML="*name указано неверно";
      }
      else
         document.getElementById('namef').innerHTML="";
    }

   if (email.length==0){
      isCorrect = false;
      document.getElementById('emailf').innerHTML="*данное поле обязательно для заполнения";
   }
   else
   {
     var reg=/[A-z]+/;
      
      if(!reg.test(email))
      {
         isCorrect = false;
	      document.getElementById('emailf').innerHTML="*email введен неверно";
      }
      else
      {
	      var at=email.indexOf('@');
	      var dot=email.indexOf('.');
	      if (at<1 || dot <1){
	         isCorrect = false;
            document.getElementById('emailf').innerHTML="*email введен неверно";
	      }
	      else
	        document.getElementById('emailf').innerHTML="";
      }
    }
    
   if (feedback.length==0){
      isCorrect = false;
      document.getElementById('feedbackf').innerHTML="*данное поле обязательно для заполнения";
   }
   else
      document.getElementById('feedbackf').innerHTML = "";

   return isCorrect;
}

function handle_submit() {
   var name = document.getElementById('name').value;
   var email = document.getElementById('email').value;
   var feedback = document.getElementById('feedback').value;
   
   if (validate(name, email, feedback) == true) {
      var xmlhttp = new XMLHttpRequest();
      var body = "name=" + name + "&email=" + email + "&feedback=" + feedback;
      xmlhttp.onload = () => alert("Отзыв был успешно отправлен");
      xmlhttp.onerror = () => alert("При отправке отзыва возникла ошибка");
      xmlhttp.open("GET", "add_feedback.php" + "?" + body);
      xmlhttp.send();
   }
   else {
      alert("Проверьте корректность введенных данных");
   }
}
