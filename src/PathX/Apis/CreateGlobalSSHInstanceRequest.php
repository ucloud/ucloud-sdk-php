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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreateGlobalSSHInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateGlobalSSHInstance"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Area");
        $this->markRequired("TargetIP");
        $this->markRequired("Port");
        $this->markRequired("AreaCode");
    }

    

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Area: 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”，“首尔”。Area和AreaCode两者必填一个
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->get("Area");
    }

    /**
     * Area: 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”，“首尔”。Area和AreaCode两者必填一个
     *
     * @param string $area
     */
    public function setArea($area)
    {
        $this->set("Area", $area);
    }

    /**
     * TargetIP: 被SSH访问的源站IP，仅支持IPv4地址。
     *
     * @return string|null
     */
    public function getTargetIP()
    {
        return $this->get("TargetIP");
    }

    /**
     * TargetIP: 被SSH访问的源站IP，仅支持IPv4地址。
     *
     * @param string $targetIP
     */
    public function setTargetIP($targetIP)
    {
        $this->set("TargetIP", $targetIP);
    }

    /**
     * Port: 源站服务器监听的SSH端口，可取范围[1-65535]，不能使用80，443,  65123端口。如果InstanceType=Free，取值范围缩小为[22,3389],linux系统选择22，windows系统自动选3389。
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 源站服务器监听的SSH端口，可取范围[1-65535]，不能使用80，443,  65123端口。如果InstanceType=Free，取值范围缩小为[22,3389],linux系统选择22，windows系统自动选3389。
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * AreaCode: AreaCode, 区域航空港国际通用代码。Area和AreaCode两者必填一个
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: AreaCode, 区域航空港国际通用代码。Area和AreaCode两者必填一个
     *
     * @param string $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * Remark: 备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ChargeType: 支付方式，如按月：Month、 按年：Year、按时：Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付方式，如按月：Month、 按年：Year、按时：Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买数量按月购买至月底请传0
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买数量按月购买至月底请传0
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * InstanceType: 枚举值：["Ultimate","Enterprise","Basic","Primary"], 分别代表旗舰版，企业版，基础版，入门版
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 枚举值：["Ultimate","Enterprise","Basic","Primary"], 分别代表旗舰版，企业版，基础版，入门版
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * BandwidthPackage: Ultimate版本带宽包大小,枚举值：[0,20,40]。单位MB
     *
     * @return int|null
     */
    public function getBandwidthPackage()
    {
        return $this->get("BandwidthPackage");
    }

    /**
     * BandwidthPackage: Ultimate版本带宽包大小,枚举值：[0,20,40]。单位MB
     *
     * @param int $bandwidthPackage
     */
    public function setBandwidthPackage($bandwidthPackage)
    {
        $this->set("BandwidthPackage", $bandwidthPackage);
    }

    /**
     * ForwardRegion: InstanceType等于Basic时可以在["cn-bj2","cn-sh2","cn-gd"]中选择1个作为转发机房，其他付费版默认配置三个转发机房
     *
     * @return string|null
     */
    public function getForwardRegion()
    {
        return $this->get("ForwardRegion");
    }

    /**
     * ForwardRegion: InstanceType等于Basic时可以在["cn-bj2","cn-sh2","cn-gd"]中选择1个作为转发机房，其他付费版默认配置三个转发机房
     *
     * @param string $forwardRegion
     */
    public function setForwardRegion($forwardRegion)
    {
        $this->set("ForwardRegion", $forwardRegion);
    }

    /**
     * CouponId: 使用代金券可冲抵部分费用
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用代金券可冲抵部分费用
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }


}
