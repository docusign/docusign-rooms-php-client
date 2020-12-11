<?php
/**
 * RoomFolderList
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
 * RoomFolderList Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RoomFolderList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoomFolderList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'folders' => '\DocuSign\Rooms\Model\RoomFolder[]',
        'result_set_size' => 'int',
        'start_position' => 'int',
        'end_position' => 'int',
        'next_uri' => 'string',
        'prior_uri' => 'string',
        'total_row_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'folders' => null,
        'result_set_size' => 'int32',
        'start_position' => 'int32',
        'end_position' => 'int32',
        'next_uri' => null,
        'prior_uri' => null,
        'total_row_count' => 'int32'
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
        'folders' => 'folders',
        'result_set_size' => 'resultSetSize',
        'start_position' => 'startPosition',
        'end_position' => 'endPosition',
        'next_uri' => 'nextUri',
        'prior_uri' => 'priorUri',
        'total_row_count' => 'totalRowCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'folders' => 'setFolders',
        'result_set_size' => 'setResultSetSize',
        'start_position' => 'setStartPosition',
        'end_position' => 'setEndPosition',
        'next_uri' => 'setNextUri',
        'prior_uri' => 'setPriorUri',
        'total_row_count' => 'setTotalRowCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'folders' => 'getFolders',
        'result_set_size' => 'getResultSetSize',
        'start_position' => 'getStartPosition',
        'end_position' => 'getEndPosition',
        'next_uri' => 'getNextUri',
        'prior_uri' => 'getPriorUri',
        'total_row_count' => 'getTotalRowCount'
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
        $this->container['folders'] = isset($data['folders']) ? $data['folders'] : null;
        $this->container['result_set_size'] = isset($data['result_set_size']) ? $data['result_set_size'] : null;
        $this->container['start_position'] = isset($data['start_position']) ? $data['start_position'] : null;
        $this->container['end_position'] = isset($data['end_position']) ? $data['end_position'] : null;
        $this->container['next_uri'] = isset($data['next_uri']) ? $data['next_uri'] : null;
        $this->container['prior_uri'] = isset($data['prior_uri']) ? $data['prior_uri'] : null;
        $this->container['total_row_count'] = isset($data['total_row_count']) ? $data['total_row_count'] : null;
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
     * Gets folders
     *
     * @return \DocuSign\Rooms\Model\RoomFolder[]
     */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
     * Sets folders
     *
     * @param \DocuSign\Rooms\Model\RoomFolder[] $folders folders
     *
     * @return $this
     */
    public function setFolders($folders)
    {
        $this->container['folders'] = $folders;

        return $this;
    }

    /**
     * Gets result_set_size
     *
     * @return int
     */
    public function getResultSetSize()
    {
        return $this->container['result_set_size'];
    }

    /**
     * Sets result_set_size
     *
     * @param int $result_set_size result_set_size
     *
     * @return $this
     */
    public function setResultSetSize($result_set_size)
    {
        $this->container['result_set_size'] = $result_set_size;

        return $this;
    }

    /**
     * Gets start_position
     *
     * @return int
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param int $start_position start_position
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

        return $this;
    }

    /**
     * Gets end_position
     *
     * @return int
     */
    public function getEndPosition()
    {
        return $this->container['end_position'];
    }

    /**
     * Sets end_position
     *
     * @param int $end_position end_position
     *
     * @return $this
     */
    public function setEndPosition($end_position)
    {
        $this->container['end_position'] = $end_position;

        return $this;
    }

    /**
     * Gets next_uri
     *
     * @return string
     */
    public function getNextUri()
    {
        return $this->container['next_uri'];
    }

    /**
     * Sets next_uri
     *
     * @param string $next_uri next_uri
     *
     * @return $this
     */
    public function setNextUri($next_uri)
    {
        $this->container['next_uri'] = $next_uri;

        return $this;
    }

    /**
     * Gets prior_uri
     *
     * @return string
     */
    public function getPriorUri()
    {
        return $this->container['prior_uri'];
    }

    /**
     * Sets prior_uri
     *
     * @param string $prior_uri prior_uri
     *
     * @return $this
     */
    public function setPriorUri($prior_uri)
    {
        $this->container['prior_uri'] = $prior_uri;

        return $this;
    }

    /**
     * Gets total_row_count
     *
     * @return int
     */
    public function getTotalRowCount()
    {
        return $this->container['total_row_count'];
    }

    /**
     * Sets total_row_count
     *
     * @param int $total_row_count total_row_count
     *
     * @return $this
     */
    public function setTotalRowCount($total_row_count)
    {
        $this->container['total_row_count'] = $total_row_count;

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

