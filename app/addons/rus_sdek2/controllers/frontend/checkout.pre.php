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

/** @var array $params */
$params = $_REQUEST;

if ($mode === 'update_steps') {
    if (!empty($params['select_office'])) {
        foreach ($params['select_office'] as $g_id => $select) {
            foreach ($select as $s_id => $o_id) {
                Tygh::$app['session']['cart']['select_office'][$g_id][$s_id] = $o_id;
            }
        }
    }
}

if ($mode === 'checkout') {
    if (!empty($params['select_office'])) {
        foreach ($params['select_office'] as $g_id => $select) {
            foreach ($select as $s_id => $o_id) {
                Tygh::$app['session']['cart']['select_office'][$g_id][$s_id] = $o_id;
            }
        }
    }
}
