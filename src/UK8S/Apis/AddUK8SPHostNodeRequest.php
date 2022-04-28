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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;

class AddUK8SPHostNodeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUK8SPHostNode"]);
        $this->markRequired("Zone");
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("Count");
        $this->markRequired("Password");
        $this->markRequired("ChargeType");
    }

    

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ClusterId: UK8S集群ID。 可从UK8S控制台获取。
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: UK8S集群ID。 可从UK8S控制台获取。
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * Count: 最大创建Node节点数量，取值范围是[1,10]。
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 最大创建Node节点数量，取值范围是[1,10]。
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * Password: Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ 默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ 默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长。默认: 1。月付时，此参数传0，代表了购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认: 1。月付时，此参数传0，代表了购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * Labels: Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * MaxPods: 默认110，生产环境建议小于等于110。
     *
     * @return integer|null
     */
    public function getMaxPods()
    {
        return $this->get("MaxPods");
    }

    /**
     * MaxPods: 默认110，生产环境建议小于等于110。
     *
     * @param int $maxPods
     */
    public function setMaxPods($maxPods)
    {
        $this->set("MaxPods", $maxPods);
    }

    /**
     * Type: 物理机类型，默认为：db-2(基础型-SAS-V3)
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 物理机类型，默认为：db-2(基础型-SAS-V3)
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Raid: Raid配置，默认Raid10 支持:Raid0、Raid1、Raid5、Raid10，NoRaid
     *
     * @return string|null
     */
    public function getRaid()
    {
        return $this->get("Raid");
    }

    /**
     * Raid: Raid配置，默认Raid10 支持:Raid0、Raid1、Raid5、Raid10，NoRaid
     *
     * @param string $raid
     */
    public function setRaid($raid)
    {
        $this->set("Raid", $raid);
    }

    /**
     * NIC: 网络环境，可选千兆：1G ，万兆：10G， 默认1G。
     *
     * @return string|null
     */
    public function getNIC()
    {
        return $this->get("NIC");
    }

    /**
     * NIC: 网络环境，可选千兆：1G ，万兆：10G， 默认1G。
     *
     * @param string $nic
     */
    public function setNIC($nic)
    {
        $this->set("NIC", $nic);
    }

    /**
     * SubnetId: 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * ImageId: 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * DisableSchedule: 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *
     * @return boolean|null
     */
    public function getDisableSchedule()
    {
        return $this->get("DisableSchedule");
    }

    /**
     * DisableSchedule: 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *
     * @param boolean $disableSchedule
     */
    public function setDisableSchedule($disableSchedule)
    {
        $this->set("DisableSchedule", $disableSchedule);
    }

    /**
     * InitScript: 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行。
     *
     * @return string|null
     */
    public function getInitScript()
    {
        return $this->get("InitScript");
    }

    /**
     * InitScript: 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行。
     *
     * @param string $initScript
     */
    public function setInitScript($initScript)
    {
        $this->set("InitScript", $initScript);
    }
}
