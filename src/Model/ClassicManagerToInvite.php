<?php
/**
 * ClassicManagerToInvite
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swaagger Codegen team
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
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Rooms\Model;

use \ArrayAccess;
use \DocuSign\Rooms\ObjectSerializer;

/**
 * ClassicManagerToInvite Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClassicManagerToInvite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClassicManagerToInvite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'default_office_id' => 'int',
        'title_id' => 'int',
        'access_level' => 'string',
        'permissions' => '\DocuSign\Rooms\Model\ClassicManagerPermissions',
        'offices' => 'int[]',
        'regions' => 'int[]',
        'e_sign_permission_profile_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'default_office_id' => 'int32',
        'title_id' => 'int32',
        'access_level' => null,
        'permissions' => null,
        'offices' => 'int32',
        'regions' => 'int32',
        'e_sign_permission_profile_id' => null
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
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'default_office_id' => 'defaultOfficeId',
        'title_id' => 'titleId',
        'access_level' => 'accessLevel',
        'permissions' => 'permissions',
        'offices' => 'offices',
        'regions' => 'regions',
        'e_sign_permission_profile_id' => 'eSignPermissionProfileId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'default_office_id' => 'setDefaultOfficeId',
        'title_id' => 'setTitleId',
        'access_level' => 'setAccessLevel',
        'permissions' => 'setPermissions',
        'offices' => 'setOffices',
        'regions' => 'setRegions',
        'e_sign_permission_profile_id' => 'setESignPermissionProfileId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'default_office_id' => 'getDefaultOfficeId',
        'title_id' => 'getTitleId',
        'access_level' => 'getAccessLevel',
        'permissions' => 'getPermissions',
        'offices' => 'getOffices',
        'regions' => 'getRegions',
        'e_sign_permission_profile_id' => 'getESignPermissionProfileId'
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

    const ACCESS_LEVEL_CONTRIBUTOR = 'Contributor';
    const ACCESS_LEVEL_OFFICE = 'Office';
    const ACCESS_LEVEL_REGION = 'Region';
    const ACCESS_LEVEL_COMPANY = 'Company';
    const ACCESS_LEVEL_ADMIN = 'Admin';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessLevelAllowableValues()
    {
        return [
            self::ACCESS_LEVEL_CONTRIBUTOR,
            self::ACCESS_LEVEL_OFFICE,
            self::ACCESS_LEVEL_REGION,
            self::ACCESS_LEVEL_COMPANY,
            self::ACCESS_LEVEL_ADMIN,
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['default_office_id'] = isset($data['default_office_id']) ? $data['default_office_id'] : null;
        $this->container['title_id'] = isset($data['title_id']) ? $data['title_id'] : null;
        $this->container['access_level'] = isset($data['access_level']) ? $data['access_level'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['offices'] = isset($data['offices']) ? $data['offices'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['e_sign_permission_profile_id'] = isset($data['e_sign_permission_profile_id']) ? $data['e_sign_permission_profile_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['default_office_id'] === null) {
            $invalidProperties[] = "'default_office_id' can't be null";
        }
        if ($this->container['title_id'] === null) {
            $invalidProperties[] = "'title_id' can't be null";
        }
        if ($this->container['access_level'] === null) {
            $invalidProperties[] = "'access_level' can't be null";
        }
        $allowedValues = $this->getAccessLevelAllowableValues();
        if (!is_null($this->container['access_level']) && !in_array($this->container['access_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['permissions'] === null) {
            $invalidProperties[] = "'permissions' can't be null";
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets default_office_id
     *
     * @return int
     */
    public function getDefaultOfficeId()
    {
        return $this->container['default_office_id'];
    }

    /**
     * Sets default_office_id
     *
     * @param int $default_office_id default_office_id
     *
     * @return $this
     */
    public function setDefaultOfficeId($default_office_id)
    {
        $this->container['default_office_id'] = $default_office_id;

        return $this;
    }

    /**
     * Gets title_id
     *
     * @return int
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param int $title_id title_id
     *
     * @return $this
     */
    public function setTitleId($title_id)
    {
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets access_level
     *
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->container['access_level'];
    }

    /**
     * Sets access_level
     *
     * @param string $access_level access_level
     *
     * @return $this
     */
    public function setAccessLevel($access_level)
    {
        $allowedValues = $this->getAccessLevelAllowableValues();
        if (!in_array($access_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'access_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access_level'] = $access_level;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \DocuSign\Rooms\Model\ClassicManagerPermissions
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \DocuSign\Rooms\Model\ClassicManagerPermissions $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets offices
     *
     * @return int[]
     */
    public function getOffices()
    {
        return $this->container['offices'];
    }

    /**
     * Sets offices
     *
     * @param int[] $offices offices
     *
     * @return $this
     */
    public function setOffices($offices)
    {
        $this->container['offices'] = $offices;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return int[]
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param int[] $regions regions
     *
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets e_sign_permission_profile_id
     *
     * @return string
     */
    public function getESignPermissionProfileId()
    {
        return $this->container['e_sign_permission_profile_id'];
    }

    /**
     * Sets e_sign_permission_profile_id
     *
     * @param string $e_sign_permission_profile_id Required when the company is tightly bound to an eSign account; otherwise ignored.
     *
     * @return $this
     */
    public function setESignPermissionProfileId($e_sign_permission_profile_id)
    {
        $this->container['e_sign_permission_profile_id'] = $e_sign_permission_profile_id;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

