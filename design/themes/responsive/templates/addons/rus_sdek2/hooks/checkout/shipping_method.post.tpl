{if $cart.chosen_shipping.$group_key|intval === $shipping.shipping_id|intval && $shipping.module === "sdek2" && $shipping.data.offices|count >= 1}

    {script src="js/addons/rus_sdek2/map.js"}

    {$shipping_id = $shipping.shipping_id}
    {$old_office_id = $select_office.$group_key.$shipping_id}
    {$sdek_map_container = "sdek_map_$shipping_id"}

    {$shipping.data.stores = $sdek_stores}
    {$store_count = $shipping.data.offices|count}

    <h2 class="litecheckout__step-title">{__("lite_checkout.select_pickup_item")}</h2>

    {hook name="checkout:rus_sdek_pickup_content"}
        {include file="addons/rus_sdek2/views/checkout/components/shippings/list_sdek.tpl"}
    {/hook}

{/if}
