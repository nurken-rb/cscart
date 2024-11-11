<div style="max-width: 800px; margin: 0 auto; font-family: Arial, sans-serif;">
    <h1 style="text-align: center; color: #333;">Лог изменения цены товаров</h1>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Дата и время</th>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Тип цены</th>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Стоимость до</th>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Стоимость после</th>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Кто изменил</th>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Канал изменения</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$logs item=item}
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">{$item.updated_time}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{$item.price_type}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{$item.price_before}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{$item.price_after}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{$item.updated_by}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{$item.update_channel}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>
