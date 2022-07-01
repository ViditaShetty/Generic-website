<?php
$conn=mysqli_connect('localhost:3307','root');
if($conn){
    echo"Successful connection";
}
else{echo"connection failed";}
//create,use,select
//aldready created
mysqli_select_db($conn,'webdesigndata');

//access var using $_POST['NameatForm']
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["mobile"];
$comment=$_POST["comment"];
echo "'$name','$email','$phone','$comment'";
//inserting inot table
$sqll="insert into userinfodata (user,email,mobile,comment) values ('$name','$email','$phone','$comment')";
mysqli_query($conn,$sqll);
//redirect to same page
header('location:index.php')

?>