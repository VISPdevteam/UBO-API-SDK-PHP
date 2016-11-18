<?php

namespace Ubo\Client\Model;

use \ArrayAccess;

class Customer implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $uboModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $uboTypes = array(
        'subscriber' => '\Ubo\Client\Model\CustomerSubscriber',
        'billing' => '\Ubo\Client\Model\CustomerBilling',
        'primary_account' => '\Ubo\Client\Model\CustomerPrimaryAccount'
    );

    public static function uboTypes()
    {
        return self::$uboTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'subscriber' => 'subscriber',
        'billing' => 'billing',
        'primary_account' => 'primaryAccount'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'subscriber' => 'setSubscriber',
        'billing' => 'setBilling',
        'primary_account' => 'setPrimaryAccount'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'subscriber' => 'getSubscriber',
        'billing' => 'getBilling',
        'primary_account' => 'getPrimaryAccount'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['subscriber'] = isset($data['subscriber']) ? $data['subscriber'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['primary_account'] = isset($data['primary_account']) ? $data['primary_account'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets subscriber
     * @return \Ubo\Client\Model\CustomerSubscriber
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     * @param \Ubo\Client\Model\CustomerSubscriber $subscriber
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->container['subscriber'] = $subscriber;

        return $this;
    }

    /**
     * Gets billing
     * @return \Ubo\Client\Model\CustomerBilling
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     * @param \Ubo\Client\Model\CustomerBilling $billing
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets primary_account
     * @return \Ubo\Client\Model\CustomerPrimaryAccount
     */
    public function getPrimaryAccount()
    {
        return $this->container['primary_account'];
    }

    /**
     * Sets primary_account
     * @param \Ubo\Client\Model\CustomerPrimaryAccount $primary_account
     * @return $this
     */
    public function setPrimaryAccount($primary_account)
    {
        $this->container['primary_account'] = $primary_account;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Ubo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Ubo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


