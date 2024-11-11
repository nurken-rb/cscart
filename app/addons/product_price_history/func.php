<?php

/**
 * Логирует изменение цены товара
 *
 * @param $product_id
 * @param $price_type
 * @param $price_before
 * @param $price_after
 * @param $updated_by
 * @param $update_channel
 * @return bool
 */
function log_price_change($product_id, $price_before, $product_data)
{
    db_query("INSERT INTO ?:product_price_history ?e", [
        'product_id'      => $product_id,
        'price_type'      => '',
        'price_before'    => $price_before,
        'price_after'     => $product_data['price'],
        'updated_by'      => '',
        'update_channel'  => '',
    ]);

    return true;
}

/**
 * @return array
 */
function get_all_price_history()
{
    return db_get_array("SELECT * FROM ?:product_price_history ORDER BY updated_time DESC");
}

/**
 * @param $product_id
 * @return array
 */
function get_price_history($product_id)
{
    return db_get_array("SELECT * FROM ?:product_price_history WHERE product_id = ?i", $product_id);
}

/**
 * @param $product_id
 * @return string
 */
function get_product_price($product_id)
{
    return db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $product_id);
}