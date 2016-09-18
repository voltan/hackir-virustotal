<?php
namespace VirusTotal;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;

/**
 * Light-weight Factory to construct HTTP calls
 */
class ApiBase
{
    /**
     * @var string - Virus Total API endpoint prefix
     */
    const API_ENDPOINT = 'https://www.virustotal.com/vtapi/v2/';

    /**
     * @var ClientInterface - http client
     */
    protected $_client;

    /**
     * @var string - virus total api key
     */
    protected $_apiKey;

    /**
     * Constructor
     * @param string          $apiKey
     * @param ClientInterface $client
     */
    public function __construct($apiKey, ClientInterface $client = null) {
        $this->_apiKey =  $apiKey;

        if ( empty( $client) ) {
            $this->_client = new Client(array(
                'base_uri' => self::API_ENDPOINT,
            ));
        }
    }

    /**
     * Util function to make post request
     * @param string          $endpoint
     * @param array           $params
     * @return (?)
     * @see Client
     * @throw \VirusTotal\Exceptions\RateLimitException
     * @throw \VirusTotal\Exceptions\InvalidApiKeyException
     */
    protected function makePostRequest($endpoint, array $params) {
        try {
            $response = $this->_client->post($endpoint, $params);
            $this->validateResponse($response->getStatusCode());
            return $response;
        } catch(ClientException $e) {
            $this->validateResponse($e->getResponse()->getStatusCode());
        }
    }


    /**
     * Util function to make get request
     * @param string          $endpoint
     * @param array           $params
     * @return (?)
     * @throw \VirusTotal\Exceptions\RateLimitException
     * @throw \VirusTotal\Exceptions\InvalidApiKeyException
     */
    protected function makeGetRequest($endpoint, array $params) {
        // Constructs get url
        // e.g:
        // endpoint = 'ip-address/report'
        //
        // params => array(
        //                'ip'       => '192.168.2.1',
        //                'apikey'   => 'supersecureapikey'
        //            )
        //
        // It maps to:
        // https://www.virustotal.com/vtapi/v2/ip-address/report?ip=192.168.2.1&apikey=supersecureapikey
        try {
            $url = self::API_ENDPOINT . $endpoint . '?'. http_build_query($params);
            $response = $this->_client->get($url);
            $this->validateResponse($response->getStatusCode());
            return $response;
        } catch(ClientException $e) {
            $this->validateResponse($e->getResponse()->getStatusCode());
        }
    }

    /**
     * Validate response by looking up the http status code
     * @param int $statusCode - http status code
     * @throw \VirusTotal\Exceptions\RateLimitException
     * @throw \VirusTotal\Exceptions\InvalidApiKeyException
     */
    protected function validateResponse($statusCode) {
        switch($statusCode) {
            case 204:
                throw new Exceptions\RateLimitException('Too many requests');
            case 403:
                throw new Exceptions\InvalidApiKeyException(sprintf('Key %s is invalid', $this->_apiKey));
            default:
                return;
        }
    }
}

?>
