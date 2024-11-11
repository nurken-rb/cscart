<div style="max-width: 800px; margin: 0 auto; font-family: Arial, sans-serif;">
    <h2 style="text-align: center; color: #333;">История изменения стоимости</h2>

    <div style="max-width: 800px; margin: 0 auto; font-family: Arial, sans-serif;">
        <h2 style="text-align: center; color: #333;">История изменения стоимости</h2>

        <!-- Форма поиска -->
        <form method="get" action="{fn_url()}" style="margin-bottom: 20px;">
            <input type="hidden" name="dispatch" value="products.price_history">
            <input type="hidden" name="product_id" value="{$product_id}">

            <label>Дата и время:
                <input type="text" name="search[date]" placeholder="YYYY-MM-DD HH:MM" value="{$search.date|default:''}" style="margin: 0 10px;">
            </label>

            <label>Тип цены:
                <input type="text" name="search[price_type]" placeholder="Тип цены" value="{$search.price_type|default:''}" style="margin: 0 10px;">
            </label>

            <label>Кто изменил:
                <input type="text" name="search[updated_by]" placeholder="ID или имя" value="{$search.updated_by|default:''}" style="margin: 0 10px;">
            </label>

            <label>Канал изменения:
                <input type="text" name="search[update_channel]" placeholder="Канал" value="{$search.update_channel|default:''}" style="margin: 0 10px;">
            </label>

            <button type="submit" style="padding: 5px 15px;">Поиск</button>
        </form>

        {if $logs}
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                <tr style="background-color: #f9f9f9;">
                    <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Дата и время</th>
                    <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Тип цены</th>
                    <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Стоимость до</th>
                    <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Стоимость после</th>
                    <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Кто изменил</th>
                    <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Канал изменения</th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$logs item=item}
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">{$item.updated_time}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{$item.price_type}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{$item.price_before}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{$item.price_after}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{$item.updated_by}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{$item.update_channel}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        {else}
            <p style="text-align: center; color: #666; margin-top: 20px;">История изменения стоимости для данного товара отсутствует.</p>
        {/if}
    </div>
</div>