# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1SupplierExciseGoodsGet()**](DefaultApi.md#apiV1SupplierExciseGoodsGet) | **GET** /api/v1/supplier/excise-goods | Отчет по КиЗам |
| [**apiV1SupplierIncomesGet()**](DefaultApi.md#apiV1SupplierIncomesGet) | **GET** /api/v1/supplier/incomes | Поставки |
| [**apiV1SupplierOrdersGet()**](DefaultApi.md#apiV1SupplierOrdersGet) | **GET** /api/v1/supplier/orders | Заказы |
| [**apiV1SupplierReportDetailByPeriodGet()**](DefaultApi.md#apiV1SupplierReportDetailByPeriodGet) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации |
| [**apiV1SupplierSalesGet()**](DefaultApi.md#apiV1SupplierSalesGet) | **GET** /api/v1/supplier/sales | Продажи |
| [**apiV1SupplierStocksGet()**](DefaultApi.md#apiV1SupplierStocksGet) | **GET** /api/v1/supplier/stocks | Склад |
| [**contentV1BarcodesPost()**](DefaultApi.md#contentV1BarcodesPost) | **POST** /content/v1/barcodes | Генерация баркодов |
| [**contentV1CardsCursorListPost()**](DefaultApi.md#contentV1CardsCursorListPost) | **POST** /content/v1/cards/cursor/list | Список НМ v2 |
| [**contentV1CardsErrorListGet()**](DefaultApi.md#contentV1CardsErrorListGet) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками |
| [**contentV1CardsFilterPost()**](DefaultApi.md#contentV1CardsFilterPost) | **POST** /content/v1/cards/filter | Получение КТ по вендор кодам (артикулам) |
| [**contentV1CardsUpdatePost()**](DefaultApi.md#contentV1CardsUpdatePost) | **POST** /content/v1/cards/update | Редактирование КТ |
| [**contentV1CardsUploadAddPost()**](DefaultApi.md#contentV1CardsUploadAddPost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ |
| [**contentV1CardsUploadPost()**](DefaultApi.md#contentV1CardsUploadPost) | **POST** /content/v1/cards/upload | Создание  КТ |
| [**contentV1DirectoryBrandsGet()**](DefaultApi.md#contentV1DirectoryBrandsGet) | **GET** /content/v1/directory/brands | Бренд |
| [**contentV1DirectoryCollectionsGet()**](DefaultApi.md#contentV1DirectoryCollectionsGet) | **GET** /content/v1/directory/collections | Коллекция |
| [**contentV1DirectoryColorsGet()**](DefaultApi.md#contentV1DirectoryColorsGet) | **GET** /content/v1/directory/colors | Цвет |
| [**contentV1DirectoryConsistsGet()**](DefaultApi.md#contentV1DirectoryConsistsGet) | **GET** /content/v1/directory/consists | Состав |
| [**contentV1DirectoryContentsGet()**](DefaultApi.md#contentV1DirectoryContentsGet) | **GET** /content/v1/directory/contents | Комплектация |
| [**contentV1DirectoryCountriesGet()**](DefaultApi.md#contentV1DirectoryCountriesGet) | **GET** /content/v1/directory/countries | Страна Производства |
| [**contentV1DirectoryKindsGet()**](DefaultApi.md#contentV1DirectoryKindsGet) | **GET** /content/v1/directory/kinds | Пол |
| [**contentV1DirectorySeasonsGet()**](DefaultApi.md#contentV1DirectorySeasonsGet) | **GET** /content/v1/directory/seasons | Сезон |
| [**contentV1DirectoryTnvedGet()**](DefaultApi.md#contentV1DirectoryTnvedGet) | **GET** /content/v1/directory/tnved | ТНВЭД код |
| [**contentV1MediaFilePost()**](DefaultApi.md#contentV1MediaFilePost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ |
| [**contentV1MediaSavePost()**](DefaultApi.md#contentV1MediaSavePost) | **POST** /content/v1/media/save | Изменение медиа контента КТ |
| [**contentV1ObjectAllGet()**](DefaultApi.md#contentV1ObjectAllGet) | **GET** /content/v1/object/all | Категория товаров |
| [**contentV1ObjectCharacteristicsListFilterGet()**](DefaultApi.md#contentV1ObjectCharacteristicsListFilterGet) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям |
| [**contentV1ObjectCharacteristicsObjectNameGet()**](DefaultApi.md#contentV1ObjectCharacteristicsObjectNameGet) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара |
| [**contentV1ObjectParentAllGet()**](DefaultApi.md#contentV1ObjectParentAllGet) | **GET** /content/v1/object/parent/all | Родительские категории товаров |
| [**publicApiV1InfoGet()**](DefaultApi.md#publicApiV1InfoGet) | **GET** /public/api/v1/info | Получение информации о ценах. |
| [**publicApiV1PricesPost()**](DefaultApi.md#publicApiV1PricesPost) | **POST** /public/api/v1/prices | Загрузка цен |
| [**publicApiV1RevokeDiscountsPost()**](DefaultApi.md#publicApiV1RevokeDiscountsPost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур |
| [**publicApiV1RevokePromocodesPost()**](DefaultApi.md#publicApiV1RevokePromocodesPost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур |
| [**publicApiV1UpdateDiscountsPost()**](DefaultApi.md#publicApiV1UpdateDiscountsPost) | **POST** /public/api/v1/updateDiscounts | Установка скидок |
| [**publicApiV1UpdatePromocodesPost()**](DefaultApi.md#publicApiV1UpdatePromocodesPost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур |


## `apiV1SupplierExciseGoodsGet()`

```php
apiV1SupplierExciseGoodsGet($key, $date_from): \OpenAPI\Client\Model\ExcItem[]
```
### URI(s):
- https://suppliers-stats.wildberries.ru 
Отчет по КиЗам

Отчет по КиЗам. <br> КИЗ — это контрольный идентификационный знак.  Он представляет собой маркировку, похожую на QR-код, который проставляется на некоторых товарах.  Его можно отсканировать с помощью специального приложения и убедиться в качестве и оригинальности товара.  Сканирование КИЗов доступно как продавцу, так и покупателю, а также всем остальным участникам процесса продажи.

### Example

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

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierExciseGoodsGet($key, $date_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierExciseGoodsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». | |
| **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExcItem[]**](../Model/ExcItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierIncomesGet()`

```php
apiV1SupplierIncomesGet($key, $date_from): \OpenAPI\Client\Model\IncomesItem[]
```
### URI(s):
- https://suppliers-stats.wildberries.ru 
Поставки

Поставки

### Example

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

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierIncomesGet($key, $date_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierIncomesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». | |
| **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IncomesItem[]**](../Model/IncomesItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierOrdersGet()`

```php
apiV1SupplierOrdersGet($key, $date_from, $flag): \OpenAPI\Client\Model\OrdersItem[]
```
### URI(s):
- https://suppliers-stats.wildberries.ru 
Заказы

Заказы. <br>  Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут.  Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).

### Example

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
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierOrdersGet($key, $date_from, $flag, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». | |
| **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersItem[]**](../Model/OrdersItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierReportDetailByPeriodGet()`

```php
apiV1SupplierReportDetailByPeriodGet($key, $date_from, $date_to, $limit, $rrdid): \OpenAPI\Client\Model\DetailReportItem[]
```
### URI(s):
- https://suppliers-stats.wildberries.ru 
Отчет о продажах по реализации

Отчет о продажах по реализации.  <br> В отчете доступны данные за последние 3 месяца. <br> В случае отсутствия данных за указанный период метод вернет `null`.

### Example

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
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата отчета
$limit = 0; // int | Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000.
$rrdid = 56; // int | Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  <br> Загрузку отчета нужно начинать с `rrdid = 0` и при последующих вызовах API передавать в запросе значение `rrd_id` из последней строки, полученной в результате предыдущего вызова.  <br> Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierReportDetailByPeriodGet($key, $date_from, $date_to, $limit, $rrdid, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierReportDetailByPeriodGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». | |
| **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| **date_to** | **\DateTime**| Конечная дата отчета | |
| **limit** | **int**| Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. | [optional] [default to 0] |
| **rrdid** | **int**| Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DetailReportItem[]**](../Model/DetailReportItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierSalesGet()`

```php
apiV1SupplierSalesGet($key, $date_from, $flag): \OpenAPI\Client\Model\SalesItem[]
```
### URI(s):
- https://suppliers-stats.wildberries.ru 
Продажи

Продажи. <br> Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут. Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).  <br> Для расчета окончательной стоимости (суммы к оплате) следует пользоваться следующей формулой: <br> `PriceWithDiscount = totalPrice * ((100 – discountPercent)/100) * ((100 – promoCodeDiscount)/100) *((100 – spp)/100)`

### Example

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
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierSalesGet($key, $date_from, $flag, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierSalesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». | |
| **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SalesItem[]**](../Model/SalesItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierStocksGet()`

```php
apiV1SupplierStocksGet($key, $date_from): \OpenAPI\Client\Model\StocksItem[]
```
### URI(s):
- https://suppliers-stats.wildberries.ru 
Склад

Склад. Данные обновляются раз в сутки. Сервис статистики не хранит историю остатков товаров, поэтому получить данные об остатках товаров на прошедшую, не сегодняшнюю, дату - невозможно.

### Example

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

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierStocksGet($key, $date_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierStocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». | |
| **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\StocksItem[]**](../Model/StocksItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1BarcodesPost()`

```php
contentV1BarcodesPost($content_v1_barcodes_post_request): \OpenAPI\Client\Model\ContentV1BarcodesPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Генерация баркодов

Метод позволяет сгенерировать массив уникальных баркодов для создания размера НМ в КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_barcodes_post_request = new \OpenAPI\Client\Model\ContentV1BarcodesPostRequest(); // \OpenAPI\Client\Model\ContentV1BarcodesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1BarcodesPost($content_v1_barcodes_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1BarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_barcodes_post_request** | [**\OpenAPI\Client\Model\ContentV1BarcodesPostRequest**](../Model/ContentV1BarcodesPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1BarcodesPost200Response**](../Model/ContentV1BarcodesPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsCursorListPost()`

```php
contentV1CardsCursorListPost($content_v1_cards_cursor_list_post_request): \OpenAPI\Client\Model\ContentV1CardsCursorListPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список НМ v2

Метод позволяет получить список созданых НМ по фильтру (баркод, вендор код, номер номенклатуры) с пагинацией и сортировкой. <br> <br>Порядок работы с `cursor/list`: <br> Чтобы получить полный список номенклатур, <b>если их > 1000</b>, необходимо воспользоваться пагинацией:.   <ol>     <li>Cделать первый запрос, указав следующие параметры:       <ul>         <li>В <code>cursor</code> только необходимый <code>limit</code>, <b>(максимум 1 000)</b>,         <li><code>\"filter\": {</code>         <dd><code>\"textSearch\": \"\",</code></dd>         <dd><code>\"withPhoto\": -1</code></dd>         <code>}</code>         <li>Параметры в <code>sort</code> по умолчанию.       </ul>     <li>Пройти в конец полученного списка номенклатур, скопировать из <code>cursor</code> две строки:       <ul>         <li><code>\"updatedAt\": \"***\",</code>         <li><code>\"nmID\": ***,</code>       </ul>     <li>Вставить скопированные строки в <code>cursor</code> запроса, повторить вызов метода. </li>     <li>Повторять пункты 2 и 3, пока <code>total</code> в ответе не станет меньше чем <code>limit</code> в запросе.       <br>Это будет означать, что Вы получили все карточки.   </ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_cursor_list_post_request = new \OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsCursorListPost($content_v1_cards_cursor_list_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsCursorListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_cursor_list_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest**](../Model/ContentV1CardsCursorListPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsCursorListPost200Response**](../Model/ContentV1CardsCursorListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsErrorListGet()`

```php
contentV1CardsErrorListGet(): \OpenAPI\Client\Model\ContentV1CardsErrorListGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список несозданных НМ с ошибками

Метод позволяет получить список НМ и список ошибок которые произошли во время создания КТ. <br>`ВАЖНО`: Для того чтобы убрать НМ из ошибочных, надо повторно сделать запрос с исправленными ошибками на создание КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsErrorListGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsErrorListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsErrorListGet200Response**](../Model/ContentV1CardsErrorListGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsFilterPost()`

```php
contentV1CardsFilterPost($content_v1_cards_filter_post_request): \OpenAPI\Client\Model\ContentV1CardsFilterPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получение КТ по вендор кодам (артикулам)

Метод позволяет получить полную информацию по КТ с помощью вендор кода(-ов) номенклатуры из КТ  (артикулов).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_filter_post_request = new \OpenAPI\Client\Model\ContentV1CardsFilterPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsFilterPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsFilterPost($content_v1_cards_filter_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsFilterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_filter_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsFilterPostRequest**](../Model/ContentV1CardsFilterPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsFilterPost200Response**](../Model/ContentV1CardsFilterPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUpdatePost()`

```php
contentV1CardsUpdatePost($content_v1_cards_update_post_request_inner): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Редактирование КТ

Метод позволяет отредактировать несколько карточек за раз. <br> Редактирование КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br> `Важно`: Баркоды (skus) не подлежат удалению или замене. Попытка заменить существующий баркод приведет к добавлению нового баркода к существующему. <br> Номенклатуры, содержащие ошибки, не обновляются и попадают в раздел \"Список несозданных НМ с ошибками\" с описанием допущенной ошибки. Для того, чтобы убрать НМ из ошибочных, необходимо повторно сделать запрос с исправленными ошибками. <br> <br> Для успешного обновления карточки рекомендуем Вам придерживаться следующего порядка действий: <br> 1. Сначала существующую карточку необходимо запросить методом cards/filter. <br> 2. Забираем из ответа массив data. <br> 3. В этом массиве вносим необходимые изменения и отправляем его в cards/update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_update_post_request_inner = array(new \OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner()); // \OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUpdatePost($content_v1_cards_update_post_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_update_post_request_inner** | [**\OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner[]**](../Model/ContentV1CardsUpdatePostRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUploadAddPost()`

```php
contentV1CardsUploadAddPost($content_v1_cards_upload_add_post_request): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление НМ к КТ

Метод позволяет добавить к карточке товара новую номенклатуру. <br>Добавление НМ к КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br>`Важно`: Если после успешной отправки запроса номенклатура не создалась, то необходимо проверить раздел \"Список несозданных НМ с ошибками\". Для того чтобы убрать НМ из ошибочных, необходимо повторно сделать запрос с исправленными ошибками.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_upload_add_post_request = new \OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUploadAddPost($content_v1_cards_upload_add_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUploadAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_upload_add_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest**](../Model/ContentV1CardsUploadAddPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUploadPost()`

```php
contentV1CardsUploadPost($content_v1_cards_upload_post_request_inner_inner): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создание  КТ

Создание карточки товара происходит асинхронно, при отправке запроса на создание КТ ваш запрос становится в очередь на создание КТ. <br>`ПРИМЕЧАНИЕ`: Карточка товара считается `созданной`, если успешно создалась хотя бы одна `НМ`. <br>`ВАЖНО`: Если во время обработки запроса в очереди выявляются ошибки, то НМ считается ошибочной. <br>Если запрос на создание прошел успешно, а карточка не создалась, то необходимо в первую очередь проверить наличие карточки в методе `cards/error/list`. Если карточка попала в ответ к этому методу, то необходимо исправить описанные ошибки в запросе на создание карточки и отправить его повторно.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_upload_post_request_inner_inner = NULL; // \OpenAPI\Client\Model\ContentV1CardsUploadPostRequestInnerInner[][]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUploadPost($content_v1_cards_upload_post_request_inner_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_upload_post_request_inner_inner** | [**\OpenAPI\Client\Model\ContentV1CardsUploadPostRequestInnerInner[][]**](../Model/array.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryBrandsGet()`

```php
contentV1DirectoryBrandsGet($top, $pattern): \OpenAPI\Client\Model\ContentV1DirectoryBrandsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Бренд

Получение значения характеристики Бренд.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 1; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = USB; // string | Поиск по наименованию значения характеристики

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryBrandsGet($top, $pattern, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryBrandsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional] |
| **pattern** | **string**| Поиск по наименованию значения характеристики | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryBrandsGet200Response**](../Model/ContentV1DirectoryBrandsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryCollectionsGet()`

```php
contentV1DirectoryCollectionsGet($top, $pattern): \OpenAPI\Client\Model\ContentV1DirectoryCollectionsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Коллекция

Получение значения характеристики Коллекции.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 1; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = зим; // string | Поиск по наименованию значения характеристики

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryCollectionsGet($top, $pattern, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryCollectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional] |
| **pattern** | **string**| Поиск по наименованию значения характеристики | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryCollectionsGet200Response**](../Model/ContentV1DirectoryCollectionsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryColorsGet()`

```php
contentV1DirectoryColorsGet(): \OpenAPI\Client\Model\ContentV1DirectoryColorsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Цвет

Получение значения характеристики цвет.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryColorsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryColorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryColorsGet200Response**](../Model/ContentV1DirectoryColorsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryConsistsGet()`

```php
contentV1DirectoryConsistsGet($top, $pattern): \OpenAPI\Client\Model\ContentV1DirectoryConsistsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Состав

Получение значения характеристики Состав.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 1; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = хлопок; // string | Поиск по наименованию значения характеристики

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryConsistsGet($top, $pattern, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryConsistsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional] |
| **pattern** | **string**| Поиск по наименованию значения характеристики | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryConsistsGet200Response**](../Model/ContentV1DirectoryConsistsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryContentsGet()`

```php
contentV1DirectoryContentsGet($top, $pattern): \OpenAPI\Client\Model\ContentV1DirectoryContentsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Комплектация

Получение значения характеристики Комплектация.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 1; // int | Количество запрашиваемых значений
$pattern = USB; // string | Поиск по наименованию значения характеристики

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryContentsGet($top, $pattern, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryContentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Количество запрашиваемых значений | [optional] |
| **pattern** | **string**| Поиск по наименованию значения характеристики | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryContentsGet200Response**](../Model/ContentV1DirectoryContentsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryCountriesGet()`

```php
contentV1DirectoryCountriesGet(): \OpenAPI\Client\Model\ContentV1DirectoryCountriesGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Страна Производства

Получение значения характеристики Страна Производства.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryCountriesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryCountriesGet200Response**](../Model/ContentV1DirectoryCountriesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryKindsGet()`

```php
contentV1DirectoryKindsGet(): \OpenAPI\Client\Model\ContentV1DirectoryKindsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Пол

Получение значения характеристики пол.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryKindsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryKindsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryKindsGet200Response**](../Model/ContentV1DirectoryKindsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectorySeasonsGet()`

```php
contentV1DirectorySeasonsGet(): \OpenAPI\Client\Model\ContentV1DirectorySeasonsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сезон

Получение значения характеристики Сезон.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectorySeasonsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectorySeasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectorySeasonsGet200Response**](../Model/ContentV1DirectorySeasonsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryTnvedGet()`

```php
contentV1DirectoryTnvedGet($object_name, $tnveds_like): \OpenAPI\Client\Model\ContentV1DirectoryTnvedGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
ТНВЭД код

С помощью данного метода можно получить список ТНВЭД кодов по имени категории и фильтру по тнвэд коду.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = Блузки; // string | Поиск по наименованию категории
$tnveds_like = 4203100001; // string | Поиск по коду ТНВЭД

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryTnvedGet($object_name, $tnveds_like, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryTnvedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Поиск по наименованию категории | [optional] |
| **tnveds_like** | **string**| Поиск по коду ТНВЭД | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryTnvedGet200Response**](../Model/ContentV1DirectoryTnvedGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1MediaFilePost()`

```php
contentV1MediaFilePost($x_vendor_code, $x_photo_number, $uploadfile): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление медиа контента в КТ

Метод позволяет загрузить и добавить медиафайл к НМ в КТ. <br>`Фото`: минимальный размер 450 пикселей по одной стороне, максимальное количество 30 фото. <br>`Видео`: максимальный размер 50 мб. Форматы MOV, MP4.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_vendor_code = 6000000001; // string | Артикул НМ
$x_photo_number = 2; // int | Номер медиафайла на загрузку (должен быть меньше, либо равен кол-ву уже загруженных медиафайлов к НМ в КТ)
$uploadfile = "/path/to/file.txt"; // \SplFileObject

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1MediaFilePost($x_vendor_code, $x_photo_number, $uploadfile, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1MediaFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_vendor_code** | **string**| Артикул НМ | |
| **x_photo_number** | **int**| Номер медиафайла на загрузку (должен быть меньше, либо равен кол-ву уже загруженных медиафайлов к НМ в КТ) | |
| **uploadfile** | **\SplFileObject****\SplFileObject**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1MediaSavePost()`

```php
contentV1MediaSavePost($content_v1_media_save_post_request): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Изменение медиа контента КТ

Метод позволяет изменить порядок изображений или удалить медиафайлы с НМ в КТ, а также загрузить изображения в НМ со сторонних ресурсов по URL. <br>Текущие изображения заменяются на переданные в массиве data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_media_save_post_request = new \OpenAPI\Client\Model\ContentV1MediaSavePostRequest(); // \OpenAPI\Client\Model\ContentV1MediaSavePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1MediaSavePost($content_v1_media_save_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1MediaSavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_media_save_post_request** | [**\OpenAPI\Client\Model\ContentV1MediaSavePostRequest**](../Model/ContentV1MediaSavePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectAllGet()`

```php
contentV1ObjectAllGet($name, $top): \OpenAPI\Client\Model\ContentV1ObjectAllGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Категория товаров

С помощью данного метода можно получить список категорий товаров по текстовому фильтру (названию категории).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 3D; // string | Поиск по названию категории
$top = 50; // int | Количество запрашиваемых значений

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectAllGet($name, $top, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Поиск по названию категории | [optional] |
| **top** | **int**| Количество запрашиваемых значений | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectAllGet200Response**](../Model/ContentV1ObjectAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectCharacteristicsListFilterGet()`

```php
contentV1ObjectCharacteristicsListFilterGet($name): \OpenAPI\Client\Model\ContentV1ObjectCharacteristicsListFilterGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Характеристики для создания КТ по всем подкатегориям

С помощью данного метода можно получить список характеристик которые можно или нужно заполнить при создании КТ в подкатегории определенной родительской категории.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Косухи; // string | Поиск по родительской категории

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsListFilterGet($name, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectCharacteristicsListFilterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Поиск по родительской категории | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectCharacteristicsListFilterGet200Response**](../Model/ContentV1ObjectCharacteristicsListFilterGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectCharacteristicsObjectNameGet()`

```php
contentV1ObjectCharacteristicsObjectNameGet($object_name): \OpenAPI\Client\Model\ContentV1ObjectCharacteristicsObjectNameGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Характеристики для создания КТ для категории товара

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ для определенной категории товаров. <br> <br> `Важно`: обязательная к заполнению характеристика при создании карточки любого товара - `Предмет`. <br>Значение характеристики `Предмет` соответствует значению параметра `objectName` в запросе.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = Носки; // string | Поиск по наименованию категории

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsObjectNameGet($object_name, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectCharacteristicsObjectNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Поиск по наименованию категории | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectCharacteristicsObjectNameGet200Response**](../Model/ContentV1ObjectCharacteristicsObjectNameGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectParentAllGet()`

```php
contentV1ObjectParentAllGet(): \OpenAPI\Client\Model\ContentV1ObjectParentAllGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Родительские категории товаров

С помощью данного метода можно получить список всех родительских категорий товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectParentAllGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectParentAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectParentAllGet200Response**](../Model/ContentV1ObjectParentAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1InfoGet()`

```php
publicApiV1InfoGet($quantity): \OpenAPI\Client\Model\PublicApiV1InfoGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получение информации о ценах.

Получение информации по номенклатурам, их ценам, скидкам и промокодам. Если не указывать фильтры, вернётся весь товар.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quantity = 56; // int | `2` - товар с нулевым остатком, `1` - товар с ненулевым остатком, `0` - товар с любым остатком

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1InfoGet($quantity, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1InfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quantity** | **int**| &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PublicApiV1InfoGet200Response**](../Model/PublicApiV1InfoGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1PricesPost()`

```php
publicApiV1PricesPost($public_api_v1_prices_post_request_inner)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Загрузка цен

Загрузка цен. За раз можно загрузить не более 1000 номенклатур.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_api_v1_prices_post_request_inner = array(new \OpenAPI\Client\Model\PublicApiV1PricesPostRequestInner()); // \OpenAPI\Client\Model\PublicApiV1PricesPostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->publicApiV1PricesPost($public_api_v1_prices_post_request_inner, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1PricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_api_v1_prices_post_request_inner** | [**\OpenAPI\Client\Model\PublicApiV1PricesPostRequestInner[]**](../Model/PublicApiV1PricesPostRequestInner.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1RevokeDiscountsPost()`

```php
publicApiV1RevokeDiscountsPost($request_body): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сброс скидок для номенклатур

Сброс скидок для номенклатур. При первом запросе ответ будет пустым. При повторной попытке сбросить скидку вернет JSON с id первичного запроса.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | Перечень номенклатур к отмене скидок

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1RevokeDiscountsPost($request_body, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1RevokeDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| Перечень номенклатур к отмене скидок | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1RevokePromocodesPost()`

```php
publicApiV1RevokePromocodesPost($request_body): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сброс промокодов для номенклатур

Сброс промокодов для номенклатур

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | Перечень номенклатур к отмене промокодов

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1RevokePromocodesPost($request_body, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1RevokePromocodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| Перечень номенклатур к отмене промокодов | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1UpdateDiscountsPost()`

```php
publicApiV1UpdateDiscountsPost($public_api_v1_update_discounts_post_request_inner, $activate_from): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Установка скидок

Установка скидок для номенклатур. Максимальное количество номенклатур на запрос - 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_api_v1_update_discounts_post_request_inner = array(new \OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner()); // \OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner[] | Перечень номенклатур
$activate_from = 'activate_from_example'; // string | Дата активации скидки в формате `YYYY-MM-DD` или `YYYY-MM-DD HH:MM:SS`. Если не указывать, скидка начнет действовать сразу.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1UpdateDiscountsPost($public_api_v1_update_discounts_post_request_inner, $activate_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1UpdateDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_api_v1_update_discounts_post_request_inner** | [**\OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner[]**](../Model/PublicApiV1UpdateDiscountsPostRequestInner.md)| Перечень номенклатур | |
| **activate_from** | **string**| Дата активации скидки в формате &#x60;YYYY-MM-DD&#x60; или &#x60;YYYY-MM-DD HH:MM:SS&#x60;. Если не указывать, скидка начнет действовать сразу. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1UpdatePromocodesPost()`

```php
publicApiV1UpdatePromocodesPost($public_api_v1_update_discounts_post_request_inner, $activate_from): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Установка промокодов для номенклатур

Установка промокодов для номенклатур. Максимальное количество номенклатур на запрос - 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_api_v1_update_discounts_post_request_inner = array(new \OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner()); // \OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner[] | Перечень номенклатур
$activate_from = 'activate_from_example'; // string | Дата активации промокада в формате YYYY-MM-DD или YYYY-MM-DD HH:MM:SS. Если не указывать, промокод начнет действовать сразу

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1UpdatePromocodesPost($public_api_v1_update_discounts_post_request_inner, $activate_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1UpdatePromocodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_api_v1_update_discounts_post_request_inner** | [**\OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner[]**](../Model/PublicApiV1UpdateDiscountsPostRequestInner.md)| Перечень номенклатур | |
| **activate_from** | **string**| Дата активации промокада в формате YYYY-MM-DD или YYYY-MM-DD HH:MM:SS. Если не указывать, промокод начнет действовать сразу | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
