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
    protected $appKey = 'ef72cc07-6cae-4884-b00b-acd61e11ffb5';
    protected $appSecret = 'e965fc7e-60d2-40aa-9ea9-d3dabb2eaa3d';

    public function searchOrder()
    {
        require './vendor/autoload.php';
        $result = (new Dispatch(['appKey' => $this->appKey, 'appSecret' => $this->appSecret, 'debug' => true]))->wangdian_selectAllShwd(['appId' => $this->appKey, 'ssxsgs' => 'S921980101', 'pageNum' => 1]);
        var_dump($result);
    }
}

$test = new test();
$test->searchOrder();