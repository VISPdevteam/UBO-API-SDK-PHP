<?php

namespace Ubo\Client\Model;

use \ArrayAccess;

class CustomerBilling implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $uboModelName = 'Customer_billing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $uboTypes = array(
        'tax' => 'string',
        'cycle' => 'string',
        'email' => 'string',
        'method' => 'string',
        'card' => 'string',
        'card_expiry' => 'string',
        'invoice_day' => '\DateTime',
        'invoice_due_day' => '\DateTime',
        'term_start_day' => '\DateTime',
        'auto_pay_day' => '\DateTime'
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
        'tax' => 'tax',
        'cycle' => 'cycle',
        'email' => 'email',
        'method' => 'method',
        'card' => 'card',
        'card_expiry' => 'cardExpiry',
        'invoice_day' => 'invoiceDay',
        'invoice_due_day' => 'invoiceDueDay',
        'term_start_day' => 'termStartDay',
        'auto_pay_day' => 'autoPayDay'
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
        'tax' => 'setTax',
        'cycle' => 'setCycle',
        'email' => 'setEmail',
        'method' => 'setMethod',
        'card' => 'setCard',
        'card_expiry' => 'setCardExpiry',
        'invoice_day' => 'setInvoiceDay',
        'invoice_due_day' => 'setInvoiceDueDay',
        'term_start_day' => 'setTermStartDay',
        'auto_pay_day' => 'setAutoPayDay'
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
        'tax' => 'getTax',
        'cycle' => 'getCycle',
        'email' => 'getEmail',
        'method' => 'getMethod',
        'card' => 'getCard',
        'card_expiry' => 'getCardExpiry',
        'invoice_day' => 'getInvoiceDay',
        'invoice_due_day' => 'getInvoiceDueDay',
        'term_start_day' => 'getTermStartDay',
        'auto_pay_day' => 'getAutoPayDay'
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
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['card_expiry'] = isset($data['card_expiry']) ? $data['card_expiry'] : null;
        $this->container['invoice_day'] = isset($data['invoice_day']) ? $data['invoice_day'] : null;
        $this->container['invoice_due_day'] = isset($data['invoice_due_day']) ? $data['invoice_due_day'] : null;
        $this->container['term_start_day'] = isset($data['term_start_day']) ? $data['term_start_day'] : null;
        $this->container['auto_pay_day'] = isset($data['auto_pay_day']) ? $data['auto_pay_day'] : null;
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
     * Gets tax
     * @return string
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param string $tax
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets cycle
     * @return string
     */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle
     * @param string $cycle
     * @return $this
     */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets card
     * @return string
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param string $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets card_expiry
     * @return string
     */
    public function getCardExpiry()
    {
        return $this->container['card_expiry'];
    }

    /**
     * Sets card_expiry
     * @param string $card_expiry
     * @return $this
     */
    public function setCardExpiry($card_expiry)
    {
        $this->container['card_expiry'] = $card_expiry;

        return $this;
    }

    /**
     * Gets invoice_day
     * @return \DateTime
     */
    public function getInvoiceDay()
    {
        return $this->container['invoice_day'];
    }

    /**
     * Sets invoice_day
     * @param \DateTime $invoice_day
     * @return $this
     */
    public function setInvoiceDay($invoice_day)
    {
        $this->container['invoice_day'] = $invoice_day;

        return $this;
    }

    /**
     * Gets invoice_due_day
     * @return \DateTime
     */
    public function getInvoiceDueDay()
    {
        return $this->container['invoice_due_day'];
    }

    /**
     * Sets invoice_due_day
     * @param \DateTime $invoice_due_day
     * @return $this
     */
    public function setInvoiceDueDay($invoice_due_day)
    {
        $this->container['invoice_due_day'] = $invoice_due_day;

        return $this;
    }

    /**
     * Gets term_start_day
     * @return \DateTime
     */
    public function getTermStartDay()
    {
        return $this->container['term_start_day'];
    }

    /**
     * Sets term_start_day
     * @param \DateTime $term_start_day
     * @return $this
     */
    public function setTermStartDay($term_start_day)
    {
        $this->container['term_start_day'] = $term_start_day;

        return $this;
    }

    /**
     * Gets auto_pay_day
     * @return \DateTime
     */
    public function getAutoPayDay()
    {
        return $this->container['auto_pay_day'];
    }

    /**
     * Sets auto_pay_day
     * @param \DateTime $auto_pay_day
     * @return $this
     */
    public function setAutoPayDay($auto_pay_day)
    {
        $this->container['auto_pay_day'] = $auto_pay_day;

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


