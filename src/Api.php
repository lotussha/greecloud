<?php
/**
 * Created by PhpStorm.
 * PHP version 版本号
 *
 * @category 类别名称
 * @package  暂无
 * @author   hj <138610033@qq.com>
 * @license  暂无
 * @link     暂无
 * DateTime: 2020/11/9 下午2:14
 */

namespace Greecloud;

use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{
    private $appKey;

    private $appSecret;

    public function __construct(string $appKey, string $appSecret, string $url)
    {
        $this->appKey    = $appKey;
        $this->appSecret = $appSecret;
        $this->url       = $url;
    }

    public function request(string $method, array $array)
    {
        $params   = [
            'appKey'        => $this->appKey,
            'appSecret'     => $this->appSecret,
            'paramsContent' => json_encode($array),
        ];
        $http     = $this->getHttp();
        $response = $http->post($this->url . $method, $params);

        $result = json_decode(strval($response->getBody()), true);

        $this->checkErrorAndThrow($result);

        return $result;
    }

    public function signature()
    {

    }

    /**
     * @param $result
     * @throws MeituanDispatchException
     */
    private function checkErrorAndThrow($result)
    {
        if (!$result || $result['status'] != 200) {
            throw new GreeCloudException($result['result'], $result['status']);
        }
    }
}