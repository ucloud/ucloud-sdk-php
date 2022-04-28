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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Request\Request;

class DescribeUDiskRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDisk"]);
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
     * UDiskId: UDisk Id(留空返回全部)
     *
     * @return string|null
     */
    public function getUDiskId()
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: UDisk Id(留空返回全部)
     *
     * @param string $uDiskId
     */
    public function setUDiskId($uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度, 默认为20
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度, 默认为20
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * DiskType: ProtocolVersion字段为1时，需结合IsBoot确定具体磁盘类型:普通数据盘：DiskType:"CLOUD_NORMAL",IsBoot:"False"；普通系统盘：DiskType:"CLOUD_NORMAL",IsBoot:"True"；SSD数据盘：DiskType:"CLOUD_SSD",IsBoot:"False"；SSD系统盘：DiskType:"CLOUD_SSD",IsBoot:"True"；RSSD数据盘：DiskType:"CLOUD_RSSD",IsBoot:"False"；RSSD系统盘：DiskType:"CLOUD_RSSD",IsBoot:"True"；高效数据盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"False"；高效系统盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"True"；为空拉取所有。ProtocolVersion字段为0或没有该字段时，可设为以下几个值:普通数据盘：DataDisk；普通系统盘：SystemDisk；SSD数据盘：SSDDataDisk；SSD系统盘：SSDSystemDisk；RSSD数据盘：RSSDDataDisk；RSSD系统盘：RSSDSystemDisk：高效数据盘：EfficiencyDataDisk；高效系统盘：EfficiencySystemDisk；为空拉取所有。
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: ProtocolVersion字段为1时，需结合IsBoot确定具体磁盘类型:普通数据盘：DiskType:"CLOUD_NORMAL",IsBoot:"False"；普通系统盘：DiskType:"CLOUD_NORMAL",IsBoot:"True"；SSD数据盘：DiskType:"CLOUD_SSD",IsBoot:"False"；SSD系统盘：DiskType:"CLOUD_SSD",IsBoot:"True"；RSSD数据盘：DiskType:"CLOUD_RSSD",IsBoot:"False"；RSSD系统盘：DiskType:"CLOUD_RSSD",IsBoot:"True"；高效数据盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"False"；高效系统盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"True"；为空拉取所有。ProtocolVersion字段为0或没有该字段时，可设为以下几个值:普通数据盘：DataDisk；普通系统盘：SystemDisk；SSD数据盘：SSDDataDisk；SSD系统盘：SSDSystemDisk；RSSD数据盘：RSSDDataDisk；RSSD系统盘：RSSDSystemDisk：高效数据盘：EfficiencyDataDisk；高效系统盘：EfficiencySystemDisk；为空拉取所有。
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * ProtocolVersion: 请求协议版本，建议升级为1，为1时DiskType与UHost磁盘类型定义一致；默认为0
     *
     * @return integer|null
     */
    public function getProtocolVersion()
    {
        return $this->get("ProtocolVersion");
    }

    /**
     * ProtocolVersion: 请求协议版本，建议升级为1，为1时DiskType与UHost磁盘类型定义一致；默认为0
     *
     * @param int $protocolVersion
     */
    public function setProtocolVersion($protocolVersion)
    {
        $this->set("ProtocolVersion", $protocolVersion);
    }

    /**
     * IsBoot: ProtocolVersion字段为1且DiskType不为空时，必须设置，设置规则请参照DiskType；ProtocolVersion字段为1且DiskType为空时，该字段无效。ProtocolVersion字段为0或没有该字段时，该字段无效。
     *
     * @return string|null
     */
    public function getIsBoot()
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: ProtocolVersion字段为1且DiskType不为空时，必须设置，设置规则请参照DiskType；ProtocolVersion字段为1且DiskType为空时，该字段无效。ProtocolVersion字段为0或没有该字段时，该字段无效。
     *
     * @param string $isBoot
     */
    public function setIsBoot($isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * IgnoreUBillInfo: 是否忽略计费信息。Yes：忽略，No：不忽略，默认值（No）。（如不关心账单信息，建议选填“Yes”，可降低请求延时）
     *
     * @return string|null
     */
    public function getIgnoreUBillInfo()
    {
        return $this->get("IgnoreUBillInfo");
    }

    /**
     * IgnoreUBillInfo: 是否忽略计费信息。Yes：忽略，No：不忽略，默认值（No）。（如不关心账单信息，建议选填“Yes”，可降低请求延时）
     *
     * @param string $ignoreUBillInfo
     */
    public function setIgnoreUBillInfo($ignoreUBillInfo)
    {
        $this->set("IgnoreUBillInfo", $ignoreUBillInfo);
    }

    /**
     * IgnoreBackupMode: 是否忽略快照服务信息。Yes：忽略，No：不忽略，默认值（No）。（如不关心快照服务信息，建议选填“Yes”，可降低请求延时）
     *
     * @return string|null
     */
    public function getIgnoreBackupMode()
    {
        return $this->get("IgnoreBackupMode");
    }

    /**
     * IgnoreBackupMode: 是否忽略快照服务信息。Yes：忽略，No：不忽略，默认值（No）。（如不关心快照服务信息，建议选填“Yes”，可降低请求延时）
     *
     * @param string $ignoreBackupMode
     */
    public function setIgnoreBackupMode($ignoreBackupMode)
    {
        $this->set("IgnoreBackupMode", $ignoreBackupMode);
    }

    /**
     * UDiskBasicInfo: 是否只返回云盘基础信息（只包含云盘及关联主机的资源信息）。Yes：是，No：否，默认值（No）。（如仅需要基础信息，建议选填“Yes”，可降低请求延时）
     *
     * @return string|null
     */
    public function getUDiskBasicInfo()
    {
        return $this->get("UDiskBasicInfo");
    }

    /**
     * UDiskBasicInfo: 是否只返回云盘基础信息（只包含云盘及关联主机的资源信息）。Yes：是，No：否，默认值（No）。（如仅需要基础信息，建议选填“Yes”，可降低请求延时）
     *
     * @param string $uDiskBasicInfo
     */
    public function setUDiskBasicInfo($uDiskBasicInfo)
    {
        $this->set("UDiskBasicInfo", $uDiskBasicInfo);
    }

    /**
     * UHostIdForAttachment: 根据传入的UHostIdForAttachment，筛选出能被挂载在该主机上的云盘【本字段即将废弃，建议使用HostIdForAttachment】
     *
     * @return string|null
     */
    public function getUHostIdForAttachment()
    {
        return $this->get("UHostIdForAttachment");
    }

    /**
     * UHostIdForAttachment: 根据传入的UHostIdForAttachment，筛选出能被挂载在该主机上的云盘【本字段即将废弃，建议使用HostIdForAttachment】
     *
     * @param string $uHostIdForAttachment
     */
    public function setUHostIdForAttachment($uHostIdForAttachment)
    {
        $this->set("UHostIdForAttachment", $uHostIdForAttachment);
    }

    /**
     * HostIdForAttachment: 根据传入的HostIdForAttachment，筛选出能被挂载在该主机上的云盘。目前主要针对RSSD云盘。
     *
     * @return string|null
     */
    public function getHostIdForAttachment()
    {
        return $this->get("HostIdForAttachment");
    }

    /**
     * HostIdForAttachment: 根据传入的HostIdForAttachment，筛选出能被挂载在该主机上的云盘。目前主要针对RSSD云盘。
     *
     * @param string $hostIdForAttachment
     */
    public function setHostIdForAttachment($hostIdForAttachment)
    {
        $this->set("HostIdForAttachment", $hostIdForAttachment);
    }

    /**
     * HostId: 根据传入的HostId，返回与该主机关联的云盘信息。
     *
     * @return string|null
     */
    public function getHostId()
    {
        return $this->get("HostId");
    }

    /**
     * HostId: 根据传入的HostId，返回与该主机关联的云盘信息。
     *
     * @param string $hostId
     */
    public function setHostId($hostId)
    {
        $this->set("HostId", $hostId);
    }

    /**
     * HostProduct: 宿主产品类型，可筛选挂载在该类型宿主上的云盘。可选值：uhost, uphost。为空拉取所有。（当HostIdForAttachment字段不为空时，该字段可以不填，若HostIdForAttachment与该字段宿主类型冲突，则以HostIdForAttachment字段为准。）
     *
     * @return string|null
     */
    public function getHostProduct()
    {
        return $this->get("HostProduct");
    }

    /**
     * HostProduct: 宿主产品类型，可筛选挂载在该类型宿主上的云盘。可选值：uhost, uphost。为空拉取所有。（当HostIdForAttachment字段不为空时，该字段可以不填，若HostIdForAttachment与该字段宿主类型冲突，则以HostIdForAttachment字段为准。）
     *
     * @param string $hostProduct
     */
    public function setHostProduct($hostProduct)
    {
        $this->set("HostProduct", $hostProduct);
    }
}
