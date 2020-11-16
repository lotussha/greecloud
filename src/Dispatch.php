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
 * DateTime: 2020/11/9 下午2:18
 */

namespace Greecloud;

use Hanson\Foundation\Foundation;

class Dispatch extends Foundation
{
    private $gree;
    private $conversion;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->gree = new Gree($config['appKey'], $config['appSecret'], $config['url']);
        $this->conversion = new Conversion($config['appKey']);
    }

    public function __call($name, $arguments)
    {
        return $this->gree->{$name}(...($this->conversion->{$name}($arguments)));
    }
}