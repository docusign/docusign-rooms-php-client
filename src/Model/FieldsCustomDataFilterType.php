<?php
/**
 * FieldsCustomDataFilterType
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
use \DocuSign\Rooms\ObjectSerializer;

/**
 * FieldsCustomDataFilterType Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Rooms
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FieldsCustomDataFilterType
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const IS_REQUIRED_ON_CREATE = 'IsRequiredOnCreate';
    const IS_REQUIRED_ON_SUBMIT = 'IsRequiredOnSubmit';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::IS_REQUIRED_ON_CREATE,
            self::IS_REQUIRED_ON_SUBMIT,
        ];
    }
}

