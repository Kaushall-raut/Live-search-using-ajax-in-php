<?php 

$conn=mysqli_connect("localhost","root","","ajaxlivesearch");

if($conn){

// $cmd="insert into `live` values('1','kaushal')";

$cmd='select * from `live` where `name` like "%'.$_POST['query'].'%" ';
// echo $_GET['search'] ;
$res=mysqli_query($conn,$cmd);
if(mysqli_num_rows($res) >0){
    while($data=mysqli_fetch_array($res)){
        echo "<div>". $data['name'] ."</div>";
    }

}else{
    echo  "<p>data not found</p>";
}

}else{
echo "failed to connect";
}

?>