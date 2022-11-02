# OpenAPIClient-php

# Общее описание
<style> .version {
  border: 0.1rem #b3b3b3 solid ;
  background-color: #F9F9F9;
  color: #32329FE6;
  height: 25px;
  width: 150px;
  text-align: center
} </style>
Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)

<ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>

<br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>

## Поддержка
<br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API.
<br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news).
<br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс. 

## Авторизация
Вызов любого метода API должен быть авторизован.  Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно
 генерирует в разделе 
 [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api) для статистики 
 и [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api) для остальных методов.


Ключ должен передаваться в каждом HTTP-запросе. 

### Авторизация для методов Статистики
При работе с методами Статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к API\". <br>Созданный ключ отображается в личном кабинете как \"Ключ для работы с API статистики x64\". <br>Его следует скопировать и добавлять в каждый запрос, прибавляя к запросу параметр `key`. <br>Выглядеть запрос будет примерно так: `https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2022-03-25&key=xxxxxxxxxx` 


### Авторизация для нестатистических методов
При работе со всеми методами кроме статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к новому API\". <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: xxxxxxxxxx`.

## Форматы
### Дата и время
Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>


## Release Notes

#### 2022.10.31 v1.4 
Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>

#### 2022.09.20 v1.2 
В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul>
Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = 'date_from_example'; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierExciseGoodsGet($key, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierExciseGoodsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**apiV1SupplierExciseGoodsGet**](docs/Api/DefaultApi.md#apiv1supplierexcisegoodsget) | **GET** /api/v1/supplier/excise-goods | Отчет по КиЗам
*DefaultApi* | [**apiV1SupplierIncomesGet**](docs/Api/DefaultApi.md#apiv1supplierincomesget) | **GET** /api/v1/supplier/incomes | Поставки
*DefaultApi* | [**apiV1SupplierOrdersGet**](docs/Api/DefaultApi.md#apiv1supplierordersget) | **GET** /api/v1/supplier/orders | Заказы
*DefaultApi* | [**apiV1SupplierReportDetailByPeriodGet**](docs/Api/DefaultApi.md#apiv1supplierreportdetailbyperiodget) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации
*DefaultApi* | [**apiV1SupplierSalesGet**](docs/Api/DefaultApi.md#apiv1suppliersalesget) | **GET** /api/v1/supplier/sales | Продажи
*DefaultApi* | [**apiV1SupplierStocksGet**](docs/Api/DefaultApi.md#apiv1supplierstocksget) | **GET** /api/v1/supplier/stocks | Склад
*DefaultApi* | [**contentV1BarcodesPost**](docs/Api/DefaultApi.md#contentv1barcodespost) | **POST** /content/v1/barcodes | Генерация баркодов
*DefaultApi* | [**contentV1CardsCursorListPost**](docs/Api/DefaultApi.md#contentv1cardscursorlistpost) | **POST** /content/v1/cards/cursor/list | Список НМ v2
*DefaultApi* | [**contentV1CardsErrorListGet**](docs/Api/DefaultApi.md#contentv1cardserrorlistget) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками
*DefaultApi* | [**contentV1CardsFilterPost**](docs/Api/DefaultApi.md#contentv1cardsfilterpost) | **POST** /content/v1/cards/filter | Получение КТ по вендор кодам (артикулам)
*DefaultApi* | [**contentV1CardsUpdatePost**](docs/Api/DefaultApi.md#contentv1cardsupdatepost) | **POST** /content/v1/cards/update | Редактирование КТ
*DefaultApi* | [**contentV1CardsUploadAddPost**](docs/Api/DefaultApi.md#contentv1cardsuploadaddpost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ
*DefaultApi* | [**contentV1CardsUploadPost**](docs/Api/DefaultApi.md#contentv1cardsuploadpost) | **POST** /content/v1/cards/upload | Создание  КТ
*DefaultApi* | [**contentV1DirectoryBrandsGet**](docs/Api/DefaultApi.md#contentv1directorybrandsget) | **GET** /content/v1/directory/brands | Бренд
*DefaultApi* | [**contentV1DirectoryCollectionsGet**](docs/Api/DefaultApi.md#contentv1directorycollectionsget) | **GET** /content/v1/directory/collections | Коллекция
*DefaultApi* | [**contentV1DirectoryColorsGet**](docs/Api/DefaultApi.md#contentv1directorycolorsget) | **GET** /content/v1/directory/colors | Цвет
*DefaultApi* | [**contentV1DirectoryConsistsGet**](docs/Api/DefaultApi.md#contentv1directoryconsistsget) | **GET** /content/v1/directory/consists | Состав
*DefaultApi* | [**contentV1DirectoryContentsGet**](docs/Api/DefaultApi.md#contentv1directorycontentsget) | **GET** /content/v1/directory/contents | Комплектация
*DefaultApi* | [**contentV1DirectoryCountriesGet**](docs/Api/DefaultApi.md#contentv1directorycountriesget) | **GET** /content/v1/directory/countries | Страна Производства
*DefaultApi* | [**contentV1DirectoryKindsGet**](docs/Api/DefaultApi.md#contentv1directorykindsget) | **GET** /content/v1/directory/kinds | Пол
*DefaultApi* | [**contentV1DirectorySeasonsGet**](docs/Api/DefaultApi.md#contentv1directoryseasonsget) | **GET** /content/v1/directory/seasons | Сезон
*DefaultApi* | [**contentV1DirectoryTnvedGet**](docs/Api/DefaultApi.md#contentv1directorytnvedget) | **GET** /content/v1/directory/tnved | ТНВЭД код
*DefaultApi* | [**contentV1MediaFilePost**](docs/Api/DefaultApi.md#contentv1mediafilepost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ
*DefaultApi* | [**contentV1MediaSavePost**](docs/Api/DefaultApi.md#contentv1mediasavepost) | **POST** /content/v1/media/save | Изменение медиа контента КТ
*DefaultApi* | [**contentV1ObjectAllGet**](docs/Api/DefaultApi.md#contentv1objectallget) | **GET** /content/v1/object/all | Категория товаров
*DefaultApi* | [**contentV1ObjectCharacteristicsListFilterGet**](docs/Api/DefaultApi.md#contentv1objectcharacteristicslistfilterget) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям
*DefaultApi* | [**contentV1ObjectCharacteristicsObjectNameGet**](docs/Api/DefaultApi.md#contentv1objectcharacteristicsobjectnameget) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара
*DefaultApi* | [**contentV1ObjectParentAllGet**](docs/Api/DefaultApi.md#contentv1objectparentallget) | **GET** /content/v1/object/parent/all | Родительские категории товаров
*DefaultApi* | [**publicApiV1InfoGet**](docs/Api/DefaultApi.md#publicapiv1infoget) | **GET** /public/api/v1/info | Получение информации о ценах.
*DefaultApi* | [**publicApiV1PricesPost**](docs/Api/DefaultApi.md#publicapiv1pricespost) | **POST** /public/api/v1/prices | Загрузка цен
*DefaultApi* | [**publicApiV1RevokeDiscountsPost**](docs/Api/DefaultApi.md#publicapiv1revokediscountspost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур
*DefaultApi* | [**publicApiV1RevokePromocodesPost**](docs/Api/DefaultApi.md#publicapiv1revokepromocodespost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур
*DefaultApi* | [**publicApiV1UpdateDiscountsPost**](docs/Api/DefaultApi.md#publicapiv1updatediscountspost) | **POST** /public/api/v1/updateDiscounts | Установка скидок
*DefaultApi* | [**publicApiV1UpdatePromocodesPost**](docs/Api/DefaultApi.md#publicapiv1updatepromocodespost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур
*MarketplaceApi* | [**apiV2OrdersGet**](docs/Api/MarketplaceApi.md#apiv2ordersget) | **GET** /api/v2/orders | Список сборочных заданий
*MarketplaceApi* | [**apiV2OrdersPut**](docs/Api/MarketplaceApi.md#apiv2ordersput) | **PUT** /api/v2/orders | Обновление статуса сборочных заданий
*MarketplaceApi* | [**apiV2OrdersStickersPdfPost**](docs/Api/MarketplaceApi.md#apiv2ordersstickerspdfpost) | **POST** /api/v2/orders/stickers/pdf | Cписок QR стикеров в формате pdf
*MarketplaceApi* | [**apiV2OrdersStickersPost**](docs/Api/MarketplaceApi.md#apiv2ordersstickerspost) | **POST** /api/v2/orders/stickers | Cписок этикеток сборочных заданий
*MarketplaceApi* | [**apiV2StocksDelete**](docs/Api/MarketplaceApi.md#apiv2stocksdelete) | **DELETE** /api/v2/stocks | Удаление остатков товара
*MarketplaceApi* | [**apiV2StocksGet**](docs/Api/MarketplaceApi.md#apiv2stocksget) | **GET** /api/v2/stocks | Список товаров с остатками
*MarketplaceApi* | [**apiV2StocksPost**](docs/Api/MarketplaceApi.md#apiv2stockspost) | **POST** /api/v2/stocks | Обновление остатков товара
*MarketplaceApi* | [**apiV2SuppliesGet**](docs/Api/MarketplaceApi.md#apiv2suppliesget) | **GET** /api/v2/supplies | Список поставок
*MarketplaceApi* | [**apiV2SuppliesIdBarcodeGet**](docs/Api/MarketplaceApi.md#apiv2suppliesidbarcodeget) | **GET** /api/v2/supplies/{id}/barcode | Штрихкод поставки в заданном формате
*MarketplaceApi* | [**apiV2SuppliesIdClosePost**](docs/Api/MarketplaceApi.md#apiv2suppliesidclosepost) | **POST** /api/v2/supplies/{id}/close | Закрытие поставки
*MarketplaceApi* | [**apiV2SuppliesIdOrdersGet**](docs/Api/MarketplaceApi.md#apiv2suppliesidordersget) | **GET** /api/v2/supplies/{id}/orders | Список заказов, закреплённых за поставкой
*MarketplaceApi* | [**apiV2SuppliesIdPut**](docs/Api/MarketplaceApi.md#apiv2suppliesidput) | **PUT** /api/v2/supplies/{id} | Добавление к поставке заказов
*MarketplaceApi* | [**apiV2SuppliesPost**](docs/Api/MarketplaceApi.md#apiv2suppliespost) | **POST** /api/v2/supplies | Новая поставка
*MarketplaceApi* | [**apiV2WarehousesGet**](docs/Api/MarketplaceApi.md#apiv2warehousesget) | **GET** /api/v2/warehouses | Cписок складов

## Models

- [ApiV2OrdersGet200Response](docs/Model/ApiV2OrdersGet200Response.md)
- [ApiV2OrdersGet200ResponseOrdersInner](docs/Model/ApiV2OrdersGet200ResponseOrdersInner.md)
- [ApiV2OrdersGet400Response](docs/Model/ApiV2OrdersGet400Response.md)
- [ApiV2OrdersGetRequestInner](docs/Model/ApiV2OrdersGetRequestInner.md)
- [ApiV2OrdersGetRequestInnerSgtinInner](docs/Model/ApiV2OrdersGetRequestInnerSgtinInner.md)
- [ApiV2OrdersStickersPdfPost200Response](docs/Model/ApiV2OrdersStickersPdfPost200Response.md)
- [ApiV2OrdersStickersPdfPost200ResponseData](docs/Model/ApiV2OrdersStickersPdfPost200ResponseData.md)
- [ApiV2OrdersStickersPost200Response](docs/Model/ApiV2OrdersStickersPost200Response.md)
- [ApiV2OrdersStickersPost200ResponseDataInner](docs/Model/ApiV2OrdersStickersPost200ResponseDataInner.md)
- [ApiV2OrdersStickersPost200ResponseDataInnerSticker](docs/Model/ApiV2OrdersStickersPost200ResponseDataInnerSticker.md)
- [ApiV2OrdersStickersPost200ResponseDataInnerStickerWbStickerIdParts](docs/Model/ApiV2OrdersStickersPost200ResponseDataInnerStickerWbStickerIdParts.md)
- [ApiV2StocksDelete200Response](docs/Model/ApiV2StocksDelete200Response.md)
- [ApiV2StocksDelete200Response1](docs/Model/ApiV2StocksDelete200Response1.md)
- [ApiV2StocksDelete200Response1Data](docs/Model/ApiV2StocksDelete200Response1Data.md)
- [ApiV2StocksDelete200Response1DataErrorInner](docs/Model/ApiV2StocksDelete200Response1DataErrorInner.md)
- [ApiV2StocksDelete200Response2](docs/Model/ApiV2StocksDelete200Response2.md)
- [ApiV2StocksDelete200Response2DataInner](docs/Model/ApiV2StocksDelete200Response2DataInner.md)
- [ApiV2StocksDelete200ResponseStocksInner](docs/Model/ApiV2StocksDelete200ResponseStocksInner.md)
- [ApiV2StocksDeleteRequestInner](docs/Model/ApiV2StocksDeleteRequestInner.md)
- [ApiV2StocksDeleteRequestInner1](docs/Model/ApiV2StocksDeleteRequestInner1.md)
- [ApiV2SuppliesGet200Response](docs/Model/ApiV2SuppliesGet200Response.md)
- [ApiV2SuppliesGet200ResponseSuppliesInner](docs/Model/ApiV2SuppliesGet200ResponseSuppliesInner.md)
- [ApiV2SuppliesGet201Response](docs/Model/ApiV2SuppliesGet201Response.md)
- [ApiV2SuppliesGet400Response](docs/Model/ApiV2SuppliesGet400Response.md)
- [ApiV2SuppliesGet409Response](docs/Model/ApiV2SuppliesGet409Response.md)
- [ApiV2SuppliesIdBarcodeGet200Response](docs/Model/ApiV2SuppliesIdBarcodeGet200Response.md)
- [ApiV2SuppliesIdOrdersGet200Response](docs/Model/ApiV2SuppliesIdOrdersGet200Response.md)
- [ApiV2SuppliesIdOrdersGet200ResponseOrdersInner](docs/Model/ApiV2SuppliesIdOrdersGet200ResponseOrdersInner.md)
- [ApiV2SuppliesIdPutRequest](docs/Model/ApiV2SuppliesIdPutRequest.md)
- [ApiV2WarehousesGet200ResponseInner](docs/Model/ApiV2WarehousesGet200ResponseInner.md)
- [ContentV1BarcodesPost200Response](docs/Model/ContentV1BarcodesPost200Response.md)
- [ContentV1BarcodesPostRequest](docs/Model/ContentV1BarcodesPostRequest.md)
- [ContentV1CardsCursorListPost200Response](docs/Model/ContentV1CardsCursorListPost200Response.md)
- [ContentV1CardsCursorListPost200ResponseData](docs/Model/ContentV1CardsCursorListPost200ResponseData.md)
- [ContentV1CardsCursorListPost200ResponseDataCardsInner](docs/Model/ContentV1CardsCursorListPost200ResponseDataCardsInner.md)
- [ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner](docs/Model/ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner.md)
- [ContentV1CardsCursorListPost200ResponseDataCursor](docs/Model/ContentV1CardsCursorListPost200ResponseDataCursor.md)
- [ContentV1CardsCursorListPostRequest](docs/Model/ContentV1CardsCursorListPostRequest.md)
- [ContentV1CardsCursorListPostRequestSort](docs/Model/ContentV1CardsCursorListPostRequestSort.md)
- [ContentV1CardsCursorListPostRequestSortCursor](docs/Model/ContentV1CardsCursorListPostRequestSortCursor.md)
- [ContentV1CardsCursorListPostRequestSortFilter](docs/Model/ContentV1CardsCursorListPostRequestSortFilter.md)
- [ContentV1CardsCursorListPostRequestSortSort](docs/Model/ContentV1CardsCursorListPostRequestSortSort.md)
- [ContentV1CardsErrorListGet200Response](docs/Model/ContentV1CardsErrorListGet200Response.md)
- [ContentV1CardsErrorListGet200ResponseDataInner](docs/Model/ContentV1CardsErrorListGet200ResponseDataInner.md)
- [ContentV1CardsFilterPost200Response](docs/Model/ContentV1CardsFilterPost200Response.md)
- [ContentV1CardsFilterPost200ResponseDataInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInner.md)
- [ContentV1CardsFilterPost200ResponseDataInnerSizesInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInnerSizesInner.md)
- [ContentV1CardsFilterPostRequest](docs/Model/ContentV1CardsFilterPostRequest.md)
- [ContentV1CardsUpdatePost200Response](docs/Model/ContentV1CardsUpdatePost200Response.md)
- [ContentV1CardsUpdatePostRequestInner](docs/Model/ContentV1CardsUpdatePostRequestInner.md)
- [ContentV1CardsUpdatePostRequestInnerSizesInner](docs/Model/ContentV1CardsUpdatePostRequestInnerSizesInner.md)
- [ContentV1CardsUploadAddPostRequest](docs/Model/ContentV1CardsUploadAddPostRequest.md)
- [ContentV1CardsUploadAddPostRequestCardsInner](docs/Model/ContentV1CardsUploadAddPostRequestCardsInner.md)
- [ContentV1CardsUploadAddPostRequestCardsInnerSizesInner](docs/Model/ContentV1CardsUploadAddPostRequestCardsInnerSizesInner.md)
- [ContentV1CardsUploadPostRequestInnerInner](docs/Model/ContentV1CardsUploadPostRequestInnerInner.md)
- [ContentV1CardsUploadPostRequestInnerInnerSizesInner](docs/Model/ContentV1CardsUploadPostRequestInnerInnerSizesInner.md)
- [ContentV1DirectoryBrandsGet200Response](docs/Model/ContentV1DirectoryBrandsGet200Response.md)
- [ContentV1DirectoryCollectionsGet200Response](docs/Model/ContentV1DirectoryCollectionsGet200Response.md)
- [ContentV1DirectoryCollectionsGet200ResponseDataInner](docs/Model/ContentV1DirectoryCollectionsGet200ResponseDataInner.md)
- [ContentV1DirectoryColorsGet200Response](docs/Model/ContentV1DirectoryColorsGet200Response.md)
- [ContentV1DirectoryColorsGet200ResponseDataInner](docs/Model/ContentV1DirectoryColorsGet200ResponseDataInner.md)
- [ContentV1DirectoryConsistsGet200Response](docs/Model/ContentV1DirectoryConsistsGet200Response.md)
- [ContentV1DirectoryConsistsGet200ResponseDataInner](docs/Model/ContentV1DirectoryConsistsGet200ResponseDataInner.md)
- [ContentV1DirectoryContentsGet200Response](docs/Model/ContentV1DirectoryContentsGet200Response.md)
- [ContentV1DirectoryContentsGet200ResponseDataInner](docs/Model/ContentV1DirectoryContentsGet200ResponseDataInner.md)
- [ContentV1DirectoryCountriesGet200Response](docs/Model/ContentV1DirectoryCountriesGet200Response.md)
- [ContentV1DirectoryCountriesGet200ResponseDataInner](docs/Model/ContentV1DirectoryCountriesGet200ResponseDataInner.md)
- [ContentV1DirectoryKindsGet200Response](docs/Model/ContentV1DirectoryKindsGet200Response.md)
- [ContentV1DirectorySeasonsGet200Response](docs/Model/ContentV1DirectorySeasonsGet200Response.md)
- [ContentV1DirectoryTnvedGet200Response](docs/Model/ContentV1DirectoryTnvedGet200Response.md)
- [ContentV1DirectoryTnvedGet200ResponseDataInner](docs/Model/ContentV1DirectoryTnvedGet200ResponseDataInner.md)
- [ContentV1MediaSavePostRequest](docs/Model/ContentV1MediaSavePostRequest.md)
- [ContentV1ObjectAllGet200Response](docs/Model/ContentV1ObjectAllGet200Response.md)
- [ContentV1ObjectAllGet200ResponseDataInner](docs/Model/ContentV1ObjectAllGet200ResponseDataInner.md)
- [ContentV1ObjectCharacteristicsListFilterGet200Response](docs/Model/ContentV1ObjectCharacteristicsListFilterGet200Response.md)
- [ContentV1ObjectCharacteristicsListFilterGet200ResponseDataInner](docs/Model/ContentV1ObjectCharacteristicsListFilterGet200ResponseDataInner.md)
- [ContentV1ObjectCharacteristicsObjectNameGet200Response](docs/Model/ContentV1ObjectCharacteristicsObjectNameGet200Response.md)
- [ContentV1ObjectCharacteristicsObjectNameGet200ResponseDataInner](docs/Model/ContentV1ObjectCharacteristicsObjectNameGet200ResponseDataInner.md)
- [ContentV1ObjectParentAllGet200Response](docs/Model/ContentV1ObjectParentAllGet200Response.md)
- [ContentV1ObjectParentAllGet200ResponseDataInner](docs/Model/ContentV1ObjectParentAllGet200ResponseDataInner.md)
- [DeliveryAddressDetails](docs/Model/DeliveryAddressDetails.md)
- [DetailReportItem](docs/Model/DetailReportItem.md)
- [ExcItem](docs/Model/ExcItem.md)
- [IncomesItem](docs/Model/IncomesItem.md)
- [OrdersItem](docs/Model/OrdersItem.md)
- [PublicApiV1InfoGet200Response](docs/Model/PublicApiV1InfoGet200Response.md)
- [PublicApiV1PricesPostRequestInner](docs/Model/PublicApiV1PricesPostRequestInner.md)
- [PublicApiV1RevokeDiscountsPost200Response](docs/Model/PublicApiV1RevokeDiscountsPost200Response.md)
- [PublicApiV1UpdateDiscountsPostRequestInner](docs/Model/PublicApiV1UpdateDiscountsPostRequestInner.md)
- [RequestBodyStickers](docs/Model/RequestBodyStickers.md)
- [RespBodyStocks](docs/Model/RespBodyStocks.md)
- [ResponseBodyError400](docs/Model/ResponseBodyError400.md)
- [ResponseBodyError403](docs/Model/ResponseBodyError403.md)
- [ResponseBodyStickersError](docs/Model/ResponseBodyStickersError.md)
- [SalesItem](docs/Model/SalesItem.md)
- [StocksItem](docs/Model/StocksItem.md)
- [SuppliesIdRespBody](docs/Model/SuppliesIdRespBody.md)
- [SuppliesIdRespBody2](docs/Model/SuppliesIdRespBody2.md)
- [SuppliesIdRespBody2Data](docs/Model/SuppliesIdRespBody2Data.md)
- [UserInfo](docs/Model/UserInfo.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string



### HeaderApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
