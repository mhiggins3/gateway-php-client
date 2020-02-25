<?php
/**
 * Availability
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * External Gateway API
 *
 * External Gateway API - This API provides the ability for Xplorie to find availability of attractions, to place a booking, reteieve a booking and cancel a booking with RMS provides via a common API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: mark@datapointpartners.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
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
 * Availability Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Availability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Availability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availability_id' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'capacity' => 'int',
        'customer_types' => '\OpenAPI\Client\Model\CustomerType[]',
        'product' => '\OpenAPI\Client\Model\ProductInfo',
        'limitations' => '\OpenAPI\Client\Model\Limitation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'availability_id' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'capacity' => null,
        'customer_types' => null,
        'product' => null,
        'limitations' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'availability_id' => 'availabilityId',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'capacity' => 'capacity',
        'customer_types' => 'customerTypes',
        'product' => 'product',
        'limitations' => 'limitations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_id' => 'setAvailabilityId',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'capacity' => 'setCapacity',
        'customer_types' => 'setCustomerTypes',
        'product' => 'setProduct',
        'limitations' => 'setLimitations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_id' => 'getAvailabilityId',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'capacity' => 'getCapacity',
        'customer_types' => 'getCustomerTypes',
        'product' => 'getProduct',
        'limitations' => 'getLimitations'
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
        $this->container['availability_id'] = isset($data['availability_id']) ? $data['availability_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['customer_types'] = isset($data['customer_types']) ? $data['customer_types'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['limitations'] = isset($data['limitations']) ? $data['limitations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['availability_id'] === null) {
            $invalidProperties[] = "'availability_id' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ($this->container['capacity'] === null) {
            $invalidProperties[] = "'capacity' can't be null";
        }
        if ($this->container['customer_types'] === null) {
            $invalidProperties[] = "'customer_types' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
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
     * Gets availability_id
     *
     * @return string
     */
    public function getAvailabilityId()
    {
        return $this->container['availability_id'];
    }

    /**
     * Sets availability_id
     *
     * @param string $availability_id A unique availability code provided by the rms for an availability
     *
     * @return $this
     */
    public function setAvailabilityId($availability_id)
    {
        $this->container['availability_id'] = $availability_id;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time The start time of the availability
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time The end time of the availability
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int $capacity The number of spaces avaiable
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets customer_types
     *
     * @return \OpenAPI\Client\Model\CustomerType[]
     */
    public function getCustomerTypes()
    {
        return $this->container['customer_types'];
    }

    /**
     * Sets customer_types
     *
     * @param \OpenAPI\Client\Model\CustomerType[] $customer_types customer type spefic info for the availability
     *
     * @return $this
     */
    public function setCustomerTypes($customer_types)
    {
        $this->container['customer_types'] = $customer_types;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\Client\Model\ProductInfo
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Model\ProductInfo $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets limitations
     *
     * @return \OpenAPI\Client\Model\Limitation[]|null
     */
    public function getLimitations()
    {
        return $this->container['limitations'];
    }

    /**
     * Sets limitations
     *
     * @param \OpenAPI\Client\Model\Limitation[]|null $limitations Any limitations the availability has
     *
     * @return $this
     */
    public function setLimitations($limitations)
    {
        $this->container['limitations'] = $limitations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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

