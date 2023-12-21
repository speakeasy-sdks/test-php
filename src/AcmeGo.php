<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace vitor_test\Acme;

/**
 * AcmeGo - User API for Speakeasy template service: The Rest Template API is an API used for instrucitonal purposes.
 * 
 * @package vitor_test\Acme
 * @access public
 */
class AcmeGo
{
	public const SERVERS = [
		'http://localhost:8080',
	];
  		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return AcmeGoBuilder
	 */
	public static function builder(): AcmeGoBuilder
	{
		return new AcmeGoBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
	}
	
    /**
     * Create user
     * 
     * @param \vitor_test\Acme\Models\Components\UserInput $request
     * @return \vitor_test\Acme\Models\Operations\CreateUserv1Response
     */
	public function createUserv1(
        \vitor_test\Acme\Models\Components\UserInput $request,
    ): \vitor_test\Acme\Models\Operations\CreateUserv1Response
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/user');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \vitor_test\Acme\Models\Operations\CreateUserv1Response();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\User', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete a user by ID
     * 
     * @param \vitor_test\Acme\Models\Operations\DeleteUserv1Request $request
     * @return \vitor_test\Acme\Models\Operations\DeleteUserv1Response
     */
	public function deleteUserv1(
        ?\vitor_test\Acme\Models\Operations\DeleteUserv1Request $request,
    ): \vitor_test\Acme\Models\Operations\DeleteUserv1Response
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/user/{id}', \vitor_test\Acme\Models\Operations\DeleteUserv1Request::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \vitor_test\Acme\Models\Operations\DeleteUserv1Response();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->success = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Success', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Healthcheck
     * 
     * @return \vitor_test\Acme\Models\Operations\GetHealthResponse
     */
	public function getHealth(
    ): \vitor_test\Acme\Models\Operations\GetHealthResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/health');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \vitor_test\Acme\Models\Operations\GetHealthResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a user by ID
     * 
     * @param \vitor_test\Acme\Models\Operations\GetUserv1Request $request
     * @return \vitor_test\Acme\Models\Operations\GetUserv1Response
     */
	public function getUserv1(
        ?\vitor_test\Acme\Models\Operations\GetUserv1Request $request,
    ): \vitor_test\Acme\Models\Operations\GetUserv1Response
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/user/{id}', \vitor_test\Acme\Models\Operations\GetUserv1Request::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \vitor_test\Acme\Models\Operations\GetUserv1Response();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\User', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Search users
     * 
     * @param \vitor_test\Acme\Models\Components\Filters $request
     * @return \vitor_test\Acme\Models\Operations\SearchUsersv1Response
     */
	public function searchUsersv1(
        \vitor_test\Acme\Models\Components\Filters $request,
    ): \vitor_test\Acme\Models\Operations\SearchUsersv1Response
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/users/search');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \vitor_test\Acme\Models\Operations\SearchUsersv1Response();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->users = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Users', 'json');
            }
        }

        return $response;
    }
	
    /**
     * updateUserv1
     * 
     * @param \vitor_test\Acme\Models\Operations\UpdateUserv1Request $request
     * @return \vitor_test\Acme\Models\Operations\UpdateUserv1Response
     */
	public function updateUserv1(
        \vitor_test\Acme\Models\Operations\UpdateUserv1Request $request,
    ): \vitor_test\Acme\Models\Operations\UpdateUserv1Response
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/user/{id}', \vitor_test\Acme\Models\Operations\UpdateUserv1Request::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "user", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \vitor_test\Acme\Models\Operations\UpdateUserv1Response();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\User', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'vitor_test\Acme\Models\Components\Error', 'json');
            }
        }

        return $response;
    }
}