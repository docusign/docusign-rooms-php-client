<?php
/**
 * AccountSummary
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign Rooms API - v2
 *
 * An API for an integrator to access the features of DocuSign Rooms
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Rooms\Model;

use \ArrayAccess;
use DocuSign\Rooms\ObjectSerializer;

/**
 * AccountSummary Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => '?int',
        'name' => '?string',
        'company_version' => '?string',
        'docu_sign_account_guid' => '?string',
        'default_field_set_id' => '?string',
        'require_office_library_assignments' => '?bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => 'int32',
        'name' => null,
        'company_version' => null,
        'docu_sign_account_guid' => null,
        'default_field_set_id' => 'uuid',
        'require_office_library_assignments' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company_id' => 'companyId',
        'name' => 'name',
        'company_version' => 'companyVersion',
        'docu_sign_account_guid' => 'docuSignAccountGuid',
        'default_field_set_id' => 'defaultFieldSetId',
        'require_office_library_assignments' => 'requireOfficeLibraryAssignments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'name' => 'setName',
        'company_version' => 'setCompanyVersion',
        'docu_sign_account_guid' => 'setDocuSignAccountGuid',
        'default_field_set_id' => 'setDefaultFieldSetId',
        'require_office_library_assignments' => 'setRequireOfficeLibraryAssignments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'name' => 'getName',
        'company_version' => 'getCompanyVersion',
        'docu_sign_account_guid' => 'getDocuSignAccountGuid',
        'default_field_set_id' => 'getDefaultFieldSetId',
        'require_office_library_assignments' => 'getRequireOfficeLibraryAssignments'
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
        return self::$swaggerModelName;
    }

    const COMPANY_VERSION_V5 = 'v5';
    const COMPANY_VERSION_V6 = 'v6';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompanyVersionAllowableValues()
    {
        return [
            self::COMPANY_VERSION_V5,
            self::COMPANY_VERSION_V6,
        ];
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company_version'] = isset($data['company_version']) ? $data['company_version'] : null;
        $this->container['docu_sign_account_guid'] = isset($data['docu_sign_account_guid']) ? $data['docu_sign_account_guid'] : null;
        $this->container['default_field_set_id'] = isset($data['default_field_set_id']) ? $data['default_field_set_id'] : null;
        $this->container['require_office_library_assignments'] = isset($data['require_office_library_assignments']) ? $data['require_office_library_assignments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCompanyVersionAllowableValues();
        if (!is_null($this->container['company_version']) && !in_array($this->container['company_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'company_version', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets company_id
     *
     * @return ?int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param ?int $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets company_version
     *
     * @return ?string
     */
    public function getCompanyVersion()
    {
        return $this->container['company_version'];
    }

    /**
     * Sets company_version
     *
     * @param ?string $company_version company_version
     *
     * @return $this
     */
    public function setCompanyVersion($company_version)
    {
        $allowedValues = $this->getCompanyVersionAllowableValues();
        if (!is_null($company_version) && !in_array($company_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'company_version', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['company_version'] = $company_version;

        return $this;
    }

    /**
     * Gets docu_sign_account_guid
     *
     * @return ?string
     */
    public function getDocuSignAccountGuid()
    {
        return $this->container['docu_sign_account_guid'];
    }

    /**
     * Sets docu_sign_account_guid
     *
     * @param ?string $docu_sign_account_guid docu_sign_account_guid
     *
     * @return $this
     */
    public function setDocuSignAccountGuid($docu_sign_account_guid)
    {
        $this->container['docu_sign_account_guid'] = $docu_sign_account_guid;

        return $this;
    }

    /**
     * Gets default_field_set_id
     *
     * @return ?string
     */
    public function getDefaultFieldSetId()
    {
        return $this->container['default_field_set_id'];
    }

    /**
     * Sets default_field_set_id
     *
     * @param ?string $default_field_set_id default_field_set_id
     *
     * @return $this
     */
    public function setDefaultFieldSetId($default_field_set_id)
    {
        $this->container['default_field_set_id'] = $default_field_set_id;

        return $this;
    }

    /**
     * Gets require_office_library_assignments
     *
     * @return ?bool
     */
    public function getRequireOfficeLibraryAssignments()
    {
        return $this->container['require_office_library_assignments'];
    }

    /**
     * Sets require_office_library_assignments
     *
     * @param ?bool $require_office_library_assignments require_office_library_assignments
     *
     * @return $this
     */
    public function setRequireOfficeLibraryAssignments($require_office_library_assignments)
    {
        $this->container['require_office_library_assignments'] = $require_office_library_assignments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
