<?php
$ret = array(
    'is_success' => false,
    'data' => null,
    'meg' => null
);
$Arr = $_GET['arr'];
if($Arr == 'Hello'){
    $ret['data'] = 'Good';
    $ret['meg']='The text is right';
}else{
    $ret['data'] = 'Bad';
    $ret['meg']='The text is not hello';
}

echo json_encode($ret);