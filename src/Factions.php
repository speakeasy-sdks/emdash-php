<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders;

class Factions 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Get Faction
     * 
     * View the details of a faction.
     * 
     * @param \emdash\SpaceTraders\Models\Operations\GetFactionRequest $request
     * @return \emdash\SpaceTraders\Models\Operations\GetFactionResponse
     */
	public function getFaction(
        \emdash\SpaceTraders\Models\Operations\GetFactionRequest $request,
    ): \emdash\SpaceTraders\Models\Operations\GetFactionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/factions/{factionSymbol}', \emdash\SpaceTraders\Models\Operations\GetFactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \emdash\SpaceTraders\Models\Operations\GetFactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getFaction200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'emdash\SpaceTraders\Models\Operations\GetFaction200ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List Factions
     * 
     * List all discovered factions in the game.
     * 
     * @param \emdash\SpaceTraders\Models\Operations\GetFactionsRequest $request
     * @return \emdash\SpaceTraders\Models\Operations\GetFactionsResponse
     */
	public function getFactions(
        \emdash\SpaceTraders\Models\Operations\GetFactionsRequest $request,
    ): \emdash\SpaceTraders\Models\Operations\GetFactionsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/factions');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\emdash\SpaceTraders\Models\Operations\GetFactionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \emdash\SpaceTraders\Models\Operations\GetFactionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getFactions200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'emdash\SpaceTraders\Models\Operations\GetFactions200ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}