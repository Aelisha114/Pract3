<?php
$url='http://localhost:3000.api/student';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$response =curl_exec($ch);

if(curl_errno($ch)){
    echo `error`.curl_error($ch);
}else{
    $data=json_decode($response,true);
echo '<pre>';
print_r($data);
echo'<pre>';
}
curl_close($ch);
?>



