<?php
/**
 * StandalonePaymentDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * finAPI Web Form 2.0
 *
 * The following pages give you some general information on how to use our APIs.<br/>The actual API services documentation then follows further below. You can use the menu to jump between API sections.<br/><br/>This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the '<a target='_blank' href='https://docs.finapi.io/?product=access#tag--Authorization'>Authorization</a>' section of Access, or in case you already have a valid user token, just use the QUICK AUTH on the left.<br/>Please also remember that all user management functions should be looked up in <a target='_blank' href='https://docs.finapi.io/?product=access'>Access</a>.<br/><br/>You should also check out the <a target='_blank' href='https://documentation.finapi.io/webform/'>Web Form 2.0 Public Documentation</a> as well as <a target='_blank' href='https://documentation.finapi.io/access/'>Access Public Documentation</a> for more information. If you need any help with the API, contact <a href='mailto:support@finapi.io'>support@finapi.io</a>.<br/><h2 id=\"general-information\">General information</h2><h3 id=\"general-request-ids\"><strong>Request IDs</strong></h3>With any API call, you can pass a request ID via a header with name \"X-Request-Id\". The request ID can be an arbitrary string with up to 255 characters. Passing a longer string will result in an error.<br/><br/>If you don't pass a request ID for a call, finAPI will generate a random ID internally.<br/><br/>The request ID is always returned back in the response of a service, as a header with name \"X-Request-Id\".<br/><br/>We highly recommend to always pass a (preferably unique) request ID, and include it into your client application logs whenever you make a request or receive a response(especially in the case of an error response). finAPI is also logging request IDs on its end. Having a request ID can help the finAPI support team to work more efficiently and solve tickets faster.<h3 id=\"type-coercion\"><strong>Type Coercion</strong></h3>In order to ease the integration for some languages, which do not natively support high precision number representations, Web Form 2.0 API supports relax type binding for the openAPI type <code>number</code>, which is used for money amount fields. If you use one of those languages, to avoid precision errors that can appear from <code>float</code> values, you can pass the amount as a <code>string</code>.<h3 id=\"general-faq\"><strong>FAQ</strong></h3><strong>Is there a finAPI SDK?</strong><br/>Currently we do not offer a native SDK, but there is the option to generate an SDKfor almost any target language via OpenAPI. Use the 'Download SDK' button on this page for SDK generation.<br/><br/><strong>Why do I need to keep authorizing when calling services on this page?</strong><br/>This page is a \"one-page-app\". Reloading the page resets the OAuth authorization context. There is generally no need to reload the page, so just don't do it and your authorization will persist.
 *
 * The version of the OpenAPI document: 2.634.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
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
 * StandalonePaymentDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StandalonePaymentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandalonePaymentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orders' => '\OpenAPI\Client\Model\StandalonePaymentOrder[]',
        'execution_date' => '\DateTime',
        'batch_booking_preferred' => 'bool',
        'instant_payment' => 'bool',
        'profile_id' => 'string',
        'redirect_url' => 'string',
        'callbacks' => '\OpenAPI\Client\Model\Callbacks',
        'sender' => '\OpenAPI\Client\Model\Sender',
        'allow_test_bank' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orders' => null,
        'execution_date' => 'date',
        'batch_booking_preferred' => null,
        'instant_payment' => null,
        'profile_id' => null,
        'redirect_url' => null,
        'callbacks' => null,
        'sender' => null,
        'allow_test_bank' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orders' => false,
		'execution_date' => true,
		'batch_booking_preferred' => true,
		'instant_payment' => false,
		'profile_id' => true,
		'redirect_url' => true,
		'callbacks' => true,
		'sender' => true,
		'allow_test_bank' => true
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
        'orders' => 'orders',
        'execution_date' => 'executionDate',
        'batch_booking_preferred' => 'batchBookingPreferred',
        'instant_payment' => 'instantPayment',
        'profile_id' => 'profileId',
        'redirect_url' => 'redirectUrl',
        'callbacks' => 'callbacks',
        'sender' => 'sender',
        'allow_test_bank' => 'allowTestBank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orders' => 'setOrders',
        'execution_date' => 'setExecutionDate',
        'batch_booking_preferred' => 'setBatchBookingPreferred',
        'instant_payment' => 'setInstantPayment',
        'profile_id' => 'setProfileId',
        'redirect_url' => 'setRedirectUrl',
        'callbacks' => 'setCallbacks',
        'sender' => 'setSender',
        'allow_test_bank' => 'setAllowTestBank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orders' => 'getOrders',
        'execution_date' => 'getExecutionDate',
        'batch_booking_preferred' => 'getBatchBookingPreferred',
        'instant_payment' => 'getInstantPayment',
        'profile_id' => 'getProfileId',
        'redirect_url' => 'getRedirectUrl',
        'callbacks' => 'getCallbacks',
        'sender' => 'getSender',
        'allow_test_bank' => 'getAllowTestBank'
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
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('execution_date', $data ?? [], null);
        $this->setIfExists('batch_booking_preferred', $data ?? [], true);
        $this->setIfExists('instant_payment', $data ?? [], false);
        $this->setIfExists('profile_id', $data ?? [], null);
        $this->setIfExists('redirect_url', $data ?? [], null);
        $this->setIfExists('callbacks', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('allow_test_bank', $data ?? [], true);
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

        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        if ((count($this->container['orders']) > 15000)) {
            $invalidProperties[] = "invalid value for 'orders', number of items must be less than or equal to 15000.";
        }

        if ((count($this->container['orders']) < 1)) {
            $invalidProperties[] = "invalid value for 'orders', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['profile_id']) && (mb_strlen($this->container['profile_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'profile_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['profile_id']) && (mb_strlen($this->container['profile_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'profile_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['redirect_url']) && (mb_strlen($this->container['redirect_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'redirect_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['redirect_url']) && (mb_strlen($this->container['redirect_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'redirect_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['redirect_url']) && !preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $this->container['redirect_url'])) {
            $invalidProperties[] = "invalid value for 'redirect_url', must be conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.";
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
     * Gets orders
     *
     * @return \OpenAPI\Client\Model\StandalonePaymentOrder[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \OpenAPI\Client\Model\StandalonePaymentOrder[] $orders Payment orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }

        if ((count($orders) > 15000)) {
            throw new \InvalidArgumentException('invalid value for $orders when calling StandalonePaymentDetails., number of items must be less than or equal to 15000.');
        }
        if ((count($orders) < 1)) {
            throw new \InvalidArgumentException('invalid length for $orders when calling StandalonePaymentDetails., number of items must be greater than or equal to 1.');
        }
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets execution_date
     *
     * @return \DateTime|null
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     *
     * @param \DateTime|null $execution_date Execution date for the money transfer(s), in the format <code>YYYY-MM-DD</code>. May not be in the past. If not specified, then the current date will be used.
     *
     * @return self
     */
    public function setExecutionDate($execution_date)
    {
        if (is_null($execution_date)) {
            array_push($this->openAPINullablesSetToNull, 'execution_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('execution_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets batch_booking_preferred
     *
     * @return bool|null
     */
    public function getBatchBookingPreferred()
    {
        return $this->container['batch_booking_preferred'];
    }

    /**
     * Sets batch_booking_preferred
     *
     * @param bool|null $batch_booking_preferred This field is only relevant when you pass multiple orders. It determines whether the orders should be processed by the bank as one collective booking (in case of <code>true</code>), or as separate bookings (in case of <code>false</code>). Note that it is subject to the bank whether it will regard the field.
     *
     * @return self
     */
    public function setBatchBookingPreferred($batch_booking_preferred)
    {
        if (is_null($batch_booking_preferred)) {
            array_push($this->openAPINullablesSetToNull, 'batch_booking_preferred');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('batch_booking_preferred', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['batch_booking_preferred'] = $batch_booking_preferred;

        return $this;
    }

    /**
     * Gets instant_payment
     *
     * @return bool|null
     */
    public function getInstantPayment()
    {
        return $this->container['instant_payment'];
    }

    /**
     * Sets instant_payment
     *
     * @param bool|null $instant_payment Whether the order should be submitted to the bank as an instant SEPA order. <br/><br/><strong>NOTE:</strong><br/>&bull; Submitting an instant payment will work only with interfaces that support it.<br/>&bull; Instant payments work only for a single order, not for collective orders.<br/>&bull; The bank may charge a fee for instant payments, depending on the agreement between the user and the bank.<br/>&bull; The payment might get rejected if the source and/or target account doesn't support instant payments.<br/><br/>If you are interested in additional banks where we can support Instant Payments, please contact our Sales or support team
     *
     * @return self
     */
    public function setInstantPayment($instant_payment)
    {
        if (is_null($instant_payment)) {
            throw new \InvalidArgumentException('non-nullable instant_payment cannot be null');
        }
        $this->container['instant_payment'] = $instant_payment;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string|null $profile_id The profile to be applied to the web form.<br/>This will overwrite the default profile, if such a profile exists.
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {
        if (is_null($profile_id)) {
            array_push($this->openAPINullablesSetToNull, 'profile_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('profile_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($profile_id) && (mb_strlen($profile_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $profile_id when calling StandalonePaymentDetails., must be smaller than or equal to 36.');
        }
        if (!is_null($profile_id) && (mb_strlen($profile_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $profile_id when calling StandalonePaymentDetails., must be bigger than or equal to 36.');
        }

        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url The URL where the end-user will be redirected to after completing the bank login and (possibly) the SCA on the bank's website. Must always be provided by mandators with <code>FULLY_LICENSED</code> or <code>PISP</code> license type, and may not be provided by mandators with other license types. Find more info in the <a target='_blank' href='https://documentation.finapi.io/webform/Licensed-customers-using-the-Web-Form.2832302195.html'>Web Form 2.0 Public Documentation</a>.<br/><br/><strong>NOTE:</strong> Please note that this URL is used during the bank authentication flow. If you would like to provide a URL to which the end user will get redirected at the <strong>end of the web form flow</strong>, please check out the <a href='https://documentation.finapi.io/webform/For-best-results!.2477654019.html#Forbestresults!-Enhanceend-userexperience!' target='_blank'>Web Form 2.0 Public Documentation</a>.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (is_null($redirect_url)) {
            array_push($this->openAPINullablesSetToNull, 'redirect_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirect_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($redirect_url) && (mb_strlen($redirect_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $redirect_url when calling StandalonePaymentDetails., must be smaller than or equal to 2048.');
        }
        if (!is_null($redirect_url) && (mb_strlen($redirect_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $redirect_url when calling StandalonePaymentDetails., must be bigger than or equal to 1.');
        }
        if (!is_null($redirect_url) && (!preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $redirect_url))) {
            throw new \InvalidArgumentException("invalid value for \$redirect_url when calling StandalonePaymentDetails., must conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,63}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.");
        }

        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets callbacks
     *
     * @return \OpenAPI\Client\Model\Callbacks|null
     */
    public function getCallbacks()
    {
        return $this->container['callbacks'];
    }

    /**
     * Sets callbacks
     *
     * @param \OpenAPI\Client\Model\Callbacks|null $callbacks callbacks
     *
     * @return self
     */
    public function setCallbacks($callbacks)
    {
        if (is_null($callbacks)) {
            array_push($this->openAPINullablesSetToNull, 'callbacks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('callbacks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['callbacks'] = $callbacks;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \OpenAPI\Client\Model\Sender|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \OpenAPI\Client\Model\Sender|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            array_push($this->openAPINullablesSetToNull, 'sender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets allow_test_bank
     *
     * @return bool|null
     */
    public function getAllowTestBank()
    {
        return $this->container['allow_test_bank'];
    }

    /**
     * Sets allow_test_bank
     *
     * @param bool|null $allow_test_bank Whether the bank search will include the test banks in the search results. When set to false, all test banks will be excluded from the bank search results.
     *
     * @return self
     */
    public function setAllowTestBank($allow_test_bank)
    {
        if (is_null($allow_test_bank)) {
            array_push($this->openAPINullablesSetToNull, 'allow_test_bank');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allow_test_bank', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allow_test_bank'] = $allow_test_bank;

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

