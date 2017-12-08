/**
 * Created by luchen on 08/12/2017.
 */
$(document).ready(function(){
   $("#login-form").submit(function(e){
       e.preventDefault();
       var email=$("#email").val();
       var password=$("#password").val();
       $.post("/day4/index.php/home/login/check_user",
           {
               email:email,
               password:password
           },
           function(data,status){
               //alert("Data: " + data + "\nStatus: " + status);
               if(status == "success"){
                   var content = data.content;
                   if(data.status == 0){
                       $("#div1").html(content);
                   }
                   else{
                       $("#div1").html(content);

                   }
               }
           });
   });
});