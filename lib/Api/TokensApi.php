<?php
/**
 * TokensApi
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
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokensApi
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
     * @return TokensApi
     */
    public function setApiClient(\CollingMedia\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addTokenTOFolderUsingPOST
     *
     * Create Token
     *
     * @param int $id id (required)
     * @param \CollingMedia\Client\Model\CreateTokenRequest $create_token_request createTokenRequest (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfTokenResponse
     */
    public function addTokenTOFolderUsingPOST($id, $create_token_request)
    {
        list($response) = $this->addTokenTOFolderUsingPOSTWithHttpInfo($id, $create_token_request);
        return $response;
    }

    /**
     * Operation addTokenTOFolderUsingPOSTWithHttpInfo
     *
     * Create Token
     *
     * @param int $id id (required)
     * @param \CollingMedia\Client\Model\CreateTokenRequest $create_token_request createTokenRequest (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addTokenTOFolderUsingPOSTWithHttpInfo($id, $create_token_request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling addTokenTOFolderUsingPOST');
        }
        // verify the required parameter 'create_token_request' is set
        if ($create_token_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_token_request when calling addTokenTOFolderUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/folder/{id}/tokens.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

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

        // body params
        $_tempBody = null;
        if (isset($create_token_request)) {
            $_tempBody = $create_token_request;
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
                '\CollingMedia\Client\Model\ResponseOfTokenResponse',
                '/rest/asset/v1/folder/{id}/tokens.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteTokenByNameUsingPOST
     *
     * Delete Token by Name
     *
     * @param int $id id (required)
     * @param \CollingMedia\Client\Model\DeleteTokenRequest $delete_token_request deleteTokenRequest (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfIdResponse
     */
    public function deleteTokenByNameUsingPOST($id, $delete_token_request)
    {
        list($response) = $this->deleteTokenByNameUsingPOSTWithHttpInfo($id, $delete_token_request);
        return $response;
    }

    /**
     * Operation deleteTokenByNameUsingPOSTWithHttpInfo
     *
     * Delete Token by Name
     *
     * @param int $id id (required)
     * @param \CollingMedia\Client\Model\DeleteTokenRequest $delete_token_request deleteTokenRequest (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTokenByNameUsingPOSTWithHttpInfo($id, $delete_token_request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteTokenByNameUsingPOST');
        }
        // verify the required parameter 'delete_token_request' is set
        if ($delete_token_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $delete_token_request when calling deleteTokenByNameUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/folder/{id}/tokens/delete.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

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

        // body params
        $_tempBody = null;
        if (isset($delete_token_request)) {
            $_tempBody = $delete_token_request;
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
                '\CollingMedia\Client\Model\ResponseOfIdResponse',
                '/rest/asset/v1/folder/{id}/tokens/delete.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfIdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfIdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTokensByFolderIdUsingGET
     *
     * Get Tokens by Folder Id
     *
     * @param int $id id (required)
     * @param string $folder_type Type of folder.  &#39;Folder&#39; or &#39;Program&#39; (optional, default to Folder)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfTokenResponse
     */
    public function getTokensByFolderIdUsingGET($id, $folder_type = null)
    {
        list($response) = $this->getTokensByFolderIdUsingGETWithHttpInfo($id, $folder_type);
        return $response;
    }

    /**
     * Operation getTokensByFolderIdUsingGETWithHttpInfo
     *
     * Get Tokens by Folder Id
     *
     * @param int $id id (required)
     * @param string $folder_type Type of folder.  &#39;Folder&#39; or &#39;Program&#39; (optional, default to Folder)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokensByFolderIdUsingGETWithHttpInfo($id, $folder_type = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTokensByFolderIdUsingGET');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/folder/{id}/tokens.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if ($folder_type !== null) {
            $queryParams['folderType'] = $this->apiClient->getSerializer()->toQueryValue($folder_type);
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
                '\CollingMedia\Client\Model\ResponseOfTokenResponse',
                '/rest/asset/v1/folder/{id}/tokens.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
