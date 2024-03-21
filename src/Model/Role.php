<?php
/**
 * Role
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
 * Swagger Codegen version: 2.4.21
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
 * Role Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Role implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Role';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'role_id' => '?int',
        'legacy_role_id' => '?string',
        'name' => '?string',
        'is_default_for_admin' => '?bool',
        'is_external' => '?bool',
        'created_date' => '\DateTime',
        'is_assigned' => '?bool',
        'permissions' => '\DocuSign\Rooms\Model\Permissions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'role_id' => 'int32',
        'legacy_role_id' => null,
        'name' => null,
        'is_default_for_admin' => null,
        'is_external' => null,
        'created_date' => 'date-time',
        'is_assigned' => null,
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
        'role_id' => 'roleId',
        'legacy_role_id' => 'legacyRoleId',
        'name' => 'name',
        'is_default_for_admin' => 'isDefaultForAdmin',
        'is_external' => 'isExternal',
        'created_date' => 'createdDate',
        'is_assigned' => 'isAssigned',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role_id' => 'setRoleId',
        'legacy_role_id' => 'setLegacyRoleId',
        'name' => 'setName',
        'is_default_for_admin' => 'setIsDefaultForAdmin',
        'is_external' => 'setIsExternal',
        'created_date' => 'setCreatedDate',
        'is_assigned' => 'setIsAssigned',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role_id' => 'getRoleId',
        'legacy_role_id' => 'getLegacyRoleId',
        'name' => 'getName',
        'is_default_for_admin' => 'getIsDefaultForAdmin',
        'is_external' => 'getIsExternal',
        'created_date' => 'getCreatedDate',
        'is_assigned' => 'getIsAssigned',
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
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['legacy_role_id'] = isset($data['legacy_role_id']) ? $data['legacy_role_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_default_for_admin'] = isset($data['is_default_for_admin']) ? $data['is_default_for_admin'] : null;
        $this->container['is_external'] = isset($data['is_external']) ? $data['is_external'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['is_assigned'] = isset($data['is_assigned']) ? $data['is_assigned'] : null;
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
     * Gets legacy_role_id
     *
     * @return ?string
     */
    public function getLegacyRoleId()
    {
        return $this->container['legacy_role_id'];
    }

    /**
     * Sets legacy_role_id
     *
     * @param ?string $legacy_role_id legacy_role_id
     *
     * @return $this
     */
    public function setLegacyRoleId($legacy_role_id)
    {
        $this->container['legacy_role_id'] = $legacy_role_id;

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
     * Gets is_default_for_admin
     *
     * @return ?bool
     */
    public function getIsDefaultForAdmin()
    {
        return $this->container['is_default_for_admin'];
    }

    /**
     * Sets is_default_for_admin
     *
     * @param ?bool $is_default_for_admin is_default_for_admin
     *
     * @return $this
     */
    public function setIsDefaultForAdmin($is_default_for_admin)
    {
        $this->container['is_default_for_admin'] = $is_default_for_admin;

        return $this;
    }

    /**
     * Gets is_external
     *
     * @return ?bool
     */
    public function getIsExternal()
    {
        return $this->container['is_external'];
    }

    /**
     * Sets is_external
     *
     * @param ?bool $is_external is_external
     *
     * @return $this
     */
    public function setIsExternal($is_external)
    {
        $this->container['is_external'] = $is_external;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets is_assigned
     *
     * @return ?bool
     */
    public function getIsAssigned()
    {
        return $this->container['is_assigned'];
    }

    /**
     * Sets is_assigned
     *
     * @param ?bool $is_assigned is_assigned
     *
     * @return $this
     */
    public function setIsAssigned($is_assigned)
    {
        $this->container['is_assigned'] = $is_assigned;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \DocuSign\Rooms\Model\Permissions
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \DocuSign\Rooms\Model\Permissions $permissions permissions
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

