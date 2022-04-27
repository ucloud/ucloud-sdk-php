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

namespace UCloud\UPHost\Apis;

use UCloud\Core\Request\Request;

use UCloud\UPHost\Models\CreatePHostRequestDisks;

class CreatePHostRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreatePHost"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ImageId");
        $this->markRequired("Password");
    }


    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * ImageId: ImageId，可以通过接口 [DescribePHostImage](api/uphost-api/describe_phost_image.html)获取
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: ImageId，可以通过接口 [DescribePHostImage](api/uphost-api/describe_phost_image.html)获取
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }
    /**
     * Password: 密码（密码需使用base64进行编码）
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 密码（密码需使用base64进行编码）
     *
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->set("Password", $password);
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
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }
    /**
     * Name: 物理机名称，默认为phost
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 物理机名称，默认为phost
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * Remark: 物理机备注，默认为空
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 物理机备注，默认为空
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
    /**
     * Tag: 业务组，默认为default
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组，默认为default
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
    /**
     * ChargeType: 计费模式，枚举值为：year, 按年付费； month,按月付费；默认为按月付费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，枚举值为：year, 按年付费； month,按月付费；默认为按月付费
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * Quantity: 购买时长，1-10个月或1-10年；默认值为1。月付时，此参数传0，代表购买至月末，1代表整月。
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长，1-10个月或1-10年；默认值为1。月付时，此参数传0，代表购买至月末，1代表整月。
     *
     * @param string $quantity
     */
    public function setQuantity(string $quantity)
    {
        $this->set("Quantity", $quantity);
    }
    /**
     * SecurityGroupId: 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *
     * @return string|null
     */
    public function getSecurityGroupId()
    {
        return $this->get("SecurityGroupId");
    }

    /**
     * SecurityGroupId: 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *
     * @param string $securityGroupId
     */
    public function setSecurityGroupId(string $securityGroupId)
    {
        $this->set("SecurityGroupId", $securityGroupId);
    }
    /**
     * Raid: Raid配置，默认Raid10  支持:Raid0、Raid1、Raid5、Raid10，NoRaid
     *
     * @return string|null
     */
    public function getRaid()
    {
        return $this->get("Raid");
    }

    /**
     * Raid: Raid配置，默认Raid10  支持:Raid0、Raid1、Raid5、Raid10，NoRaid
     *
     * @param string $raid
     */
    public function setRaid(string $raid)
    {
        $this->set("Raid", $raid);
    }
    /**
     * VPCId: VPC ID，不填为默认，VPC2.0下需要填写此字段。
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC ID，不填为默认，VPC2.0下需要填写此字段。
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
    /**
     * SubnetId: 子网ID，不填为默认，VPC2.0下需要填写此字段。
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID，不填为默认，VPC2.0下需要填写此字段。
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }
    /**
     * Cluster: 网络环境，可选千兆：1G ，万兆：10G， 默认1G。智能网卡可以选择25G。
     *
     * @return string|null
     */
    public function getCluster()
    {
        return $this->get("Cluster");
    }

    /**
     * Cluster: 网络环境，可选千兆：1G ，万兆：10G， 默认1G。智能网卡可以选择25G。
     *
     * @param string $cluster
     */
    public function setCluster(string $cluster)
    {
        $this->set("Cluster", $cluster);
    }
    /**
     * Disks:
     *
     * @return CreatePHostRequestDisksModel[]|null
     */
    public function getDisks()
    {
        $items = $this->get("Disks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreatePHostRequestDisksModel($item));
        }
        return $result;
    }

    /**
     * Disks:
     *
     * @param CreatePHostRequestDisksModel[] $disks
     */
    public function setDisks(array $disks)
    {
        $result = [];
        foreach ($disks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * VpcIp: 指定内网ip创建
     *
     * @return string|null
     */
    public function getVpcIp()
    {
        return $this->get("VpcIp");
    }

    /**
     * VpcIp: 指定内网ip创建
     *
     * @param string $vpcIp
     */
    public function setVpcIp(string $vpcIp)
    {
        $this->set("VpcIp", $vpcIp);
    }
    /**
     * CouponId: 代金券
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
