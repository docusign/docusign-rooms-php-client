<?php
declare(strict_types=1);

/**
 * RegionsApi.
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

namespace DocuSign\Rooms\Api\RegionsApi;


/**
 * GetRegionsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetRegionsOptions
{
    /**
      * $count Number of regions to include in the response, (Default 100).
      * @var ?int
      */
    protected ?int $count = null;

    /**
     * Gets count
     *
     * @return ?int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?int $count Number of regions to include in the response, (Default 100).
     *
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $start_position Position in the overall list of regions to begin results.
      * @var ?int
      */
    protected ?int $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?int
     */
    public function getStartPosition(): ?int
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?int $start_position Position in the overall list of regions to begin results.
     *
     * @return self
     */
    public function setStartPosition(?int $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $managed_only When true, the response only includes regions that the calling user can manage.
      * @var ?bool
      */
    protected ?bool $managed_only = null;

    /**
     * Gets managed_only
     *
     * @return ?bool
     */
    public function getManagedOnly(): ?bool
    {
        return $this->managed_only;
    }

    /**
     * Sets managed_only
     * @param ?bool $managed_only When true, the response only includes regions that the calling user can manage.
     *
     * @return self
     */
    public function setManagedOnly(?bool $managed_only): self
    {
        $this->managed_only = $managed_only;
        return $this;
    }
}



namespace DocuSign\Rooms\Api;

use DocuSign\Rooms\Client\ApiClient;
use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Configuration;
use DocuSign\Rooms\ObjectSerializer;

/**
 * RegionsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegionsApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation createRegion
     *
     * Creates a new region for a company
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\Region $body The information required to create a new region for the caller&#39;s company (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\Region
     */
    public function createRegion($account_id, $body = null)
    {
        list($response) = $this->createRegionWithHttpInfo($account_id, $body);
        return $response;
    }

    /**
     * Operation createRegionWithHttpInfo
     *
     * Creates a new region for a company
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param \DocuSign\Rooms\Model\Region $body The information required to create a new region for the caller&#39;s company (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\Region, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRegionWithHttpInfo($account_id, $body = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createRegion');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/regions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json', 'application/xml', 'text/xml', 'application/_*+xml']);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
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
                '\DocuSign\Rooms\Model\Region',
                '/v2/accounts/{accountId}/regions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\Region', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\Region', $e->getResponseHeaders());
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

    /**
     * Operation deleteRegion
     *
     * Delete a region.
     *
     * @param ?int $region_id Id of the desired region
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteRegion($region_id, $account_id)
    {
        list($response) = $this->deleteRegionWithHttpInfo($region_id, $account_id);
        return $response;
    }

    /**
     * Operation deleteRegionWithHttpInfo
     *
     * Delete a region.
     *
     * @param ?int $region_id Id of the desired region
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRegionWithHttpInfo($region_id, $account_id): array
    {
        // verify the required parameter 'region_id' is set
        if ($region_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $region_id when calling deleteRegion');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteRegion');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/regions/{regionId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($region_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "regionId", $region_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/accounts/{accountId}/regions/{regionId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
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

    /**
     * Operation getRegion
     *
     * Get information about the region with the given regionId
     *
     * @param ?int $region_id Id of the desired region
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\Region
     */
    public function getRegion($region_id, $account_id)
    {
        list($response) = $this->getRegionWithHttpInfo($region_id, $account_id);
        return $response;
    }

    /**
     * Operation getRegionWithHttpInfo
     *
     * Get information about the region with the given regionId
     *
     * @param ?int $region_id Id of the desired region
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\Region, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegionWithHttpInfo($region_id, $account_id): array
    {
        // verify the required parameter 'region_id' is set
        if ($region_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $region_id when calling getRegion');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getRegion');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/regions/{regionId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($region_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "regionId", $region_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
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
                '\DocuSign\Rooms\Model\Region',
                '/v2/accounts/{accountId}/regions/{regionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\Region', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\Region', $e->getResponseHeaders());
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

    /**
     * Operation getRegionReferenceCounts
     *
     * Get region reference counts.
     *
     * @param ?int $region_id Id of the desired region
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\RegionReferenceCountList
     */
    public function getRegionReferenceCounts($region_id, $account_id)
    {
        list($response) = $this->getRegionReferenceCountsWithHttpInfo($region_id, $account_id);
        return $response;
    }

    /**
     * Operation getRegionReferenceCountsWithHttpInfo
     *
     * Get region reference counts.
     *
     * @param ?int $region_id Id of the desired region
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\RegionReferenceCountList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegionReferenceCountsWithHttpInfo($region_id, $account_id): array
    {
        // verify the required parameter 'region_id' is set
        if ($region_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $region_id when calling getRegionReferenceCounts');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getRegionReferenceCounts');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/regions/{regionId}/reference_counts";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($region_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "regionId", $region_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
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
                '\DocuSign\Rooms\Model\RegionReferenceCountList',
                '/v2/accounts/{accountId}/regions/{regionId}/reference_counts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\RegionReferenceCountList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\RegionReferenceCountList', $e->getResponseHeaders());
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

    /**
     * Operation getRegions
     *
     * Get account regions.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\RegionsApi\GetRegionsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\RegionSummaryList
     */
    public function getRegions($account_id, \DocuSign\Rooms\Api\RegionsApi\GetRegionsOptions $options = null)
    {
        list($response) = $this->getRegionsWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation getRegionsWithHttpInfo
     *
     * Get account regions.
     *
     * @param ?string $account_id (Required) The globally unique identifier (GUID) for the account.
     * @param  \DocuSign\Rooms\Api\RegionsApi\GetRegionsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\RegionSummaryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegionsWithHttpInfo($account_id, \DocuSign\Rooms\Api\RegionsApi\GetRegionsOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getRegions');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/regions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        if ($options != null)
        {
            // query params
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['startPosition'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getManagedOnly() != 'null') {
                $queryParams['managedOnly'] = $this->apiClient->getSerializer()->toQueryValue($options->getManagedOnly());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
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
                '\DocuSign\Rooms\Model\RegionSummaryList',
                '/v2/accounts/{accountId}/regions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\RegionSummaryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\RegionSummaryList', $e->getResponseHeaders());
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
