<?php
/**
 * ExcItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API продавца
 *
 * # Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid ;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center } </style> Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)  <ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>  ## Поддержка <br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс.   ## Авторизация Вызов любого метода API должен быть авторизован.  Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api) для статистики   и [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api) для остальных методов.   Ключ должен передаваться в каждом HTTP-запросе.   ### Авторизация для методов Статистики При работе с методами Статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к API\". <br>Созданный ключ отображается в личном кабинете как \"Ключ для работы с API статистики x64\". <br>Его следует скопировать и добавлять в каждый запрос, прибавляя к запросу параметр `key`. <br>Выглядеть запрос будет примерно так: `https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2022-03-25&key=xxxxxxxxxx`    ### Авторизация для нестатистических методов При работе со всеми методами кроме статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к новому API\". <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: xxxxxxxxxx`.  ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>   ## Release Notes  #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *
 *
 * The version of the OpenAPI document: 1.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ExcItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExcItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExcItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'finished_price' => 'float',
        'operation_type_id' => 'int',
        'fiscal_dt' => '\DateTime',
        'doc_number' => 'int',
        'fn_number' => 'string',
        'reg_number' => 'string',
        'excise' => 'string',
        'date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'finished_price' => null,
        'operation_type_id' => null,
        'fiscal_dt' => 'date-time',
        'doc_number' => null,
        'fn_number' => null,
        'reg_number' => null,
        'excise' => null,
        'date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'finished_price' => false,
		'operation_type_id' => false,
		'fiscal_dt' => false,
		'doc_number' => false,
		'fn_number' => false,
		'reg_number' => false,
		'excise' => false,
		'date' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'finished_price' => 'finishedPrice',
        'operation_type_id' => 'operationTypeId',
        'fiscal_dt' => 'fiscalDt',
        'doc_number' => 'docNumber',
        'fn_number' => 'fnNumber',
        'reg_number' => 'regNumber',
        'excise' => 'excise',
        'date' => 'date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'finished_price' => 'setFinishedPrice',
        'operation_type_id' => 'setOperationTypeId',
        'fiscal_dt' => 'setFiscalDt',
        'doc_number' => 'setDocNumber',
        'fn_number' => 'setFnNumber',
        'reg_number' => 'setRegNumber',
        'excise' => 'setExcise',
        'date' => 'setDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'finished_price' => 'getFinishedPrice',
        'operation_type_id' => 'getOperationTypeId',
        'fiscal_dt' => 'getFiscalDt',
        'doc_number' => 'getDocNumber',
        'fn_number' => 'getFnNumber',
        'reg_number' => 'getRegNumber',
        'excise' => 'getExcise',
        'date' => 'getDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('finished_price', $data ?? [], null);
        $this->setIfExists('operation_type_id', $data ?? [], null);
        $this->setIfExists('fiscal_dt', $data ?? [], null);
        $this->setIfExists('doc_number', $data ?? [], null);
        $this->setIfExists('fn_number', $data ?? [], null);
        $this->setIfExists('reg_number', $data ?? [], null);
        $this->setIfExists('excise', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Внутренний код операции
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets finished_price
     *
     * @return float|null
     */
    public function getFinishedPrice()
    {
        return $this->container['finished_price'];
    }

    /**
     * Sets finished_price
     *
     * @param float|null $finished_price Цена товара с учетом НДС
     *
     * @return self
     */
    public function setFinishedPrice($finished_price)
    {

        if (is_null($finished_price)) {
            throw new \InvalidArgumentException('non-nullable finished_price cannot be null');
        }

        $this->container['finished_price'] = $finished_price;

        return $this;
    }

    /**
     * Gets operation_type_id
     *
     * @return int|null
     */
    public function getOperationTypeId()
    {
        return $this->container['operation_type_id'];
    }

    /**
     * Sets operation_type_id
     *
     * @param int|null $operation_type_id Тип операции (`1` - продажа, `2` - возврат)
     *
     * @return self
     */
    public function setOperationTypeId($operation_type_id)
    {

        if (is_null($operation_type_id)) {
            throw new \InvalidArgumentException('non-nullable operation_type_id cannot be null');
        }

        $this->container['operation_type_id'] = $operation_type_id;

        return $this;
    }

    /**
     * Gets fiscal_dt
     *
     * @return \DateTime|null
     */
    public function getFiscalDt()
    {
        return $this->container['fiscal_dt'];
    }

    /**
     * Sets fiscal_dt
     *
     * @param \DateTime|null $fiscal_dt Время фискализации. Передается с указанием часового пояса.
     *
     * @return self
     */
    public function setFiscalDt($fiscal_dt)
    {

        if (is_null($fiscal_dt)) {
            throw new \InvalidArgumentException('non-nullable fiscal_dt cannot be null');
        }

        $this->container['fiscal_dt'] = $fiscal_dt;

        return $this;
    }

    /**
     * Gets doc_number
     *
     * @return int|null
     */
    public function getDocNumber()
    {
        return $this->container['doc_number'];
    }

    /**
     * Sets doc_number
     *
     * @param int|null $doc_number Номер фискального документа
     *
     * @return self
     */
    public function setDocNumber($doc_number)
    {

        if (is_null($doc_number)) {
            throw new \InvalidArgumentException('non-nullable doc_number cannot be null');
        }

        $this->container['doc_number'] = $doc_number;

        return $this;
    }

    /**
     * Gets fn_number
     *
     * @return string|null
     */
    public function getFnNumber()
    {
        return $this->container['fn_number'];
    }

    /**
     * Sets fn_number
     *
     * @param string|null $fn_number Номер фискального накопителя
     *
     * @return self
     */
    public function setFnNumber($fn_number)
    {

        if (is_null($fn_number)) {
            throw new \InvalidArgumentException('non-nullable fn_number cannot be null');
        }

        $this->container['fn_number'] = $fn_number;

        return $this;
    }

    /**
     * Gets reg_number
     *
     * @return string|null
     */
    public function getRegNumber()
    {
        return $this->container['reg_number'];
    }

    /**
     * Sets reg_number
     *
     * @param string|null $reg_number Регистрационный номер ККТ
     *
     * @return self
     */
    public function setRegNumber($reg_number)
    {

        if (is_null($reg_number)) {
            throw new \InvalidArgumentException('non-nullable reg_number cannot be null');
        }

        $this->container['reg_number'] = $reg_number;

        return $this;
    }

    /**
     * Gets excise
     *
     * @return string|null
     */
    public function getExcise()
    {
        return $this->container['excise'];
    }

    /**
     * Sets excise
     *
     * @param string|null $excise Акциз (он же киз)
     *
     * @return self
     */
    public function setExcise($excise)
    {

        if (is_null($excise)) {
            throw new \InvalidArgumentException('non-nullable excise cannot be null');
        }

        $this->container['excise'] = $excise;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Дата появления данных в системе. Передается с указанием часового пояса.
     *
     * @return self
     */
    public function setDate($date)
    {

        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        $this->container['date'] = $date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


