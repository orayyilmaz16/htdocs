<?php 
   
setcookie("username","sadikturan", time() + (60 * 60 * 24));
setcookie("auth","true", time() + (60 * 60 * 24));

  
if(isset($_COOKIE["username"])){
   echo $_COOKIE["username"]."<br>";
}else{
   echo "cookie yok"."<br>";
} 
  
if(isset($_COOKIE["auth"])){
   echo $_COOKIE["auth"]."<br>";
}else{
   echo "cookie yok"."<br>";
}



setcookie("username","admin", time() + (60 * 60 * 24));


setcookie("username","sadikturan", time() - (3600));


?>