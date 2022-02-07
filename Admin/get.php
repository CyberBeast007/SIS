<?php
$pincode=$_POST['pincode'];
$data=file_get_contents('http://postalpincode.in/api/pincode/'.$pincode);
$data=json_decode($data);
if(isset($data->PostOffice['0'])){
	$arr['StudentCity']=$data->PostOffice['0']->Taluk;
	$arr['StudentState']=$data->PostOffice['0']->State;
	$arr['StudentCountry']=$data->PostOffice['0']->Country;
	$arr['StudentDistrict']=$data->PostOffice['0']->District;	
	echo json_encode($arr);
}else{
	echo 'no';
}
?>