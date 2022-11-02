# OpenAPI\Client\MarketplaceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2OrdersGet()**](MarketplaceApi.md#apiV2OrdersGet) | **GET** /api/v2/orders | Список сборочных заданий |
| [**apiV2OrdersPut()**](MarketplaceApi.md#apiV2OrdersPut) | **PUT** /api/v2/orders | Обновление статуса сборочных заданий |
| [**apiV2OrdersStickersPdfPost()**](MarketplaceApi.md#apiV2OrdersStickersPdfPost) | **POST** /api/v2/orders/stickers/pdf | Cписок QR стикеров в формате pdf |
| [**apiV2OrdersStickersPost()**](MarketplaceApi.md#apiV2OrdersStickersPost) | **POST** /api/v2/orders/stickers | Cписок этикеток сборочных заданий |
| [**apiV2StocksDelete()**](MarketplaceApi.md#apiV2StocksDelete) | **DELETE** /api/v2/stocks | Удаление остатков товара |
| [**apiV2StocksGet()**](MarketplaceApi.md#apiV2StocksGet) | **GET** /api/v2/stocks | Список товаров с остатками |
| [**apiV2StocksPost()**](MarketplaceApi.md#apiV2StocksPost) | **POST** /api/v2/stocks | Обновление остатков товара |
| [**apiV2SuppliesGet()**](MarketplaceApi.md#apiV2SuppliesGet) | **GET** /api/v2/supplies | Список поставок |
| [**apiV2SuppliesIdBarcodeGet()**](MarketplaceApi.md#apiV2SuppliesIdBarcodeGet) | **GET** /api/v2/supplies/{id}/barcode | Штрихкод поставки в заданном формате |
| [**apiV2SuppliesIdClosePost()**](MarketplaceApi.md#apiV2SuppliesIdClosePost) | **POST** /api/v2/supplies/{id}/close | Закрытие поставки |
| [**apiV2SuppliesIdOrdersGet()**](MarketplaceApi.md#apiV2SuppliesIdOrdersGet) | **GET** /api/v2/supplies/{id}/orders | Список заказов, закреплённых за поставкой |
| [**apiV2SuppliesIdPut()**](MarketplaceApi.md#apiV2SuppliesIdPut) | **PUT** /api/v2/supplies/{id} | Добавление к поставке заказов |
| [**apiV2SuppliesPost()**](MarketplaceApi.md#apiV2SuppliesPost) | **POST** /api/v2/supplies | Новая поставка |
| [**apiV2WarehousesGet()**](MarketplaceApi.md#apiV2WarehousesGet) | **GET** /api/v2/warehouses | Cписок складов |


## `apiV2OrdersGet()`

```php
apiV2OrdersGet($date_start, $skip, $take, $date_end, $status, $id): \OpenAPI\Client\Model\ApiV2OrdersGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список сборочных заданий

Метод возвращает список сборочных заданий поставщика. <br> <br> При выборе промежутка времени заказы следует забирать с помощью параметров `skip` и `take`, не более чем 1000 за один запрос. Параметр `total` подсказывает, сколько всего заказов было сделано за текущий промежуток времени. <br> <br> При отправке параметров `date_start` и `date_end` обратите внимание, что часовой пояс в формате <b>RFC3339</b> передается как `2021-09-30T17:14:52+03:00`, а время в UTC как `2021-09-30T17:14:52Z`. В то же время, знак `+` является зарезервированным в стандарте <b>RFC3986</b>. Поэтому чтобы корректно передать часовой пояс, необходимо передавать дату после обработки методом urlencode (или его аналогом). <br> <br> Ответ содержит два разных поля о статусе заказа (см. описание в схеме ответа): <ul>   <li>`status` - это то что меняет поставщик (метод <b>PUT /api/v2/orders</b>). Он учитывается для расчета опозданий и используется для отображения движения заказа.</li>   <li>`userStatus` - используется только для чтения, менять его нельзя. Это статус со стороны клиента. По нему можно понять, делал ли клиент отмену или возврат по причине брака.</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_start = 2022-03-02T19:30:16Z; // string | С какой даты вернуть сборочные задания (заказы). <br>Дата в формате RFC3339. Нужно передать дату со временем. <br>Время можно указывать с точностью до секунд или миллисекунд. <br>Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br>Примеры: <ul> <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T00:00:00.12345Z` </ul>
$skip = 0; // int | Сколько записей пропустить.
$take = 10; // int | Сколько записей вернуть за раз.
$date_end = 2022-05-02T19:30:16Z; // string | По какую дату вернуть сборочные задания (заказы) (в формате `RFC3339`)
$status = 2; // int | Статус заказа.
$id = 123456; // int | Идентификатор сборочного задания, если нужно получить данные по определенному заказу.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2OrdersGet($date_start, $skip, $take, $date_end, $status, $id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2OrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_start** | **string**| С какой даты вернуть сборочные задания (заказы). &lt;br&gt;Дата в формате RFC3339. Нужно передать дату со временем. &lt;br&gt;Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt;Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;/ul&gt; | |
| **skip** | **int**| Сколько записей пропустить. | |
| **take** | **int**| Сколько записей вернуть за раз. | |
| **date_end** | **string**| По какую дату вернуть сборочные задания (заказы) (в формате &#x60;RFC3339&#x60;) | [optional] |
| **status** | **int**| Статус заказа. | [optional] |
| **id** | **int**| Идентификатор сборочного задания, если нужно получить данные по определенному заказу. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2OrdersGet200Response**](../Model/ApiV2OrdersGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersPut()`

```php
apiV2OrdersPut($api_v2_orders_get_request_inner)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Обновление статуса сборочных заданий

Метод обновляет статус переданных сборочных заданий. <br> <br> <h2>Порядок работы со статусами для разного типа логистики</h2> Если заказ для любого типа логистики не может быть выполнен по любой причине, поставщик ставит статус <b>3 (\"Отклонено\")</b>.Переводить заказ в отмену можно из любого статуса, кроме конечного. Т.е. заказ в статусах <b>2 (\"Собрано\")</b>, <b>6 (\"Клиент получил товар\")</b>, <b>7 (\"Клиент не принял заказ\")</b> отменить уже нельзя. <h3>Доставка на склад WB.</h3>   <ul>     <li>Заказ приходит в статусе <b>0 (\"Новый\")</b>.</li>     <li>Поставщик принимает заказ и ставит статус <b>1 (\"В работе\")</b>.</li>     <li>Заказ собран, поставщик ставит статус <b>2 (\"Завершено\")</b>. После этого заказ должен быть доставлен на склад Wildberries в указанный срок.</li>   </ul> <h3>Доставка самостоятельно до клиента.</h3>    <ul>     <li>Заказ приходит в статусе <b>0 (\"Новый\")</b>.</li>     <li>Поставщик принимает заказ и ставит статус <b>1 (\"В работе\")</b>.</li>     <li>Если заказ собран и его передали курьеру, поставщик ставит статус <b>5 (\"Доставка курьером\")</b>.</li>     <li>Если заказ успешно доставлен клиенту, поставщик ставит статус <b>6 (\"Клиент принял заказ\")</b>.</li>     <li>Если клиент отказался от заказа, т.е. курьер не отдал его, поставщик ставит статус <b>7 (\"Клиент не принял заказ\")</b>.</li>   </ul> <h3>Самовывоз клиентом из магазина.</h3>   <ul>     <li>Заказ приходит в статусе <b>0 (\"Новый\")</b>.</li>     <li>Поставщик принимает заказ и ставит статус <b>1 (\"В работе\")</b>.</li>     <li>Когда заказ готов к выдаче, поставщик статус <b>9 (\"Готово к выдаче\")</b>.</li>     <li>Если клиент забрал заказ из точки самовывоза, поставщик ставит статус <b>6 (\"Клиент забрал заказ\")</b>.</li>     <li>Если клиент отказался от заказа, поставщик ставит статус <b> 7 (\"Клиент не принял заказ\")</b>.</li>   </ul> <h3>Отправка КИЗов товара.</h3>   <ul>     <li>Требуется только для фармацевтической продукции. При отправке КИЗов на заказы, где они не требуются, вернётся ошибка 400.</li>     <li>Отправлять КИЗЫ нужно при переводе заказов в статус <b>6 (\"Клиент забрал заказ\")</b>.</li>   </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v2_orders_get_request_inner = array(new \OpenAPI\Client\Model\ApiV2OrdersGetRequestInner()); // \OpenAPI\Client\Model\ApiV2OrdersGetRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV2OrdersPut($api_v2_orders_get_request_inner, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2OrdersPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v2_orders_get_request_inner** | [**\OpenAPI\Client\Model\ApiV2OrdersGetRequestInner[]**](../Model/ApiV2OrdersGetRequestInner.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersStickersPdfPost()`

```php
apiV2OrdersStickersPdfPost($request_body_stickers): \OpenAPI\Client\Model\ApiV2OrdersStickersPdfPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Cписок QR стикеров в формате pdf

Ограничения при работе с методом. <ul>   <li>Нельзя запросить больше 1000 этикеток за раз (не более 1000 ID заказов в запросе).</li>   <li>Метод возвращает этикетки только для заказов, взятых в работу (в статусе 1 и дальше).</li> <ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body_stickers = new \OpenAPI\Client\Model\RequestBodyStickers(); // \OpenAPI\Client\Model\RequestBodyStickers

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2OrdersStickersPdfPost($request_body_stickers, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2OrdersStickersPdfPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body_stickers** | [**\OpenAPI\Client\Model\RequestBodyStickers**](../Model/RequestBodyStickers.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2OrdersStickersPdfPost200Response**](../Model/ApiV2OrdersStickersPdfPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrdersStickersPost()`

```php
apiV2OrdersStickersPost($request_body_stickers): \OpenAPI\Client\Model\ApiV2OrdersStickersPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Cписок этикеток сборочных заданий

Возвращает список QR этикеток по переданному массиву сборочных заданий. <h3>Ограничения при работе с методом.</h3> <ol>   <li>Нельзя запросить больше 1000 этикеток за раз (не более 1000 ID заказов в запросе).</li>   <li>Метод возвращает этикетки только для заказов, взятых в работу (в статусе 1 и дальше).</li> <ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body_stickers = new \OpenAPI\Client\Model\RequestBodyStickers(); // \OpenAPI\Client\Model\RequestBodyStickers

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2OrdersStickersPost($request_body_stickers, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2OrdersStickersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body_stickers** | [**\OpenAPI\Client\Model\RequestBodyStickers**](../Model/RequestBodyStickers.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2OrdersStickersPost200Response**](../Model/ApiV2OrdersStickersPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StocksDelete()`

```php
apiV2StocksDelete($api_v2_stocks_delete_request_inner1): \OpenAPI\Client\Model\ApiV2StocksDelete200Response2
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удаление остатков товара

Удаление остатков товара. <b>Внимание! Действие необратимо</b>. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v2_stocks_delete_request_inner1 = array(new \OpenAPI\Client\Model\ApiV2StocksDeleteRequestInner1()); // \OpenAPI\Client\Model\ApiV2StocksDeleteRequestInner1[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2StocksDelete($api_v2_stocks_delete_request_inner1, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2StocksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v2_stocks_delete_request_inner1** | [**\OpenAPI\Client\Model\ApiV2StocksDeleteRequestInner1[]**](../Model/ApiV2StocksDeleteRequestInner1.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2StocksDelete200Response2**](../Model/ApiV2StocksDelete200Response2.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StocksGet()`

```php
apiV2StocksGet($skip, $take, $search): \OpenAPI\Client\Model\ApiV2StocksDelete200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список товаров с остатками

Возвращает список товаров поставщика с их остатками.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | Сколько записей пропустить (для пагинации).
$take = 1; // int | Сколько записей выдать (для пагинации).
$search = string; // string | Поиск по всем полям таблицы.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2StocksGet($skip, $take, $search, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2StocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| Сколько записей пропустить (для пагинации). | |
| **take** | **int**| Сколько записей выдать (для пагинации). | |
| **search** | **string**| Поиск по всем полям таблицы. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2StocksDelete200Response**](../Model/ApiV2StocksDelete200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2StocksPost()`

```php
apiV2StocksPost($api_v2_stocks_delete_request_inner): \OpenAPI\Client\Model\ApiV2StocksDelete200Response1
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Обновление остатков товара

Обновление остатков товара.  <br> За раз можно загрузить `1000` строк.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v2_stocks_delete_request_inner = array(new \OpenAPI\Client\Model\ApiV2StocksDeleteRequestInner()); // \OpenAPI\Client\Model\ApiV2StocksDeleteRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2StocksPost($api_v2_stocks_delete_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2StocksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v2_stocks_delete_request_inner** | [**\OpenAPI\Client\Model\ApiV2StocksDeleteRequestInner[]**](../Model/ApiV2StocksDeleteRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2StocksDelete200Response1**](../Model/ApiV2StocksDelete200Response1.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SuppliesGet()`

```php
apiV2SuppliesGet($status): \OpenAPI\Client\Model\ApiV2SuppliesGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список поставок

Список поставок.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | `ACTIVE` - активные поставки, `ON_DELIVERY` - поставки в пути (которые ещё не приняты на складе).

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2SuppliesGet($status, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2SuppliesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| &#x60;ACTIVE&#x60; - активные поставки, &#x60;ON_DELIVERY&#x60; - поставки в пути (которые ещё не приняты на складе). | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2SuppliesGet200Response**](../Model/ApiV2SuppliesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SuppliesIdBarcodeGet()`

```php
apiV2SuppliesIdBarcodeGet($type, $id): \OpenAPI\Client\Model\ApiV2SuppliesIdBarcodeGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Штрихкод поставки в заданном формате

Возвращает штрихкод поставки в заданном формате: <b>pdf</b> или <b>svg</b>. <br> Штрихкод генерируется в формате <b>code-128</b>. <br> Массив байтов передаётся закодированным в <b>base64</b>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Формат штрихкода.
$id = WB-GI-1234567; // string | Идентификатор поставки.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2SuppliesIdBarcodeGet($type, $id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2SuppliesIdBarcodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Формат штрихкода. | |
| **id** | **string**| Идентификатор поставки. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2SuppliesIdBarcodeGet200Response**](../Model/ApiV2SuppliesIdBarcodeGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SuppliesIdClosePost()`

```php
apiV2SuppliesIdClosePost($id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Закрытие поставки

Закрывает поставку. <br> Для закрытия поставки требуется хотя бы один закреплённый за ней заказ. <br> После закрытия к поставке нельзя будет добавить новые заказы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = WB-GI-1234567; // string | Идентификатор поставки.

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV2SuppliesIdClosePost($id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2SuppliesIdClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Идентификатор поставки. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SuppliesIdOrdersGet()`

```php
apiV2SuppliesIdOrdersGet($id): \OpenAPI\Client\Model\ApiV2SuppliesIdOrdersGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список заказов, закреплённых за поставкой

Список заказов, закреплённых за поставкой.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = WB-GI-1234567; // string | Идентификатор поставки.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2SuppliesIdOrdersGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2SuppliesIdOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Идентификатор поставки. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2SuppliesIdOrdersGet200Response**](../Model/ApiV2SuppliesIdOrdersGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SuppliesIdPut()`

```php
apiV2SuppliesIdPut($id, $api_v2_supplies_id_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление к поставке заказов

Добавляет к поставке заказы и переводит их в статус 1 (\"В сборке\").

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = WB-GI-1234567; // string | Идентификатор поставки.
$api_v2_supplies_id_put_request = new \OpenAPI\Client\Model\ApiV2SuppliesIdPutRequest(); // \OpenAPI\Client\Model\ApiV2SuppliesIdPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV2SuppliesIdPut($id, $api_v2_supplies_id_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2SuppliesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Идентификатор поставки. | |
| **api_v2_supplies_id_put_request** | [**\OpenAPI\Client\Model\ApiV2SuppliesIdPutRequest**](../Model/ApiV2SuppliesIdPutRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2SuppliesPost()`

```php
apiV2SuppliesPost(): \OpenAPI\Client\Model\ApiV2SuppliesGet201Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Новая поставка

Создание новой поставки. <br> <br> Ограничения работы с поставками: <ul>   <li>При добавлении в поставку все заказы в статусе <b>0 (новый)</b> будут автоматически переведены в статус <b>1 (в работе)</b>.</li>   <li>Вы можете как обычно переводить статусы вручную отдельными вызовами на <b>PUT /api/v2/orders</b>.</li>   <li>Обратите внимание, что если вы переведёте заказ в статус <b>3 (\"Отмена\")</b>, то заказ автоматически удалится из поставки, если был прикреплён к ней.</li> </ul> Порядок работы: <ol>   <li>Создайте новую поставку с помощью метода <b>POST /api/v2/supplies</b>. В ответ вернется идентификатор созданной поставки в формате <b>\"WB-GI-1234567\"</b>.</li>   <li>Штрихкод поставки можно получить методом <b>GET /api/v2/supplies/{id поставки}/barcode</b> в формате <b>pdf</b> или <b>svg</b>. Штрихкод генерируется в формате code-128. Файл приходит в массиве байтов, закодированном в base64.</li>   <li>В текущую открытую поставку нужно добавить заказы, которые вы повезёте на склад, методом <b>PUT /api/v2/supplies/{id поставки}</b>. Обратите внимание, что при добавлении заказов к поставке они будут автоматически приняты в работу, т.е. переведены в статус 1.</li>   <li>После добавления заказов к поставке, вы можете получить этикетки с помощью метода <b>POST /api/v2/orders/stickers</b>. Обратите внимание, что стикеры для заказа можно получить только в промежуток между открытием и закрытием соответствующей поставки.</li>   <li>После того как поставка будет упомплектована нужными заказами, необходимо ее закрыть с помощью метода <b>POST /api/v2/supplies/{id поставки}/close</b>.</li>   <li>Заказы, добавленные к поставке, можно получить методом <b>GET /api/v2/supplies/{id поставки}/orders</b>.</li>   <li>Все активные поставки, а также поставки в пути, можно получить методом <b>GET /api/v2/supplies</b>.</li> </ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2SuppliesPost($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2SuppliesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2SuppliesGet201Response**](../Model/ApiV2SuppliesGet201Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WarehousesGet()`

```php
apiV2WarehousesGet(): \OpenAPI\Client\Model\ApiV2WarehousesGet200ResponseInner[]
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Cписок складов

Cписок складов поставщика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2WarehousesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV2WarehousesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2WarehousesGet200ResponseInner[]**](../Model/ApiV2WarehousesGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
