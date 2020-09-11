<?php 

if (isset($_GET['portfolio']) && isset($_GET['ifttt'])) {
    $portfolio_id = $_GET['portfolio'];
    $ifttt_key = $_GET['portfolio'];

    $portfolio = file_get_contents('https://www.shareville.no/api/v1/portfolios/'.$portfolio_id.'/returns/today');

    $percent = preg_replace('/[^0-9 .,-]/', '', $portfolio);

    if ( $percent >= 0 ) {
        $color = 'green';
    } else {
        $color = 'red';
    }

    file_get_contents('https://maker.ifttt.com/trigger/stock_light_'.$color.'/with/key/'.$ifttt_key);

    echo $color . ' light triggerd';

} else {

    echo 'Missing parameters, read README.md';

}