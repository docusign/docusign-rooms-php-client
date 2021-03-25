<?php
declare(strict_types=1);

/**
 * TaskListsApi.
 *
 * PHP version 7.4
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

namespace DocuSign\Rooms\Api\TaskListsApi;



namespace DocuSign\Rooms\Api;

use DocuSign\Rooms\Client\ApiClient;
use DocuSign\Rooms\Client\ApiException;
use DocuSign\Rooms\Configuration;
use DocuSign\Rooms\ObjectSerializer;

/**
 * TaskListsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Rooms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskListsApi
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
    * @param string $resourcePath
    * @param string $baseName
    * @param string $paramName
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
     * Operation createTaskList
     *
     * Add a task list to a room based on a task list template.
     *
     * @param ?int $room_id Room ID.
     * @param ?string $account_id 
     * @param \DocuSign\Rooms\Model\TaskListForCreate $body  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\TaskList
     */
    public function createTaskList($room_id, $account_id, $body = null): \DocuSign\Rooms\Model\TaskList
    {
        list($response) = $this->createTaskListWithHttpInfo($room_id, $account_id, $body);
        return $response;
    }

    /**
     * Operation createTaskListWithHttpInfo
     *
     * Add a task list to a room based on a task list template.
     *
     * @param ?int $room_id Room ID.
     * @param ?string $account_id 
     * @param \DocuSign\Rooms\Model\TaskListForCreate $body  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\TaskList, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTaskListWithHttpInfo($room_id, $account_id, $body = null): array
    {
        // verify the required parameter 'room_id' is set
        if ($room_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $room_id when calling createTaskList');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createTaskList');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/rooms/{roomId}/task_lists";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);


        // path params
        if ($room_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "roomId", $room_id);
        }
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
                '\DocuSign\Rooms\Model\TaskList',
                '/v2/accounts/{accountId}/rooms/{roomId}/task_lists'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\TaskList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\TaskList', $e->getResponseHeaders());
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
     * Operation deleteTaskList
     *
     * Deletes a task list. If there are attached documents they will remain in the associated
     *
     * @param ?int $task_list_id Task List ID
     * @param ?string $account_id 
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function deleteTaskList($task_list_id, $account_id): mixed
    {
        list($response) = $this->deleteTaskListWithHttpInfo($task_list_id, $account_id);
        return $response;
    }

    /**
     * Operation deleteTaskListWithHttpInfo
     *
     * Deletes a task list. If there are attached documents they will remain in the associated
     *
     * @param ?int $task_list_id Task List ID
     * @param ?string $account_id 
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTaskListWithHttpInfo($task_list_id, $account_id): array
    {
        // verify the required parameter 'task_list_id' is set
        if ($task_list_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_list_id when calling deleteTaskList');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteTaskList');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/task_lists/{taskListId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($task_list_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "taskListId", $task_list_id);
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
                '/v2/accounts/{accountId}/task_lists/{taskListId}'
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
     * Operation getTaskLists
     *
     * Returns the summary for all viewable task lists in a
     *
     * @param ?int $room_id Room ID
     * @param ?string $account_id 
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Rooms\Model\TaskListSummaryList
     */
    public function getTaskLists($room_id, $account_id): \DocuSign\Rooms\Model\TaskListSummaryList
    {
        list($response) = $this->getTaskListsWithHttpInfo($room_id, $account_id);
        return $response;
    }

    /**
     * Operation getTaskListsWithHttpInfo
     *
     * Returns the summary for all viewable task lists in a
     *
     * @param ?int $room_id Room ID
     * @param ?string $account_id 
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Rooms\Model\TaskListSummaryList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTaskListsWithHttpInfo($room_id, $account_id): array
    {
        // verify the required parameter 'room_id' is set
        if ($room_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $room_id when calling getTaskLists');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getTaskLists');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/rooms/{roomId}/task_lists";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($room_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "roomId", $room_id);
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
                '\DocuSign\Rooms\Model\TaskListSummaryList',
                '/v2/accounts/{accountId}/rooms/{roomId}/task_lists'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Rooms\Model\TaskListSummaryList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Rooms\Model\TaskListSummaryList', $e->getResponseHeaders());
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
