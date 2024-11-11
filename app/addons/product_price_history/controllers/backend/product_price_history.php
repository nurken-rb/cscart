<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($mode == 'log') {

        $logs = get_all_price_history();

        Tygh::$app['view']->assign('logs', $logs);
    }
}
