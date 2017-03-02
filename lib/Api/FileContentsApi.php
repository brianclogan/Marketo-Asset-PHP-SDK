<?php
/**
 * FileContentsApi
 * PHP version 5
 *
 * @category Class
 * @package  CollingMedia\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CollingMedia\Client\Api;

use \CollingMedia\Client\ApiClient;
use \CollingMedia\Client\ApiException;
use \CollingMedia\Client\Configuration;
use \CollingMedia\Client\ObjectSerializer;

/**
 * FileContentsApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileContentsApi
{
    /**
     * API Client
     *
     * @var \CollingMedia\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CollingMedia\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CollingMedia\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CollingMedia\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CollingMedia\Client\ApiClient $apiClient set the API client
     *
     * @return FileContentsApi
     */
    public function setApiClient(\CollingMedia\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation updateContentUsingPOST
     *
     * Update File Content
     *
     * @param \CollingMedia\Client\Model\UpdateFileContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfFileResponse
     */
    public function updateContentUsingPOST($request)
    {
        list($response) = $this->updateContentUsingPOSTWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation updateContentUsingPOSTWithHttpInfo
     *
     * Update File Content
     *
     * @param \CollingMedia\Client\Model\UpdateFileContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfFileResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContentUsingPOSTWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateContentUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/file/{id}/content.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfFileResponse',
                '/rest/asset/v1/file/{id}/content.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfFileResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfFileResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
