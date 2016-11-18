<?php

namespace Ubo\Client\Api;

use \Ubo\Client\Configuration;
use \Ubo\Client\ApiClient;
use \Ubo\Client\ApiException;
use \Ubo\Client\ObjectSerializer;

class UboApi
{

    /**
     * API Client
     *
     * @var \Ubo\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    protected $identity;

    /**
     * Constructor
     *
     * @param \Ubo\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Ubo\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.visp.net/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Ubo\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Ubo\Client\ApiClient $apiClient set the API client
     *
     * @return VispApi
     */
    public function setApiClient(\Ubo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomers
     *
     * Allows the query to create and read your customer list
     *
     * @param string $x_visp_access_token The bearer token issued by the API Token Endpoint (required)
     * @param int $tower Searches the customers subscribed to a particular tower. Tower ID is needed to identify the selected tower (optional)
     * @param string $search Searches for all customers with the specified input text. You can narrow down the search by adding the filterBy parameter (optional)
     * @param string[] $filter_by Narrows down the search to the type of data that is specified (optional)
     * @param int $limit Limits the number of customer data returned (optional)
     * @param int $page Retrieves the nth page of the limit. It requires the limit parameter (optional)
     * @return \Ubo\Client\Model\Customer[]
     * @throws \Ubo\Client\ApiException on non-2xx response
     */
    public function getCustomers($tower = null, $search = null, $filter_by = null, $limit = null, $page = null)
    {
        list($response) = $this->getCustomersWithHttpInfo($this->identity->getToken(), $tower, $search, $filter_by, $limit, $page);
        return $response;
    }

    /**
     * Operation getCustomersWithHttpInfo
     *
     * Allows the query to create and read your customer list
     *
     * @param string $x_visp_access_token The bearer token issued by the API Token Endpoint (required)
     * @param int $tower Searches the customers subscribed to a particular tower. Tower ID is needed to identify the selected tower (optional)
     * @param string $search Searches for all customers with the specified input text. You can narrow down the search by adding the filterBy parameter (optional)
     * @param string[] $filter_by Narrows down the search to the type of data that is specified (optional)
     * @param int $limit Limits the number of customer data returned (optional)
     * @param int $page Retrieves the nth page of the limit. It requires the limit parameter (optional)
     * @return Array of \Ubo\Client\Model\Customer[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Ubo\Client\ApiException on non-2xx response
     */
    public function getCustomersWithHttpInfo($x_visp_access_token, $tower = null, $search = null, $filter_by = null, $limit = null, $page = null)
    {
        // verify the required parameter 'x_visp_access_token' is set
        if ($x_visp_access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_visp_access_token when calling getCustomers');
        }
        // parse inputs
        $resourcePath = "/v1/customers";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($tower !== null) {
            $queryParams['tower'] = $this->apiClient->getSerializer()->toQueryValue($tower);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if (is_array($filter_by)) {
            $filter_by = $this->apiClient->getSerializer()->serializeCollection($filter_by, 'csv', true);
        }
        if ($filter_by !== null) {
            $queryParams['filterBy'] = $this->apiClient->getSerializer()->toQueryValue($filter_by);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // header params
        if ($x_visp_access_token !== null) {
            $headerParams['x-visp-access-token'] = $this->apiClient->getSerializer()->toHeaderValue($x_visp_access_token);
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
                '\Ubo\Client\Model\Customer[]',
                '/v1/customers'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ubo\Client\Model\Customer[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ubo\Client\Model\Customer[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIdentity
     *
     * 
     *
     * @param string $x_visp_client_id The Client ID of the ISP (required)
     * @param string $x_visp_client_secret The Client Secret of the ISP (required)
     * @param string[] $x_visp_tenant_id The Tenant ID(s) of the ISP when dealing Multi-ISP enabled data (optional)
     * @return \Ubo\Client\Model\ApiToken
     * @throws \Ubo\Client\ApiException on non-2xx response
     */
    public function getIdentity($x_visp_client_id, $x_visp_client_secret, $x_visp_tenant_id = null)
    {
        list($response) = $this->getIdentityWithHttpInfo($x_visp_client_id, $x_visp_client_secret, $x_visp_tenant_id);
        return $response;
    }

    /**
     * Operation getIdentityWithHttpInfo
     *
     * 
     *
     * @param string $x_visp_client_id The Client ID of the ISP (required)
     * @param string $x_visp_client_secret The Client Secret of the ISP (required)
     * @param string[] $x_visp_tenant_id The Tenant ID(s) of the ISP when dealing Multi-ISP enabled data (optional)
     * @return Array of \Ubo\Client\Model\ApiToken, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ubo\Client\ApiException on non-2xx response
     */
    public function getIdentityWithHttpInfo($x_visp_client_id, $x_visp_client_secret, $x_visp_tenant_id = null)
    {
        // verify the required parameter 'x_visp_client_id' is set
        if ($x_visp_client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_visp_client_id when calling getIdentity');
        }
        // verify the required parameter 'x_visp_client_secret' is set
        if ($x_visp_client_secret === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_visp_client_secret when calling getIdentity');
        }
        // parse inputs
        $resourcePath = "/token";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // header params
        if ($x_visp_client_id !== null) {
            $headerParams['x-visp-client-id'] = $this->apiClient->getSerializer()->toHeaderValue($x_visp_client_id);
        }
        // header params
        if ($x_visp_client_secret !== null) {
            $headerParams['x-visp-client-secret'] = $this->apiClient->getSerializer()->toHeaderValue($x_visp_client_secret);
        }
        // header params
        if (is_array($x_visp_tenant_id)) {
            $x_visp_tenant_id = $this->apiClient->getSerializer()->serializeCollection($x_visp_tenant_id, 'csv');
        }
        if ($x_visp_tenant_id !== null) {
            $headerParams['x-visp-tenant-id'] = $this->apiClient->getSerializer()->toHeaderValue($x_visp_tenant_id);
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
                '\Ubo\Client\Model\ApiToken',
                '/token'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ubo\Client\Model\ApiToken', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ubo\Client\Model\ApiToken', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    public function authorize($identity) {
        $this->identity = $identity;
        return $this;
    }

}
