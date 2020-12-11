<?php
/**
 * ExternalFormFillSessionsApi
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

namespace DocuSign\Rooms\Api\ExternalFormFillSessionsApi;



namespace DocuSign\Rooms\Api;

use \DocuSign\Rooms\Client\ApiClient;
use \DocuSign\Rooms\Client\ApiException;
use \DocuSign\Rooms\Configuration;
use \DocuSign\Rooms\ObjectSerializer;

/**
 * ExternalFormFillSessionsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalFormFillSessionsApi
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
     * @return ExternalFormFillSessionsApi
     */
    public function setApiClient(\DocuSign\Rooms\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createExternalFormFillSession
     *
     * Creates an external form fill session.
     *
    * @param string $account_id 
     * @param \DocuSign\Rooms\Model\ExternalFormFillSessionForCreate $body  (optional)
     * @throws \DocuSign\Rooms\Client\ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\ExternalFormFillSession
     */
    public function createExternalFormFillSession($account_id, $body = null)
    {
        list($response) = $this->createExternalFormFillSessionWithHttpInfo($account_id, $body);
        return $response;
    }

    /**
     * Operation createExternalFormFillSessionWithHttpInfo
     *
     * Creates an external form fill session.
     *
    * @param string $account_id 
     * @param \DocuSign\Rooms\Model\ExternalFormFillSessionForCreate $body  (optional)
     * @throws \DocuSign\Rooms\Client\ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\ExternalFormFillSession, HTTP status code, HTTP response headers (array of strings)
     */
    public function createExternalFormFillSessionWithHttpInfo($account_id, $body = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createExternalFormFillSession');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/external_form_fill_sessions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Rooms\Model\ExternalFormFillSession',
                '/v2/accounts/{accountId}/external_form_fill_sessions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\ExternalFormFillSession', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\ExternalFormFillSession', $e->getResponseHeaders());
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
