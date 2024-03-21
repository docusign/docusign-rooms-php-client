<?php
/**
 * Document
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
 * Document Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Document implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_id' => '?int',
        'name' => '?string',
        'room_id' => '?int',
        'owner_id' => '?int',
        'size' => 'int',
        'folder_id' => '?int',
        'created_date' => '\DateTime',
        'is_signed' => '?bool',
        'content_type' => '?string',
        'base64_contents' => '?string',
        'is_dynamic' => '?bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_id' => 'int32',
        'name' => null,
        'room_id' => 'int32',
        'owner_id' => 'int32',
        'size' => 'int64',
        'folder_id' => 'int32',
        'created_date' => 'date-time',
        'is_signed' => null,
        'content_type' => null,
        'base64_contents' => null,
        'is_dynamic' => null
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
        'document_id' => 'documentId',
        'name' => 'name',
        'room_id' => 'roomId',
        'owner_id' => 'ownerId',
        'size' => 'size',
        'folder_id' => 'folderId',
        'created_date' => 'createdDate',
        'is_signed' => 'isSigned',
        'content_type' => 'contentType',
        'base64_contents' => 'base64Contents',
        'is_dynamic' => 'isDynamic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_id' => 'setDocumentId',
        'name' => 'setName',
        'room_id' => 'setRoomId',
        'owner_id' => 'setOwnerId',
        'size' => 'setSize',
        'folder_id' => 'setFolderId',
        'created_date' => 'setCreatedDate',
        'is_signed' => 'setIsSigned',
        'content_type' => 'setContentType',
        'base64_contents' => 'setBase64Contents',
        'is_dynamic' => 'setIsDynamic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_id' => 'getDocumentId',
        'name' => 'getName',
        'room_id' => 'getRoomId',
        'owner_id' => 'getOwnerId',
        'size' => 'getSize',
        'folder_id' => 'getFolderId',
        'created_date' => 'getCreatedDate',
        'is_signed' => 'getIsSigned',
        'content_type' => 'getContentType',
        'base64_contents' => 'getBase64Contents',
        'is_dynamic' => 'getIsDynamic'
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
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['room_id'] = isset($data['room_id']) ? $data['room_id'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['is_signed'] = isset($data['is_signed']) ? $data['is_signed'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['base64_contents'] = isset($data['base64_contents']) ? $data['base64_contents'] : null;
        $this->container['is_dynamic'] = isset($data['is_dynamic']) ? $data['is_dynamic'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['base64_contents'] === null) {
            $invalidProperties[] = "'base64_contents' can't be null";
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
     * Gets document_id
     *
     * @return ?int
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param ?int $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

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
     * Gets room_id
     *
     * @return ?int
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param ?int $room_id room_id
     *
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return ?int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param ?int $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return ?int
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param ?int $folder_id folder_id
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

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
     * Gets is_signed
     *
     * @return ?bool
     */
    public function getIsSigned()
    {
        return $this->container['is_signed'];
    }

    /**
     * Sets is_signed
     *
     * @param ?bool $is_signed is_signed
     *
     * @return $this
     */
    public function setIsSigned($is_signed)
    {
        $this->container['is_signed'] = $is_signed;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return ?string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param ?string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets base64_contents
     *
     * @return ?string
     */
    public function getBase64Contents()
    {
        return $this->container['base64_contents'];
    }

    /**
     * Sets base64_contents
     *
     * @param ?string $base64_contents base64_contents
     *
     * @return $this
     */
    public function setBase64Contents($base64_contents)
    {
        $this->container['base64_contents'] = $base64_contents;

        return $this;
    }

    /**
     * Gets is_dynamic
     *
     * @return ?bool
     */
    public function getIsDynamic()
    {
        return $this->container['is_dynamic'];
    }

    /**
     * Sets is_dynamic
     *
     * @param ?bool $is_dynamic is_dynamic
     *
     * @return $this
     */
    public function setIsDynamic($is_dynamic)
    {
        $this->container['is_dynamic'] = $is_dynamic;

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

