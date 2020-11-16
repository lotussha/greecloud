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
 * DateTime: 2020/11/9 下午3:01
 */

namespace Greecloud\Tests;

use Greecloud\Dispatch;

class test
{
    //protected $appKey = 'ef72cc07-6cae-4884-b00b-acd61e11ffb5';
    //protected $appSecret = 'e965fc7e-60d2-40aa-9ea9-d3dabb2eaa3d';
    protected $appKey = '221fb231-4e3d-4d1e-9f0b-c8783751ce66';
    protected $appSecret = 'f2a0d16a-7eab-424d-8d79-723aba382fed';
    protected $url = 'http://opentest.gree.com:8030/gateway';
    //protected $url = 'http://open.gree.com:8084/open-gateway';
    protected $dispatch;

    public function __construct()
    {
        require './vendor/autoload.php';

        $this->dispatch = new Dispatch([
            'appKey'    => $this->appKey,
            'appSecret' => $this->appSecret,
            'url'       => $this->url,
            'debug'     => true,
        ]);
    }

    /**
     * 用户列表
     * 表:fa_admin_information
     */
    public function userListQuery()
    {
        $result = $this->dispatch->userListQuery([
            'appId'     => $this->appKey,
            'starttime' => '1582003186000',
            'endtime'   => '1605161586000',
        ]);
        var_dump($result);
    }
}

$test = new test();
$test->userListQuery();