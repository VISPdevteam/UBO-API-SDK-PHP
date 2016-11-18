<?php

namespace Ubo\Client\Model;

use \ArrayAccess;

class CustomerPrimaryAccount implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $uboModelName = 'Customer_primaryAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $uboTypes = array(
        'customer_id' => 'int',
        'username' => 'string',
        'password' => 'string',
        'os' => 'string',
        'previous_isp' => 'string',
        'paid_thru' => '\DateTime',
        'setup_date' => '\DateTime',
        'location_id' => 'int',
        'status' => 'string'
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
        'customer_id' => 'customerId',
        'username' => 'username',
        'password' => 'password',
        'os' => 'os',
        'previous_isp' => 'previousIsp',
        'paid_thru' => 'paidThru',
        'setup_date' => 'setupDate',
        'location_id' => 'locationId',
        'status' => 'status'
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
        'customer_id' => 'setCustomerId',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'os' => 'setOs',
        'previous_isp' => 'setPreviousIsp',
        'paid_thru' => 'setPaidThru',
        'setup_date' => 'setSetupDate',
        'location_id' => 'setLocationId',
        'status' => 'setStatus'
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
        'customer_id' => 'getCustomerId',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'os' => 'getOs',
        'previous_isp' => 'getPreviousIsp',
        'paid_thru' => 'getPaidThru',
        'setup_date' => 'getSetupDate',
        'location_id' => 'getLocationId',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_PAID_UP = 'Paid Up';
    const STATUS_DUE = 'Due';
    const STATUS_PAST_DUE = 'Past Due';
    const STATUS_SUSPENDED = 'Suspended';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_DELETED = 'Deleted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PAID_UP,
            self::STATUS_DUE,
            self::STATUS_PAST_DUE,
            self::STATUS_SUSPENDED,
            self::STATUS_INACTIVE,
            self::STATUS_DELETED,
        ];
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['previous_isp'] = isset($data['previous_isp']) ? $data['previous_isp'] : null;
        $this->container['paid_thru'] = isset($data['paid_thru']) ? $data['paid_thru'] : null;
        $this->container['setup_date'] = isset($data['setup_date']) ? $data['setup_date'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("Paid Up", "Due", "Past Due", "Suspended", "Inactive", "Deleted");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

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
        $allowed_values = array("Paid Up", "Due", "Past Due", "Suspended", "Inactive", "Deleted");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets os
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param string $os
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets previous_isp
     * @return string
     */
    public function getPreviousIsp()
    {
        return $this->container['previous_isp'];
    }

    /**
     * Sets previous_isp
     * @param string $previous_isp
     * @return $this
     */
    public function setPreviousIsp($previous_isp)
    {
        $this->container['previous_isp'] = $previous_isp;

        return $this;
    }

    /**
     * Gets paid_thru
     * @return \DateTime
     */
    public function getPaidThru()
    {
        return $this->container['paid_thru'];
    }

    /**
     * Sets paid_thru
     * @param \DateTime $paid_thru
     * @return $this
     */
    public function setPaidThru($paid_thru)
    {
        $this->container['paid_thru'] = $paid_thru;

        return $this;
    }

    /**
     * Gets setup_date
     * @return \DateTime
     */
    public function getSetupDate()
    {
        return $this->container['setup_date'];
    }

    /**
     * Sets setup_date
     * @param \DateTime $setup_date
     * @return $this
     */
    public function setSetupDate($setup_date)
    {
        $this->container['setup_date'] = $setup_date;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Customer Status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('Paid Up', 'Due', 'Past Due', 'Suspended', 'Inactive', 'Deleted');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'Paid Up', 'Due', 'Past Due', 'Suspended', 'Inactive', 'Deleted'");
        }
        $this->container['status'] = $status;

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


