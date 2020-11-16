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
 * DateTime: 2020/11/12 上午10:24
 */

namespace Greecloud;

class Conversion
{

    private $data = [];

    public function __construct($appId)
    {
        $this->data['appId'] = $appId;
    }

    public function conversion($param, $arr = [], $optional = [])
    {
        foreach ($arr as $key => $value) {
            if (array_key_exists($key, $param[0])) {
                $this->data[$arr[$key]] = $param[0][$key];
            } elseif (in_array($key, $optional)) {
                continue;
            } else {
                throw new GreeCloudException($key . '不能为空', 1);
            }
        }
        return [0 => $this->data];
    }

    public function userAdd($param)
    {
        $arr = [
            'username'      => 'usnm',
            'password'      => 'pswd',
            'rols'          => 'rols',
            'status'        => 'stat',
            'czren'         => 'czren',
            'czrmc'         => 'czrmc',
            'websit_number' => 'wdno',
            'lbid'          => 'lbid',
            'spid'          => 'spid',
            'createtime'    => 'cjsj',
            'updatetime'    => 'zjczsj',
        ];
        return $this->conversion($param, $arr);
    }

    public function userupdate($param)
    {
        $arr = [
            'old_number'    => 'usid',
            'websit_number' => 'wdno',
            'updatetime'    => 'zjczsj',
        ];
        return $this->conversion($param, $arr);
    }

    public function userListQuery($param)
    {
        $arr = [
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ];
        return $this->conversion($param, $arr);
    }

    public function wangdian_selectAllShwd($param)
    {
        $optional = ['websit_number'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'websit_number'  => 'wdno',
            'page'           => 'pageNum',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdian_selectAllXswd($param)
    {
        $optional = ['websit_number'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'websit_number'  => 'wdno',
            'page'           => 'pageNum',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdiansjdwmx_selectAllSjdwmx($param)
    {
        $optional = ['websit_number', 'parent_websit'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'type'           => 'fwlb',
            'websit_number'  => 'wdno',
            'parent_websit'  => 'sjwdno',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdian_newXswd($param)
    {
        $optional = ['street'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'websit_number'  => 'wdno',
            'name'           => 'wdmc',
            'xtwdbh'         => 'xtwdbh',
            'province'       => 'sfen',
            'city'           => 'cshi',
            'area'           => 'xian',
            'street'         => 'xzhen',
            'address'        => 'dizi',
            'manager_name'   => 'fzren',
            'manager_phone'  => 'yddh',
            'product_ids'    => 'spids',
            'type'           => 'xsorsh',
            'manager_level'  => 'jycj',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdian_updateXswd($param)
    {
        $optional = ['street'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'websit_number'  => 'wdno',
            'name'           => 'wdmc',
            'xtwdbh'         => 'xtwdbh',
            'province'       => 'sfen',
            'city'           => 'cshi',
            'area'           => 'xian',
            'street'         => 'xzhen',
            'address'        => 'dizi',
            'manager_name'   => 'fzren',
            'manager_phone'  => 'yddh',
            'product_ids'    => 'spids',
            'type'           => 'xsorsh',
            'manager_level'  => 'jycj',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdian_updateShwd($param)
    {
        $optional = ['street'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'websit_number'  => 'wdno',
            'name'           => 'wdmc',
            'xtwdbh'         => 'xtwdbh',
            'province'       => 'sfen',
            'city'           => 'cshi',
            'area'           => 'xian',
            'street'         => 'xzhen',
            'address'        => 'dizi',
            'manager_name'   => 'fzren',
            'manager_phone'  => 'yddh',
            'product_ids'    => 'spids',
            'type'           => 'xsorsh',
            'office_phone'   => 'dhhm',
            'wdjb'           => 'wdjb',
            'fax'            => 'czhen',
            'postcode'       => 'ybian',
            'area_code'      => 'quhao',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdian_newShwd($param)
    {
        $optional = ['street', 'beiz'];
        $arr      = [
            'belong_company' => 'ssxsgs',
            'websit_number'  => 'wdno',
            'name'           => 'wdmc',
            'xtwdbh'         => 'xtwdbh',
            'province'       => 'sfen',
            'city'           => 'cshi',
            'area'           => 'xian',
            'street'         => 'xzhen',
            'address'        => 'dizi',
            'manager_name'   => 'fzren',
            'manager_phone'  => 'yddh',
            'product_ids'    => 'spids',
            'type'           => 'xsorsh',
            'office_phone'   => 'dhhm',
            'wdjb'           => 'wdjb',
            'fax'            => 'czhen',
            'postcode'       => 'ybian',
            'area_code'      => 'quhao',
            'beiz'           => 'beiz',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdianqhgx_selectAllQhgx($param)
    {
        $optional = ['x_websit_number', 's_websit_number'];
        $arr      = [
            'belong_company'  => 'ssxsgs',
            'x_websit_number' => 'xswdno',
            's_websit_number' => 'shwdno',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdianhgx_add($param)
    {
        $optional = [];
        $arr      = [
            'belong_company'  => 'ssxsgs',
            'x_websit_number' => 'xswdno',
            'x_name'          => 'xswdmc',
            's_websit_number' => 'shwdno',
            's_name'          => 'shwdmc',
            'sfyj'            => 'sfyj',
            'product_ids'     => 'spids',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdianqhgx_updateXsqhgx($param)
    {
        $optional = [];
        $arr      = [
            'belong_company'  => 'ssxsgs',
            'x_websit_number' => 'xswdno',
            'x_name'          => 'xswdmc',
            's_websit_number' => 'shwdno',
            's_name'          => 'shwdmc',
            'sfyj'            => 'sfyj',
            'product_ids'     => 'spids',
            'type'            => 'xsorsh',
            'websit_number'   => 'oldxswdno',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdianqhgx_updateShqhgx($param)
    {
        $optional = [];
        $arr      = [
            'belong_company'  => 'ssxsgs',
            'x_websit_number' => 'xswdno',
            'x_name'          => 'xswdmc',
            's_websit_number' => 'shwdno',
            's_name'          => 'shwdmc',
            'sfyj'            => 'sfyj',
            'product_ids'     => 'spids',
            'type'            => 'xsorsh',
            'websit_number'   => 'oldshwdno',
        ];
        return $this->conversion($param, $arr, $optional);
    }

    public function wangdianjswdgx_selectAlljswdgx($param)
    {
        $optional = [];
        $arr = [
            'belong_company'  => 'ssxsgs',
        ];
        return $this->conversion($param, $arr, $optional);
    }
}