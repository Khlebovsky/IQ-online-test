<?php

if (isset($_POST)) {
    $date = $_POST['date'];
    $sum = $_POST['sum'];
    $time = $_POST['time'];
    $add_money = $_POST['add_money'];
    $add_money_sum = $_POST['sum_add'];
    $percent = 0.1;

    if ($add_money == 'false') {
        $add_money_sum = 0;
    }

    $days_in_months = array(
        1 => 31,
        2 => 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    );

    $start_month = date('n', strtotime($date));
    $months_list = array();

    for ($j = 1; $j <= $time; $j++) {
        for ($i = $start_month; $i <= $start_month + 11; $i++) {
            if ($i % 12 == 0) {
                array_push($months_list, 12);
            } else {
                array_push($months_list, $i % 12);
            }
        }
    }

    $res_sum = $sum;

    foreach ($months_list as $month_num) {
        $days = $days_in_months[$month_num];
        $res_sum = ($res_sum + $add_money_sum) + ($res_sum + $add_money_sum) * $days * ($percent / 365);
    }

    header('Content-Type: application/json');
    echo json_encode(number_format(intval($res_sum), 0, "", " "));
}
