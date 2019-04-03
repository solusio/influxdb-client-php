<?php
/**
 * ProtosApi
 * PHP version 5
 *
 * @category Class
 * @package  InfluxDB2Generated
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Influx API Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfluxDB2Generated\ApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use InfluxDB2Generated\ApiException;
use InfluxDB2Generated\Configuration;
use InfluxDB2Generated\HeaderSelector;
use InfluxDB2Generated\ObjectSerializer;

/**
 * ProtosApi Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2Generated
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProtosApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation protosGet
     *
     * List of available protos (templates of tasks/dashboards/etc)
     *
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InfluxDB2Generated\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \InfluxDB2Generated\Model\Protos|\InfluxDB2Generated\Model\Error
     */
    public function protosGet($zap_trace_span = null)
    {
        list($response) = $this->protosGetWithHttpInfo($zap_trace_span);
        return $response;
    }

    /**
     * Operation protosGetWithHttpInfo
     *
     * List of available protos (templates of tasks/dashboards/etc)
     *
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InfluxDB2Generated\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \InfluxDB2Generated\Model\Protos|\InfluxDB2Generated\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function protosGetWithHttpInfo($zap_trace_span = null)
    {
        $request = $this->protosGetRequest($zap_trace_span);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\InfluxDB2Generated\Model\Protos' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\InfluxDB2Generated\Model\Protos', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\InfluxDB2Generated\Model\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\InfluxDB2Generated\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\InfluxDB2Generated\Model\Protos';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\InfluxDB2Generated\Model\Protos',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\InfluxDB2Generated\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation protosGetAsync
     *
     * List of available protos (templates of tasks/dashboards/etc)
     *
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function protosGetAsync($zap_trace_span = null)
    {
        return $this->protosGetAsyncWithHttpInfo($zap_trace_span)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation protosGetAsyncWithHttpInfo
     *
     * List of available protos (templates of tasks/dashboards/etc)
     *
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function protosGetAsyncWithHttpInfo($zap_trace_span = null)
    {
        $returnType = '\InfluxDB2Generated\Model\Protos';
        $request = $this->protosGetRequest($zap_trace_span);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'protosGet'
     *
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function protosGetRequest($zap_trace_span = null)
    {

        $resourcePath = '/protos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($zap_trace_span !== null) {
            $headerParams['Zap-Trace-Span'] = ObjectSerializer::toHeaderValue($zap_trace_span);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation protosProtoIDDashboardsPost
     *
     * Create instance of a proto dashboard
     *
     * @param  string $proto_id ID of proto (required)
     * @param  \InfluxDB2Generated\Model\CreateProtoResourcesRequest $create_proto_resources_request organization that the dashboard will be created as (required)
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InfluxDB2Generated\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \InfluxDB2Generated\Model\Dashboards|\InfluxDB2Generated\Model\Error
     */
    public function protosProtoIDDashboardsPost($proto_id, $create_proto_resources_request, $zap_trace_span = null)
    {
        list($response) = $this->protosProtoIDDashboardsPostWithHttpInfo($proto_id, $create_proto_resources_request, $zap_trace_span);
        return $response;
    }

    /**
     * Operation protosProtoIDDashboardsPostWithHttpInfo
     *
     * Create instance of a proto dashboard
     *
     * @param  string $proto_id ID of proto (required)
     * @param  \InfluxDB2Generated\Model\CreateProtoResourcesRequest $create_proto_resources_request organization that the dashboard will be created as (required)
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InfluxDB2Generated\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \InfluxDB2Generated\Model\Dashboards|\InfluxDB2Generated\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function protosProtoIDDashboardsPostWithHttpInfo($proto_id, $create_proto_resources_request, $zap_trace_span = null)
    {
        $request = $this->protosProtoIDDashboardsPostRequest($proto_id, $create_proto_resources_request, $zap_trace_span);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\InfluxDB2Generated\Model\Dashboards' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\InfluxDB2Generated\Model\Dashboards', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\InfluxDB2Generated\Model\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\InfluxDB2Generated\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\InfluxDB2Generated\Model\Dashboards';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\InfluxDB2Generated\Model\Dashboards',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\InfluxDB2Generated\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation protosProtoIDDashboardsPostAsync
     *
     * Create instance of a proto dashboard
     *
     * @param  string $proto_id ID of proto (required)
     * @param  \InfluxDB2Generated\Model\CreateProtoResourcesRequest $create_proto_resources_request organization that the dashboard will be created as (required)
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function protosProtoIDDashboardsPostAsync($proto_id, $create_proto_resources_request, $zap_trace_span = null)
    {
        return $this->protosProtoIDDashboardsPostAsyncWithHttpInfo($proto_id, $create_proto_resources_request, $zap_trace_span)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation protosProtoIDDashboardsPostAsyncWithHttpInfo
     *
     * Create instance of a proto dashboard
     *
     * @param  string $proto_id ID of proto (required)
     * @param  \InfluxDB2Generated\Model\CreateProtoResourcesRequest $create_proto_resources_request organization that the dashboard will be created as (required)
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function protosProtoIDDashboardsPostAsyncWithHttpInfo($proto_id, $create_proto_resources_request, $zap_trace_span = null)
    {
        $returnType = '\InfluxDB2Generated\Model\Dashboards';
        $request = $this->protosProtoIDDashboardsPostRequest($proto_id, $create_proto_resources_request, $zap_trace_span);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'protosProtoIDDashboardsPost'
     *
     * @param  string $proto_id ID of proto (required)
     * @param  \InfluxDB2Generated\Model\CreateProtoResourcesRequest $create_proto_resources_request organization that the dashboard will be created as (required)
     * @param  string $zap_trace_span OpenTracing span context (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function protosProtoIDDashboardsPostRequest($proto_id, $create_proto_resources_request, $zap_trace_span = null)
    {
        // verify the required parameter 'proto_id' is set
        if ($proto_id === null || (is_array($proto_id) && count($proto_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $proto_id when calling protosProtoIDDashboardsPost'
            );
        }
        // verify the required parameter 'create_proto_resources_request' is set
        if ($create_proto_resources_request === null || (is_array($create_proto_resources_request) && count($create_proto_resources_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_proto_resources_request when calling protosProtoIDDashboardsPost'
            );
        }

        $resourcePath = '/protos/{protoID}/dashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($zap_trace_span !== null) {
            $headerParams['Zap-Trace-Span'] = ObjectSerializer::toHeaderValue($zap_trace_span);
        }

        // path params
        if ($proto_id !== null) {
            $resourcePath = str_replace(
                '{' . 'protoID' . '}',
                ObjectSerializer::toPathValue($proto_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($create_proto_resources_request)) {
            $_tempBody = $create_proto_resources_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
