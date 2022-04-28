<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\UBill\Apis;

use UCloud\Core\Request\Request;

class ListUBillDetailRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUBillDetail"]);
        $this->markRequired("BillingCycle");
    }

    

    /**
     * BillingCycle: 账期，YYYY-MM，比如2021-08，只支持2018-05之后的查询
     *
     * @return string|null
     */
    public function getBillingCycle()
    {
        return $this->get("BillingCycle");
    }

    /**
     * BillingCycle: 账期，YYYY-MM，比如2021-08，只支持2018-05之后的查询
     *
     * @param string $billingCycle
     */
    public function setBillingCycle($billingCycle)
    {
        $this->set("BillingCycle", $billingCycle);
    }

    /**
     * ProjectName: 项目名称 (筛选项, 默认全部)
     *
     * @return string|null
     */
    public function getProjectName()
    {
        return $this->get("ProjectName");
    }

    /**
     * ProjectName: 项目名称 (筛选项, 默认全部)
     *
     * @param string $projectName
     */
    public function setProjectName($projectName)
    {
        $this->set("ProjectName", $projectName);
    }

    /**
     * ResourceIds: 资源ID(筛选项, 默认全部) 支持多筛选，多筛选请在请求参数中添加多个字段例ResourceIds.0: uhost-bzgf1gh5，ResourceIds.1: uhost-gu1xpspa，
     *
     * @return string[]|null
     */
    public function getResourceIds()
    {
        return $this->get("ResourceIds");
    }

    /**
     * ResourceIds: 资源ID(筛选项, 默认全部) 支持多筛选，多筛选请在请求参数中添加多个字段例ResourceIds.0: uhost-bzgf1gh5，ResourceIds.1: uhost-gu1xpspa，
     *
     * @param string[] $resourceIds
     */
    public function setResourceIds(array $resourceIds)
    {
        $this->set("ResourceIds", $resourceIds);
    }

    /**
     * OrderType: 订单类型 (筛选项, 默认全部) 。枚举值：\\ > OT_BUY:新购 \\ > OT_RENEW:续费 \\ > OT_UPGRADE:升级 \\ > OT_REFUND:退费 \\ > OT_DOWNGRADE:降级 \\ > OT_SUSPEND:结算 \\ > OT_PAYMENT:删除资源回款 \\ > OT_POSTPAID_PAYMENT:后付费回款 \\ > OT_RECOVER:删除恢复 \\ > OT_POSTPAID_RENEW:过期续费回款
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->get("OrderType");
    }

    /**
     * OrderType: 订单类型 (筛选项, 默认全部) 。枚举值：\\ > OT_BUY:新购 \\ > OT_RENEW:续费 \\ > OT_UPGRADE:升级 \\ > OT_REFUND:退费 \\ > OT_DOWNGRADE:降级 \\ > OT_SUSPEND:结算 \\ > OT_PAYMENT:删除资源回款 \\ > OT_POSTPAID_PAYMENT:后付费回款 \\ > OT_RECOVER:删除恢复 \\ > OT_POSTPAID_RENEW:过期续费回款
     *
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->set("OrderType", $orderType);
    }

    /**
     * ChargeType: 计费方式 (筛选项, 默认全部)。枚举值：\\ > Dynamic:按时 \\ > Month:按月 \\ > Year:按年 \\ > Once:一次性按量 \\ > Used:按量 \\ > Post:后付费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费方式 (筛选项, 默认全部)。枚举值：\\ > Dynamic:按时 \\ > Month:按月 \\ > Year:按年 \\ > Once:一次性按量 \\ > Used:按量 \\ > Post:后付费
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ShowZero: 是否显示0元订单 (0 不显示, 1 显示, 默认0)
     *
     * @return integer|null
     */
    public function getShowZero()
    {
        return $this->get("ShowZero");
    }

    /**
     * ShowZero: 是否显示0元订单 (0 不显示, 1 显示, 默认0)
     *
     * @param int $showZero
     */
    public function setShowZero($showZero)
    {
        $this->set("ShowZero", $showZero);
    }

    /**
     * PaidState: 支付状态 (筛选项, 1:仅显示未支付订单; 2:仅显示已支付订单; 0:两者都显示)
     *
     * @return integer|null
     */
    public function getPaidState()
    {
        return $this->get("PaidState");
    }

    /**
     * PaidState: 支付状态 (筛选项, 1:仅显示未支付订单; 2:仅显示已支付订单; 0:两者都显示)
     *
     * @param int $paidState
     */
    public function setPaidState($paidState)
    {
        $this->set("PaidState", $paidState);
    }

    /**
     * UserEmail: 用户邮箱，可以根据用户邮箱来进行筛选
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->get("UserEmail");
    }

    /**
     * UserEmail: 用户邮箱，可以根据用户邮箱来进行筛选
     *
     * @param string $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->set("UserEmail", $userEmail);
    }

    /**
     * Limit: 每页数量，默认值25，最大值：100。
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 每页数量，默认值25，最大值：100。
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Offset: 数据偏移量 (默认0)
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量 (默认0)
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * ResourceTypes: 产品类型 (筛选项, 默认全部),支持多筛选，多筛选请在请求参数中添加多个字段。枚举值：\\ > uhost:云主机 \\ > udisk:普通云硬盘 \\ > udb:云数据库 \\ > eip:弹性IP \\ > ufile:对象存储 \\ > fortress_host:堡垒机 \\ > ufs:文件存储 \\ > waf:WEB应用防火墙 \\ > ues:弹性搜索 \\ > udisk_ssd:SSD云硬盘 \\ > rssd:RSSD云硬盘
     *
     * @return string[]|null
     */
    public function getResourceTypes()
    {
        return $this->get("ResourceTypes");
    }

    /**
     * ResourceTypes: 产品类型 (筛选项, 默认全部),支持多筛选，多筛选请在请求参数中添加多个字段。枚举值：\\ > uhost:云主机 \\ > udisk:普通云硬盘 \\ > udb:云数据库 \\ > eip:弹性IP \\ > ufile:对象存储 \\ > fortress_host:堡垒机 \\ > ufs:文件存储 \\ > waf:WEB应用防火墙 \\ > ues:弹性搜索 \\ > udisk_ssd:SSD云硬盘 \\ > rssd:RSSD云硬盘
     *
     * @param string[] $resourceTypes
     */
    public function setResourceTypes(array $resourceTypes)
    {
        $this->set("ResourceTypes", $resourceTypes);
    }
}
