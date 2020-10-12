<?php

$goback="<a href='smallproject.php'> Go Back</a>";

if(isset($_POST['submit'])){

$mark = $_POST['mark'];

if($_SERVER['REQUEST_METHOD'] == "POST"){

if($mark < 0){
    echo "Null";
}elseif($mark <= 39){
echo "Failed" . "<br/><br/>";
echo $goback;
}else{
    echo "System Error" . "<br/>"."<br/>";
    echo $goback;
} // else closing
} // sever closing
} //isset closing
?>