<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode === 'update') {

        // Логируем если цена изменилась
        if (!empty($_REQUEST['product_data']['product'])) {
            $product_data = $_REQUEST['product_data'];
            $a = get_product_price($_REQUEST['product_id']);
            $price_before = get_product_price($_REQUEST['product_id']);
            fn_print_r($product_data['price'] * 100);
            fn_print_r($price_before * 100);
            if((int)($product_data['price'] * 100) !== (int)($price_before * 100)) {
                log_price_change($_REQUEST['product_id'], $price_before, $product_data);
            }
        }

        $search = isset($_REQUEST['search']) ? $_REQUEST['search'] : [];
        $conditions = ['product_id' => $_REQUEST['product_id']];

        if (!empty($search['date'])) {
            $conditions[] = db_quote("DATE_FORMAT(FROM_UNIXTIME(updated_time), '%Y-%m-%d %H:%i') LIKE ?l", "%" . trim($search['date']) . "%");
        }
        if (!empty($search['price_type'])) {
            $conditions[] = db_quote("price_type LIKE ?l", "%" . trim($search['price_type']) . "%");
        }
        if (!empty($search['updated_by'])) {
            $conditions[] = db_quote("updated_by LIKE ?l", "%" . trim($search['updated_by']) . "%");
        }
        if (!empty($search['update_channel'])) {
            $conditions[] = db_quote("update_channel LIKE ?l", "%" . trim($search['update_channel']) . "%");
        }

        $where = implode(' AND ', $conditions);

        $logs = get_price_history($_REQUEST['product_id']);

        Tygh::$app['view']->assign('logs', $logs);
        Tygh::$app['view']->assign('search', $search);
    }
}