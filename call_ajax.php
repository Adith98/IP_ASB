<?php
include('db/dbcontroller.php');
$db_handle = new DBController();
$s1=$_REQUEST["n"];
$select_query="select * from tblproduct where name like '%".$s1."%'";
$sql=$db_handle->runQuery($select_query);
$count = $db_handle->numRows("SELECT * from tblproduct where name like '%".$s1."%'");
$s="";
if(!empty($count)){
foreach($sql as $key=>$value){
	
	$s=$s."
	<a class='navbar' href='product.php?code=".$sql[$key]["code"]."'>
        <img src='".$sql[$key]["image"]."' width='30' height='40' class='d-inline-block align-top'>
		<p>".$sql[$key]["name"]."</p>
    </a>
	<div class='dropdown-divider'></div>
	"	;
}}
else{
	$s=$s."Not found";
}
echo $s;

?>