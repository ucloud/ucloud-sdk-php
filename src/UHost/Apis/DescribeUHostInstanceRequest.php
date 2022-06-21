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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class DescribeUHostInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUHostInstance"]);
        $this->markRequired("Region");
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
    public function setRegion($region)
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
    public function setZone($zone)
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
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UHostIds: 【数组】UHost主机的资源ID，例如UHostIds.0代表希望获取信息 的主机1，UHostIds.1代表主机2。 如果不传入，则返回当前Region 所有符合条件的UHost实例。
     *
     * @return string[]|null
     */
    public function getUHostIds()
    {
        return $this->get("UHostIds");
    }

    /**
     * UHostIds: 【数组】UHost主机的资源ID，例如UHostIds.0代表希望获取信息 的主机1，UHostIds.1代表主机2。 如果不传入，则返回当前Region 所有符合条件的UHost实例。
     *
     * @param string[] $uHostIds
     */
    public function setUHostIds(array $uHostIds)
    {
        $this->set("UHostIds", $uHostIds);
    }

    /**
     * Tag: 要查询的业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 要查询的业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * IsolationGroup: 硬件隔离组id。通过硬件隔离组筛选主机。
     *
     * @return string|null
     */
    public function getIsolationGroup()
    {
        return $this->get("IsolationGroup");
    }

    /**
     * IsolationGroup: 硬件隔离组id。通过硬件隔离组筛选主机。
     *
     * @param string $isolationGroup
     */
    public function setIsolationGroup($isolationGroup)
    {
        $this->set("IsolationGroup", $isolationGroup);
    }

    /**
     * VPCId: vpc id。通过VPC筛选主机。北京一地域无效。
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: vpc id。通过VPC筛选主机。北京一地域无效。
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网id。通过子网筛选主机。北京一地域无效。
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网id。通过子网筛选主机。北京一地域无效。
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * UDiskIdForAttachment: 要挂载的云盘id，过滤返回能被UDiskId挂载的云主机。目前主要针对rssd云盘使用
     *
     * @return string|null
     */
    public function getUDiskIdForAttachment()
    {
        return $this->get("UDiskIdForAttachment");
    }

    /**
     * UDiskIdForAttachment: 要挂载的云盘id，过滤返回能被UDiskId挂载的云主机。目前主要针对rssd云盘使用
     *
     * @param string $uDiskIdForAttachment
     */
    public function setUDiskIdForAttachment($uDiskIdForAttachment)
    {
        $this->set("UDiskIdForAttachment", $uDiskIdForAttachment);
    }


}
