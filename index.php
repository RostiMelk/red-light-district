<?php 

if (isset($_GET['portfolio'])) {
    $portfolio_id = $_GET['portfolio'];

    $portfolio = file_get_contents('https://www.shareville.no/api/v1/portfolios/'.$portfolio_id.'/returns/today');

    $percent = preg_replace('/[^0-9 .,-]/', '', $portfolio);

    if ( $percent >= 0 ) {
        $color = 'green';
    } else {
        $color = 'red';
    }

    echo $color;

} else {

    echo 'Add portfolio in portfolio parameter';

}