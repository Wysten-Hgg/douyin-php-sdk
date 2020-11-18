<?php
/**
 * EnterpriseImCardListApi
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 消息卡片列表
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use swagger_client\ApiException;
use swagger_client\Configuration;
use swagger_client\HeaderSelector;
use swagger_client\ObjectSerializer;

/**
 * EnterpriseImCardListApi Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseImCardListApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation enterpriseImCardListGet
     *
     * 获取消息卡片列表
     *
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     * @param  int $count 每页数量 (required)
     * @param  int $cursor 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 (optional)
     *
     * @throws swagger_client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \swagger_client\Model\EnterpriseImCardCardListInlineResponse200
     */
    public function enterpriseImCardListGet($open_id, $access_token, $count, $cursor = null)
    {
        list($response) = $this->enterpriseImCardListGetWithHttpInfo($open_id, $access_token, $count, $cursor);
        return $response;
    }

    /**
     * Operation enterpriseImCardListGetWithHttpInfo
     *
     * 获取消息卡片列表
     *
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     * @param  int $count 每页数量 (required)
     * @param  int $cursor 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 (optional)
     *
     * @throws swagger_client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \swagger_client\Model\EnterpriseImCardCardListInlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function enterpriseImCardListGetWithHttpInfo($open_id, $access_token, $count, $cursor = null)
    {
        $returnType = '\swagger_client\Model\EnterpriseImCardCardListInlineResponse200';
        $request = $this->enterpriseImCardListGetRequest($open_id, $access_token, $count, $cursor);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\swagger_client\Model\EnterpriseImCardCardListInlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation enterpriseImCardListGetAsync
     *
     * 获取消息卡片列表
     *
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     * @param  int $count 每页数量 (required)
     * @param  int $cursor 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enterpriseImCardListGetAsync($open_id, $access_token, $count, $cursor = null)
    {
        return $this->enterpriseImCardListGetAsyncWithHttpInfo($open_id, $access_token, $count, $cursor)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation enterpriseImCardListGetAsyncWithHttpInfo
     *
     * 获取消息卡片列表
     *
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     * @param  int $count 每页数量 (required)
     * @param  int $cursor 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enterpriseImCardListGetAsyncWithHttpInfo($open_id, $access_token, $count, $cursor = null)
    {
        $returnType = '\swagger_client\Model\EnterpriseImCardCardListInlineResponse200';
        $request = $this->enterpriseImCardListGetRequest($open_id, $access_token, $count, $cursor);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'enterpriseImCardListGet'
     *
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     * @param  int $count 每页数量 (required)
     * @param  int $cursor 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function enterpriseImCardListGetRequest($open_id, $access_token, $count, $cursor = null)
    {
        // verify the required parameter 'open_id' is set
        if ($open_id === null || (is_array($open_id) && count($open_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $open_id when calling enterpriseImCardListGet'
            );
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null || (is_array($access_token) && count($access_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $access_token when calling enterpriseImCardListGet'
            );
        }
        // verify the required parameter 'count' is set
        if ($count === null || (is_array($count) && count($count) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $count when calling enterpriseImCardListGet'
            );
        }

        $resourcePath = '/enterprise/im/card/list/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($open_id !== null) {
            $queryParams['open_id'] = ObjectSerializer::toQueryValue($open_id);
        }
        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($access_token);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count);
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
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
