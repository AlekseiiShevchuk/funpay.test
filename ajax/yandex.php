<?php
if ($_POST['str']) {
    $str = $_POST['str'];
    preg_match('/\b\d{4}\b/', $str, $confirmCodeArr);
    preg_match('/\b\d+[,.]*\d{0,2}(?=[рRr])/', $str, $sumArr);
    preg_match('/\b\d{15}\b/', $str, $keeperArr);

    $response['confirmCode'] = $confirmCodeArr[0];
    $response['sum'] = $sumArr[0];
    $response['keeper'] = $keeperArr[0];
    echo json_encode($response);
}