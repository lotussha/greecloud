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
 * DateTime: 2020/11/9 下午2:19
 */

namespace Greecloud;

class Gree extends Api
{
    /* ---------------------------------------------用户------------------------------------------ */
    //派工查询
    public function queryAssign($params)
    {
        return $this->request('/api/v1/queryAssign', $params);
    }

    //自动派工
    public function assign($params)
    {
        return $this->request('/api/v1/assign', $params);
    }

    //修改服务人员
    public function wxgUpdate($params)
    {
        return $this->request('/api/v1/wxgUpdate', $params);
    }

    //新增服务人员
    public function wxgAdd($params)
    {
        return $this->request('/api/v1/wxgAdd', $params);
    }

    //查询服务人员
    public function wxgQuery($params)
    {
        return $this->request('/api/v1/wxgQuery', $params);
    }

    //查询服务人员列表
    public function wxgQueryList($params)
    {
        return $this->request('/api/v1/wxgQueryList', $params);
    }

    //修改后台用户
    public function userupdate($params)
    {
        return $this->request('/api/v1/userupdate', $params);
    }

    //新增后台用户
    public function userAdd($params)
    {
        return $this->request('/api/v1/userAdd', $params);
    }

    //查询后台用户
    public function userQuery($params)
    {
        return $this->request('/api/v1/userQuery', $params);
    }

    //查询时间段内的广佛用户
    public function userListQuery($params)
    {
        return $this->request('/api/v1/userListQuery', $params);
    }

    /* ---------------------------------------------用户------------------------------------------ */


    /* ---------------------------------------------工单------------------------------------------ */

    //安装工单查询
    public function azAssign_search($params)
    {
        return $this->request('/api/1.0.0/azAssign-search', $params);
    }

    //单个安装工单信息查询
    public function azAssign_detailAzAssign($params)
    {
        return $this->request('/api/1.0.0/azAssign-detailAzAssign', $params);
    }

    //获取安装结算信息
    public function azAssign_azjsYzjs($params)
    {
        return $this->request('/api/1.0.0/azAssign-azjsYzjs', $params);
    }

    //安装工单接收回传
    public function azAssign_receiveInfoAzAssign($params)
    {
        return $this->request('/api/1.0.0/azAssign-receiveInfoAzAssign', $params);
    }

    //安装工单新增
    public function azAssign_add($params)
    {
        return $this->request('/api/1.0.0/azAssign-add', $params);
    }

    //新增安装工单产品明细
    public function azAssign_addAzAssignMx($params)
    {
        return $this->request('/api/1.0.0/azAssign-addAzAssignMx', $params);
    }

    //删除安装工单产品明细
    public function azAssign_deleteAzAssignMx($params)
    {
        return $this->request('/api/1.0.0/azAssign-deleteAzAssignMx', $params);
    }

    //安装工单主表更新
    public function azAssign_updateAzAssign($params)
    {
        return $this->request('/api/1.0.0/azAssign-updateAzAssign', $params);
    }

    //安装工单产品明细更新
    public function azAssign_updateAzAssignMx($params)
    {
        return $this->request('/api/1.0.0/azAssign-updateAzAssignMx', $params);
    }

    //家用完工明细采集
    public function azJyWgmx_add($params)
    {
        return $this->request('/api/1.0.0/azJyWgmx-add', $params);
    }

    //家用完工明细采集修改
    public function azWgmx_update($params)
    {
        return $this->request('/api/1.0.0/azWgmx-update', $params);
    }

    //安装工单增加反馈信息
    public function azAssign_insertFkmx($params)
    {
        return $this->request('/api/1.0.0/azAssign-insertFkmx', $params);
    }

    //第三方(销售公司)对于京东工单,即是qqlymc为TBL_BJU_AZ_ASSIGN_LC_LS,做派工节点反馈,如派工人(1301节点)(派工人前先做预约用户),工人接收工单(1302节点)
    public function azAssign_insertJDPgjd($params)
    {
        return $this->request('/api/1.0.0/azAssign-insertJDPgjd', $params);
    }

    //第三方(销售公司)对于京东工单,即是qqlymc为TBL_BJU_AZ_ASSIGN_LC_LS,做改约工单节点反馈
    public function azAssign_insertJDGyjd($params)
    {
        return $this->request('/api/1.0.0/azAssign-insertJDGyjd', $params);
    }

    //第三方(销售公司)对于京东工单,即是qqlymc为TBL_BJU_AZ_ASSIGN_LC_LS,做报完工,或取消工单节点反馈
    public function azAssign_insertJDBwgjd($params)
    {
        return $this->request('/api/1.0.0/azAssign-insertJDBwgjd', $params);
    }

    //新商城工单反馈明细 qqlymc='TBL_NEW_DS_ORDERINFO'
    public function newds_addFkmx($params)
    {
        return $this->request('/api/1.0.0/newds-addFkmx', $params);
    }

    //天猫工单过程反馈 qqlymc='TBL_TMALL_ORDERINFO'
    public function tmall_addFkmx($params)
    {
        return $this->request('/api/1.0.0/tmall-addFkmx', $params);
    }

    //维修工单查询
    public function assign_search($params)
    {
        return $this->request('/api/1.0.0/assign-search', $params);
    }

    //单个维修工单查询
    public function assign_searchByPgid($params)
    {
        return $this->request('/api/1.0.0/assign_searchByPgid', $params);
    }

    //维修工单接收成功反馈
    public function assign_receiveInfoAssign($params)
    {
        return $this->request('/api/1.0.0/assign-receiveInfoAssign', $params);
    }

    //新增维修工单
    public function assign_add($params)
    {
        return $this->request('/api/1.0.0/assign-add', $params);
    }

    //维修工单更新接口
    public function assign_updateAssign($params)
    {
        return $this->request('/api/1.0.0/assign-updateAssign', $params);
    }

    //维修数据采集新增接口
    public function wxtojs_add($params)
    {
        return $this->request('/api/1.0.0/wxtojs-add', $params);
    }

    //维修数据采集更新接口
    public function wxtojs_update($params)
    {
        return $this->request('/api/1.0.0/wxtojs-update', $params);
    }

    //维修数据查询接口
    public function wxtojs_search($params)
    {
        return $this->request('/api/1.0.0/wxtojs-search', $params);
    }

    /* ---------------------------------------------工单------------------------------------------ */

    /* ---------------------------------------------网点------------------------------------------ */

    //查询销售类型
    public function xslx_search($params)
    {
        return $this->request('/api/v1/xslx-search', $params);
    }

    //查询用户属性
    public function yhsx_search($params)
    {
        return $this->request('/api/v1/yhsx-search', $params);
    }

    //查询销售渠道
    public function xxqd_search($params)
    {
        return $this->request('/api/v1/xxqd-search', $params);
    }

    //查询信息来源
    public function xxly_search($params)
    {
        return $this->request('/api/v1/xxly-search', $params);
    }

    //查询故障代码
    public function gzdm_search($params)
    {
        return $this->request('/api/v1/gzdm-search', $params);
    }

    //获取新网点编号
    public function wangdian_initwdno($params)
    {
        return $this->request('/api/v1/wangdian-initwdno', $params);
    }

    //获取销售网点数据
    public function wangdian_selectAllXswd($params)
    {
        return $this->request('/api/v1/wangdian-selectAllXswd', $params);
    }

    //获取售后网点数据
    public function wangdian_selectAllShwd($params)
    {
        return $this->request('/api/v1/wangdian-selectAllShwd', $params);
    }

    //获取销售网点上下级关系
    public function wangdiansjdwmx_selectAllSjdwmx($params)
    {
        return $this->request('/api/v1/wangdiansjdwmx-selectAllSjdwmx', $params);
    }

    //获取销售售后网点上下级关系
    public function wangdianqhgx_selectAllQhgx($params)
    {
        return $this->request('/api/v1/wangdianqhgx-selectAllQhgx', $params);
    }

    //新增销售售后对应关系
    public function wangdianqhgx_add($params)
    {
        return $this->request('/api/v1/wangdianqhgx-add', $params);
    }

    //调整售后网点
    public function wangdianqhgx_updateShqhgx($params)
    {
        return $this->request('/api/v1/wangdianqhgx-updateShqhgx', $params);
    }

    //调整销售网点
    public function wangdianqhgx_updateXsqhgx($params)
    {
        return $this->request('/api/v1/wangdianqhgx-updateXsqhgx', $params);
    }

    //更改单品类的网点上下级关系
    public function wangdiansjdwmx_update($params)
    {
        return $this->request('/api/v1/wangdiansjdwmx-update', $params);
    }

    //查询销售公司下网点的安装维修结算对应关系
    public function wangdianjswdgx_selectAlljswdgx($params)
    {
        return $this->request('/api/v1/wangdianjswdgx-selectAlljswdgx', $params);
    }

    //更改网点的安装结算对应关系
    public function wangdianjswdgx_updateAzJswdgx($params)
    {
        return $this->request('/api/v1/wangdianjswdgx-updateAzJswdgx', $params);
    }

    //更改网点的维修结算对应关系
    public function wangdianjswdgx_updateWxJswdgx($params)
    {
        return $this->request('/api/v1/wangdianjswdgx-updateWxJswdgx', $params);
    }

    //删除网点的安装维修结算对应关系
    public function wangdianjswdgx_deleteJswdgx($params)
    {
        return $this->request('/api/v1/wangdianjswdgx-deleteJswdgx', $params);
    }

    //新增售后网点
    public function wangdian_newShwd($params)
    {
        return $this->request('/api/v1/wangdian-newShwd', $params);
    }

    //修改售后网点
    public function wangdian_updateShwd($params)
    {
        return $this->request('/api/v1/wangdian-updateShwd', $params);
    }

    //新增销售网点
    public function wangdian_newXswd($params)
    {
        return $this->request('/api/v1/wangdian-newXswd', $params);
    }

    //修改销售网点
    public function wangdian_updateXswd($params)
    {
        return $this->request('/api/v1/wangdian-updateXswd', $params);
    }

    //查询总部签约的网点的资质信息
    public function wangdianZz_selectWangdianZz($params)
    {
        return $this->request('/api/v1/wangdianZz-selectWangdianZz', $params);
    }

    //新增销售售后对应关系
    public function wangdianhgx_add($params)
    {
        return $this->request('/api/v1/wangdianqhgx-add', $params);
    }


    /* ---------------------------------------------网点------------------------------------------ */
}