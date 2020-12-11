<?php
/**
 * RoomTemplatesApi
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team
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

namespace DocuSign\Rooms\Api\RoomTemplatesApi;

class GetRoomTemplatesOptions
{
    /**
      * $office_id Get all room templates you have access to for this office. Response includes Company and Region level  If onlyAssignable is true, and no officeId is provided, user's default office is assumed.
      * @var int
      */
    protected $office_id;

    /**
     * Gets office_id
     * @return int
     */
    public function getOfficeId()
    {
        return $this->office_id;
    }
  
    /**
     * Sets office_id
     * @param int $office_id Get all room templates you have access to for this office. Response includes Company and Region level  If onlyAssignable is true, and no officeId is provided, user's default office is assumed.
     * @return $this
     */
    public function setOfficeId($office_id)
    {
        $this->office_id = $office_id;
        return $this;
    }
    /**
      * $only_assignable Get list of templates you have access to. Default value false.
      * @var bool
      */
    protected $only_assignable;

    /**
     * Gets only_assignable
     * @return bool
     */
    public function getOnlyAssignable()
    {
        return $this->only_assignable;
    }
  
    /**
     * Sets only_assignable
     * @param bool $only_assignable Get list of templates you have access to. Default value false.
     * @return $this
     */
    public function setOnlyAssignable($only_assignable)
    {
        $this->only_assignable = $only_assignable;
        return $this;
    }
    /**
      * $only_enabled When set to true, only returns room templates that are not disabled.
      * @var bool
      */
    protected $only_enabled;

    /**
     * Gets only_enabled
     * @return bool
     */
    public function getOnlyEnabled()
    {
        return $this->only_enabled;
    }
  
    /**
     * Sets only_enabled
     * @param bool $only_enabled When set to true, only returns room templates that are not disabled.
     * @return $this
     */
    public function setOnlyEnabled($only_enabled)
    {
        $this->only_enabled = $only_enabled;
        return $this;
    }
    /**
      * $count Number of room templates to return. Defaults to the maximum which is 100.
      * @var int
      */
    protected $count;

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
  
    /**
     * Sets count
     * @param int $count Number of room templates to return. Defaults to the maximum which is 100.
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $start_position Position of the first item in the total results. Defaults to 0.
      * @var int
      */
    protected $start_position;

    /**
     * Gets start_position
     * @return int
     */
    public function getStartPosition()
    {
        return $this->start_position;
    }
  
    /**
     * Sets start_position
     * @param int $start_position Position of the first item in the total results. Defaults to 0.
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->start_position = $start_position;
        return $this;
    }
}


namespace DocuSign\Rooms\Api;

use \DocuSign\Rooms\Client\ApiClient;
use \DocuSign\Rooms\Client\ApiException;
use \DocuSign\Rooms\Configuration;
use \DocuSign\Rooms\ObjectSerializer;

/**
 * RoomTemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomTemplatesApi
{
    /**
     * API Client
     *
     * @var \DocuSign\Rooms\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DocuSign\Rooms\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DocuSign\Rooms\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \DocuSign\Rooms\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DocuSign\Rooms\Client\ApiClient $apiClient set the API client
     *
     * @return RoomTemplatesApi
     */
    public function setApiClient(\DocuSign\Rooms\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getRoomTemplates
     *
     * Returns all room templates that the active user has access to
     *
    * @param string $account_id 
     * @param  $options Options for modifying the behavior of the function. (optional)
     * @throws \DocuSign\Rooms\Client\ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\RoomTemplatesSummaryList
     */
    public function getRoomTemplates($account_id, RoomTemplatesApi\GetRoomTemplatesOptions $options = null)
    {
        list($response) = $this->getRoomTemplatesWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation getRoomTemplatesWithHttpInfo
     *
     * Returns all room templates that the active user has access to
     *
    * @param string $account_id 
     * @param  $options Options for modifying the behavior of the function. (optional)
     * @throws \DocuSign\Rooms\Client\ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\RoomTemplatesSummaryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoomTemplatesWithHttpInfo($account_id, RoomTemplatesApi\GetRoomTemplatesOptions $options = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getRoomTemplates');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/room_templates";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
        // query params
        // query params
        if ($options->getOfficeId() !== null) {
            $queryParams['officeId'] = $this->apiClient->getSerializer()->toQueryValue($options->getOfficeId());
        }
        // query params
        if ($options->getOnlyAssignable() !== null) {
            $queryParams['onlyAssignable'] = $this->apiClient->getSerializer()->toQueryValue($options->getOnlyAssignable());
        }
        // query params
        if ($options->getOnlyEnabled() !== null) {
            $queryParams['onlyEnabled'] = $this->apiClient->getSerializer()->toQueryValue($options->getOnlyEnabled());
        }
        // query params
        if ($options->getCount() !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
        }
        // query params
        if ($options->getStartPosition() !== null) {
            $queryParams['startPosition'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
        }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Rooms\Model\RoomTemplatesSummaryList',
                '/v2/accounts/{accountId}/room_templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\RoomTemplatesSummaryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\RoomTemplatesSummaryList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ApiError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
