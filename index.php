<?php 

function trigger_ifttt($url, $json, $headers) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $output = curl_exec($ch);
    echo $output;
    curl_close($ch);
}

if (isset($_GET['portfolio']) && isset($_GET['ifttt'])) {
    $portfolio_id = $_GET['portfolio'];
    $ifttt_key = $_GET['ifttt'];

    $portfolio = file_get_contents('https://www.shareville.no/api/v1/portfolios/'.$portfolio_id.'/returns/today');

    $percent = preg_replace('/[^0-9 .,-]/', '', $portfolio);

    if ( $percent >= 0 ) {
        $color = 'green';
    } else {
        $color = 'red';
    }

    $url = 'https://maker.ifttt.com/trigger/stock_light_'.$color.'/with/key/'.$ifttt_key;
    $json = json_encode($_POST);
    $headers = array('Accept: application/json', 'Content-Type: application/json');
    trigger_ifttt($url, $json, $headers);

} else {
    echo 'Missing parameters, read README.md';

}