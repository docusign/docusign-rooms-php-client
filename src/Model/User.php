<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => '?int',
        'email' => '?string',
        'first_name' => '?string',
        'last_name' => '?string',
        'is_locked_out' => '?bool',
        'status' => '?string',
        'access_level' => '?string',
        'default_office_id' => '?int',
        'title_id' => '?int',
        'role_id' => '?int',
        'profile_image_url' => '?string',
        'offices' => '?int[]',
        'regions' => '?int[]',
        'permissions' => '\DocuSign\Rooms\Model\ClassicManagerPermissions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => 'int32',
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'is_locked_out' => null,
        'status' => null,
        'access_level' => null,
        'default_office_id' => 'int32',
        'title_id' => 'int32',
        'role_id' => 'int32',
        'profile_image_url' => null,
        'offices' => 'int32',
        'regions' => 'int32',
        'permissions' => null
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
        'user_id' => 'userId',
        'email' => 'email',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'is_locked_out' => 'isLockedOut',
        'status' => 'status',
        'access_level' => 'accessLevel',
        'default_office_id' => 'defaultOfficeId',
        'title_id' => 'titleId',
        'role_id' => 'roleId',
        'profile_image_url' => 'profileImageUrl',
        'offices' => 'offices',
        'regions' => 'regions',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'is_locked_out' => 'setIsLockedOut',
        'status' => 'setStatus',
        'access_level' => 'setAccessLevel',
        'default_office_id' => 'setDefaultOfficeId',
        'title_id' => 'setTitleId',
        'role_id' => 'setRoleId',
        'profile_image_url' => 'setProfileImageUrl',
        'offices' => 'setOffices',
        'regions' => 'setRegions',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'is_locked_out' => 'getIsLockedOut',
        'status' => 'getStatus',
        'access_level' => 'getAccessLevel',
        'default_office_id' => 'getDefaultOfficeId',
        'title_id' => 'getTitleId',
        'role_id' => 'getRoleId',
        'profile_image_url' => 'getProfileImageUrl',
        'offices' => 'getOffices',
        'regions' => 'getRegions',
        'permissions' => 'getPermissions'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['is_locked_out'] = isset($data['is_locked_out']) ? $data['is_locked_out'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['access_level'] = isset($data['access_level']) ? $data['access_level'] : null;
        $this->container['default_office_id'] = isset($data['default_office_id']) ? $data['default_office_id'] : null;
        $this->container['title_id'] = isset($data['title_id']) ? $data['title_id'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['profile_image_url'] = isset($data['profile_image_url']) ? $data['profile_image_url'] : null;
        $this->container['offices'] = isset($data['offices']) ? $data['offices'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessLevelAllowableValues();
        if (!is_null($this->container['access_level']) && !in_array($this->container['access_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access_level', must be one of '%s'",
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
     * Gets user_id
     *
     * @return ?int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param ?int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return ?string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param ?string $first_name first_name
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
     * @return ?string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param ?string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets is_locked_out
     *
     * @return ?bool
     */
    public function getIsLockedOut()
    {
        return $this->container['is_locked_out'];
    }

    /**
     * Sets is_locked_out
     *
     * @param ?bool $is_locked_out is_locked_out
     *
     * @return $this
     */
    public function setIsLockedOut($is_locked_out)
    {
        $this->container['is_locked_out'] = $is_locked_out;

        return $this;
    }

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param ?string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets access_level
     *
     * @return ?string
     */
    public function getAccessLevel()
    {
        return $this->container['access_level'];
    }

    /**
     * Sets access_level
     *
     * @param ?string $access_level access_level
     *
     * @return $this
     */
    public function setAccessLevel($access_level)
    {
        $allowedValues = $this->getAccessLevelAllowableValues();
        if (!is_null($access_level) && !in_array($access_level, $allowedValues, true)) {
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
     * Gets default_office_id
     *
     * @return ?int
     */
    public function getDefaultOfficeId()
    {
        return $this->container['default_office_id'];
    }

    /**
     * Sets default_office_id
     *
     * @param ?int $default_office_id default_office_id
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
     * @return ?int
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param ?int $title_id title_id
     *
     * @return $this
     */
    public function setTitleId($title_id)
    {
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets role_id
     *
     * @return ?int
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     *
     * @param ?int $role_id role_id
     *
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets profile_image_url
     *
     * @return ?string
     */
    public function getProfileImageUrl()
    {
        return $this->container['profile_image_url'];
    }

    /**
     * Sets profile_image_url
     *
     * @param ?string $profile_image_url profile_image_url
     *
     * @return $this
     */
    public function setProfileImageUrl($profile_image_url)
    {
        $this->container['profile_image_url'] = $profile_image_url;

        return $this;
    }

    /**
     * Gets offices
     *
     * @return ?int[]
     */
    public function getOffices()
    {
        return $this->container['offices'];
    }

    /**
     * Sets offices
     *
     * @param ?int[] $offices offices
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
     * @return ?int[]
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param ?int[] $regions regions
     *
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

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
