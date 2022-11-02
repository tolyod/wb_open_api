# # ContentV1CardsCursorListPost200ResponseDataCardsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sizes** | [**\OpenAPI\Client\Model\ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner[]**](ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner.md) | Массив размеров для номенклатуры (для безразмерного товара все равно нужно передавать данный массив с одним элементом и нулевым размером, но с ценой и баркодом) | [optional]
**media_files** | **string[]** | Медиафайлы номенклатуры | [optional]
**colors** | **string[]** | Цвета номенклатуры | [optional]
**update_at** | **string** | Дата обновления | [optional]
**vendor_code** | **string** | Текстовый идентификатор НМ поставщика | [optional]
**brand** | **string** | Брэнд | [optional]
**object** | **string** | Категория для который создавалось КТ с данной НМ | [optional]
**nm_id** | **int** | Числовой идентификатор номенклатуры Wildberries | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
