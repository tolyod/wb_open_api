# # StocksItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_change_date** | **\DateTime** | Дата и время обновления информации в сервисе. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional]
**supplier_article** | **string** | Артикул поставщика | [optional]
**tech_size** | **string** | Размер | [optional]
**barcode** | **string** | Бар-код | [optional]
**quantity** | **int** | Количество, доступное для продажи (сколько можно добавить в корзину) | [optional]
**is_supply** | **bool** | Договор поставки | [optional]
**is_realization** | **bool** | Договор реализации | [optional]
**quantity_full** | **int** | Полное (непроданное) количество, которое числится на складе | [optional]
**quantity_not_in_orders** | **int** | Количество не в заказе. Числится на складе, но при этом не числится в незавершенном заказе. | [optional]
**warehouse** | **int** | Уникальный идентификатор склада | [optional]
**warehouse_name** | **string** | Название склада | [optional]
**in_way_to_client** | **int** | В пути к клиенту (штук) | [optional]
**in_way_from_client** | **int** | В пути от клиента (штук) | [optional]
**nm_id** | **int** | Код WB | [optional]
**subject** | **string** | Предмет | [optional]
**category** | **string** | Категория | [optional]
**days_on_site** | **int** | Количество дней на сайте | [optional]
**brand** | **string** | Бренд | [optional]
**sc_code** | **string** | Код контракта | [optional]
**price** | **float** | Цена | [optional]
**discount** | **float** | Скидка | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
