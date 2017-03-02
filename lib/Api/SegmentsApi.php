<?php
/**
 * SegmentsApi
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
 * SegmentsApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SegmentsApi
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
     * @return SegmentsApi
     */
    public function setApiClient(\CollingMedia\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSegmentationUsingGET
     *
     * Get Segmentations
     *
     * @param string $status Status filter for draft or approved versions (optional)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfSegmentationResponse
     */
    public function getSegmentationUsingGET($status = null)
    {
        list($response) = $this->getSegmentationUsingGETWithHttpInfo($status);
        return $response;
    }

    /**
     * Operation getSegmentationUsingGETWithHttpInfo
     *
     * Get Segmentations
     *
     * @param string $status Status filter for draft or approved versions (optional)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfSegmentationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSegmentationUsingGETWithHttpInfo($status = null)
    {
        // parse inputs
        $resourcePath = "/rest/asset/v1/segmentation.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfSegmentationResponse',
                '/rest/asset/v1/segmentation.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfSegmentationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfSegmentationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSegmentsForSegmentationUsingGET
     *
     * Get Segments For Segmentation
     *
     * @param int $id id (required)
     * @param string $status Status filter for draft or approved versions (optional)
     * @param int $offset Integer offset for paging (optional)
     * @param int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfSegmentsResponse
     */
    public function getSegmentsForSegmentationUsingGET($id, $status = null, $offset = null, $max_return = null)
    {
        list($response) = $this->getSegmentsForSegmentationUsingGETWithHttpInfo($id, $status, $offset, $max_return);
        return $response;
    }

    /**
     * Operation getSegmentsForSegmentationUsingGETWithHttpInfo
     *
     * Get Segments For Segmentation
     *
     * @param int $id id (required)
     * @param string $status Status filter for draft or approved versions (optional)
     * @param int $offset Integer offset for paging (optional)
     * @param int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfSegmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSegmentsForSegmentationUsingGETWithHttpInfo($id, $status = null, $offset = null, $max_return = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getSegmentsForSegmentationUsingGET');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/segmentation/{id}/segments.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($max_return !== null) {
            $queryParams['maxReturn'] = $this->apiClient->getSerializer()->toQueryValue($max_return);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfSegmentsResponse',
                '/rest/asset/v1/segmentation/{id}/segments.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfSegmentsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfSegmentsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
