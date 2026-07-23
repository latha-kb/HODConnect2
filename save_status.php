<?php
date_default_timezone_set('Asia/Kolkata');
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $status=$_POST["status"];
    $remarks=$_POST["remarks"];
    $expected_time=$_POST["expected_time"];

    $data=array(

        "status"=>$status,
        "remarks"=>$remarks,
        "expected_time"=>$expected_time,
        "updated_at"=>date("d-M-Y h:i A")

    );

    file_put_contents("data/status.json",json_encode($data,JSON_PRETTY_PRINT));

    echo "success";

}

?>