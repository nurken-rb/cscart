<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

defined('BOOTSTRAP') or die('Access denied');

fn_register_hooks(
    'calculate_cart_taxes_pre',
    'update_cart_by_data_post',
    'get_cities_post',
    'update_city_post',
    'pickup_point_variable_init',
    'place_suborders_pre',
    'order_fulfillment_set_marketplace_shipping_to_product_group',
    'pre_update_order'
);
