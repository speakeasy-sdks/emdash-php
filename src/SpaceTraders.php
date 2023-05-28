<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace emdash\SpaceTraders;

/**
 * SpaceTraders - SpaceTraders is an open-universe game and learning platform that offers a set of HTTP endpoints to control a fleet of ships and explore a multiplayer universe.
 * 
 * 
 * The API is documented using [OpenAPI](https://github.com/SpaceTradersAPI/api-docs). You can send your first request right here in your browser to check the status of the game server.
 * 
 * ```json http
 * {
 *   "method": "GET",
 *   "url": "https://api.spacetraders.io/v2",
 * }
 * ```
 * 
 * Unlike a traditional game, SpaceTraders does not have a first-party client or app to play the game. Instead, you can use the API to build your own client, write a script to automate your ships, or try an app built by the community.
 * 
 * We have a [Discord channel](https://discord.com/invite/jh6zurdWk5) where you can share your projects, ask questions, and get help from other players.
 * 
 * 
 * 
 * 
 * @package emdash\SpaceTraders
 * @access public
 */
class SpaceTraders
{
	public const SERVERS = [
        /** v2 */
		'https://api.spacetraders.io/v2',
	];
  	
    /**
     * Agents
     * 
     * @var Agents $$agents
     */
	public Agents $agents;
	
    /**
     * Contracts
     * 
     * @var Contracts $$contracts
     */
	public Contracts $contracts;
	
    /**
     * Factions
     * 
     * @var Factions $$factions
     */
	public Factions $factions;
	
    /**
     * Fleet
     * 
     * @var Fleet $$fleet
     */
	public Fleet $fleet;
	
    /**
     * Systems
     * 
     * @var Systems $$systems
     */
	public Systems $systems;
		
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	private ?Models\Shared\Security $_security;
	private string $_serverUrl;
	private string $_language = 'php';
	private string $_sdkVersion = '1.0.0';
	private string $_genVersion = '2.32.7';

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return SpaceTradersBuilder
	 */
	public static function builder(): SpaceTradersBuilder
	{
		return new SpaceTradersBuilder();
	}

	/**
	 * @param \GuzzleHttp\ClientInterface|null $client	 
	 * @param Models\Shared\Security|null $security
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, ?Models\Shared\Security $security, string $serverUrl, ?array $params)
	{
		$this->_defaultClient = $client;
		
		if ($this->_defaultClient === null) {
			$this->_defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if ($security !== null) {
			$this->_security = $security;
			$this->_securityClient = Utils\Utils::configureSecurityClient($this->_defaultClient, $this->_security);
		}
		
		if ($this->_securityClient === null) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[0];
		}
		
		$this->agents = new Agents(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->contracts = new Contracts(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->factions = new Factions(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->fleet = new Fleet(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->systems = new Systems(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
	}
	
    /**
     * Get Status
     * 
     * Return the status of the game server.
     * 
     * @return \emdash\SpaceTraders\Models\Operations\GetStatusResponse
     */
	public function getStatus(
    ): \emdash\SpaceTraders\Models\Operations\GetStatusResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \emdash\SpaceTraders\Models\Operations\GetStatusResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getStatus200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'emdash\SpaceTraders\Models\Operations\GetStatus200ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Register New Agent
     * 
     * Creates a new agent and ties it to a temporary Account.
     * 
     * The agent symbol is a 3-14 character string that will represent your agent. This symbol will prefix the symbol of every ship you own. Agent symbols will be cast to all uppercase characters.
     * 
     * A new agent will be granted an authorization token, a contract with their starting faction, a command ship with a jump drive, and one hundred thousand credits.
     * 
     * > #### Keep your token safe and secure
     * >
     * > Save your token during the alpha phase. There is no way to regenerate this token without starting a new agent. In the future you will be able to generate and manage your tokens from the SpaceTraders website.
     * 
     * You can accept your contract using the `/my/contracts/{contractId}/accept` endpoint. You will want to navigate your command ship to a nearby asteroid field and execute the `/my/ships/{shipSymbol}/extract` endpoint to mine various types of ores and minerals.
     * 
     * Return to the contract destination and execute the `/my/ships/{shipSymbol}/deliver` endpoint to deposit goods into the contract.
     * 
     * When your contract is fulfilled, you can call `/my/contracts/{contractId}/fulfill` to retrieve payment.
     * 
     * @param \emdash\SpaceTraders\Models\Operations\RegisterRequestBody $request
     * @return \emdash\SpaceTraders\Models\Operations\RegisterResponse
     */
	public function register(
        \emdash\SpaceTraders\Models\Operations\RegisterRequestBody $request,
    ): \emdash\SpaceTraders\Models\Operations\RegisterResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/register');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \emdash\SpaceTraders\Models\Operations\RegisterResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->register201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'emdash\SpaceTraders\Models\Operations\Register201ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}