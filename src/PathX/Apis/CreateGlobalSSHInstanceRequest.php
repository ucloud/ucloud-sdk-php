<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Area: 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”。Area和AreaCode两者必填一个
     *
     * @return string|null
     */
    public function getArea(): string
    {
        return $this->get("Area");
    }

    /**
     * Area: 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”。Area和AreaCode两者必填一个
     *
     * @param string $area
     */
    public function setArea(string $area)
    {
        $this->set("Area", $area);
    }

    /**
     * TargetIP: 被SSH访问的源站IP，仅支持IPv4地址。
     *
     * @return string|null
     */
    public function getTargetIP(): string
    {
        return $this->get("TargetIP");
    }

    /**
     * TargetIP: 被SSH访问的源站IP，仅支持IPv4地址。
     *
     * @param string $targetIP
     */
    public function setTargetIP(string $targetIP)
    {
        $this->set("TargetIP", $targetIP);
    }

    /**
     * Port: 源站服务器监听的SSH端口，可取范围[1-65535]，不能使用80，443,  65123端口。如果InstanceType=Free，取值范围缩小为[22,3389],linux系统选择22，windows系统自动选3389。
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 源站服务器监听的SSH端口，可取范围[1-65535]，不能使用80，443,  65123端口。如果InstanceType=Free，取值范围缩小为[22,3389],linux系统选择22，windows系统自动选3389。
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * AreaCode: AreaCode, 区域航空港国际通用代码。Area和AreaCode两者必填一个
     *
     * @return string|null
     */
    public function getAreaCode(): string
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: AreaCode, 区域航空港国际通用代码。Area和AreaCode两者必填一个
     *
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * Remark: 备注信息
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注信息
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ChargeType: 支付方式，如按月、按年、按时
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付方式，如按月、按年、按时
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买数量
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买数量
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * InstanceType: 枚举值：["Enterprise","Basic","Free"], 分别代表企业版，基础版，免费版
     *
     * @return string|null
     */
    public function getInstanceType(): string
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 枚举值：["Enterprise","Basic","Free"], 分别代表企业版，基础版，免费版
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * BandwidthPackage: Ultimate版本带宽包大小,枚举值：[0,20,40]。单位MB
     *
     * @return integer|null
     */
    public function getBandwidthPackage(): int
    {
        return $this->get("BandwidthPackage");
    }

    /**
     * BandwidthPackage: Ultimate版本带宽包大小,枚举值：[0,20,40]。单位MB
     *
     * @param int $bandwidthPackage
     */
    public function setBandwidthPackage(int $bandwidthPackage)
    {
        $this->set("BandwidthPackage", $bandwidthPackage);
    }

    /**
     * ForwardRegion: InstanceType等于Basic时可以在["cn-bj2","cn-sh2","cn-gd"]中选择1个作为转发机房，Free版本固定为cn-bj2,其他付费版默认配置三个转发机房
     *
     * @return string|null
     */
    public function getForwardRegion(): string
    {
        return $this->get("ForwardRegion");
    }

    /**
     * ForwardRegion: InstanceType等于Basic时可以在["cn-bj2","cn-sh2","cn-gd"]中选择1个作为转发机房，Free版本固定为cn-bj2,其他付费版默认配置三个转发机房
     *
     * @param string $forwardRegion
     */
    public function setForwardRegion(string $forwardRegion)
    {
        $this->set("ForwardRegion", $forwardRegion);
    }

    /**
     * CouponId: 使用代金券可冲抵部分费用
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用代金券可冲抵部分费用
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
