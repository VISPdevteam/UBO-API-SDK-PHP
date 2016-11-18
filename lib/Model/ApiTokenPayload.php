<?php

namespace Ubo\Client\Model;

use \ArrayAccess;

class ApiTokenPayload implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $uboModelName = 'ApiToken_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $uboTypes = array(
        'client_id' => 'string',
        'environment' => 'string',
        'isp_id' => 'int[]',
        'iat' => 'int',
        'exp' => 'int',
        'aud' => 'string',
        'iss' => 'string',
        'jti' => 'string'
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
        'client_id' => 'clientId',
        'environment' => 'environment',
        'isp_id' => 'ispId',
        'iat' => 'iat',
        'exp' => 'exp',
        'aud' => 'aud',
        'iss' => 'iss',
        'jti' => 'jti'
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
        'client_id' => 'setClientId',
        'environment' => 'setEnvironment',
        'isp_id' => 'setIspId',
        'iat' => 'setIat',
        'exp' => 'setExp',
        'aud' => 'setAud',
        'iss' => 'setIss',
        'jti' => 'setJti'
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
        'client_id' => 'getClientId',
        'environment' => 'getEnvironment',
        'isp_id' => 'getIspId',
        'iat' => 'getIat',
        'exp' => 'getExp',
        'aud' => 'getAud',
        'iss' => 'getIss',
        'jti' => 'getJti'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['isp_id'] = isset($data['isp_id']) ? $data['isp_id'] : null;
        $this->container['iat'] = isset($data['iat']) ? $data['iat'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['iss'] = isset($data['iss']) ? $data['iss'] : null;
        $this->container['jti'] = isset($data['jti']) ? $data['jti'] : null;
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
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets environment
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     * @param string $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets isp_id
     * @return int[]
     */
    public function getIspId()
    {
        return $this->container['isp_id'];
    }

    /**
     * Sets isp_id
     * @param int[] $isp_id
     * @return $this
     */
    public function setIspId($isp_id)
    {
        $this->container['isp_id'] = $isp_id;

        return $this;
    }

    /**
     * Gets iat
     * @return int
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     * @param int $iat
     * @return $this
     */
    public function setIat($iat)
    {
        $this->container['iat'] = $iat;

        return $this;
    }

    /**
     * Gets exp
     * @return int
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     * @param int $exp
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets aud
     * @return string
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     * @param string $aud
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets iss
     * @return string
     */
    public function getIss()
    {
        return $this->container['iss'];
    }

    /**
     * Sets iss
     * @param string $iss
     * @return $this
     */
    public function setIss($iss)
    {
        $this->container['iss'] = $iss;

        return $this;
    }

    /**
     * Gets jti
     * @return string
     */
    public function getJti()
    {
        return $this->container['jti'];
    }

    /**
     * Sets jti
     * @param string $jti
     * @return $this
     */
    public function setJti($jti)
    {
        $this->container['jti'] = $jti;

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


