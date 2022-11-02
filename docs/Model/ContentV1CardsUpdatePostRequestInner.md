# # ContentV1CardsUpdatePostRequestInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imt_id** | **int** | Идентификатор карточки товара | [optional]
**nm_id** | **int** | Числовой идентификатор номенклатуры Wildberries | [optional]
**vendor_code** | **string** | Вендор код, текстовый идентификатор номенклатуры поставщика | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInnerSizesInner[]**](ContentV1CardsUpdatePostRequestInnerSizesInner.md) | Массив размеров для номенклатуры (для безразмерного товара все равно нужно передавать данный массив с одним элементом и нулевым размером, но с ценой и баркодом) | [optional]
**characteristics** | **object[]** | Массив характеристик, индивидуальный для каждой категории | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
