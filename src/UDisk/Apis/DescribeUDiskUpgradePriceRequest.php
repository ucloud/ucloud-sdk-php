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

class DescribeUDiskUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDiskUpgradePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Size");
        $this->markRequired("SourceId");
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
     * Size: 购买UDisk大小,单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；普通系统盘：范围[1~8000]；SSD系统盘：范围[1~4000]；RSSD数据盘：范围[1~32000]；RSSD系统盘：范围[1~4000]；高效数据盘：范围[1~32000]；高效系统盘：范围[1~500]。
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 购买UDisk大小,单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；普通系统盘：范围[1~8000]；SSD系统盘：范围[1~4000]；RSSD数据盘：范围[1~32000]；RSSD系统盘：范围[1~4000]；高效数据盘：范围[1~32000]；高效系统盘：范围[1~500]。
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }
    /**
     * SourceId: 升级目标UDisk ID
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->get("SourceId");
    }

    /**
     * SourceId: 升级目标UDisk ID
     *
     * @param string $sourceId
     */
    public function setSourceId(string $sourceId)
    {
        $this->set("SourceId", $sourceId);
    }
    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @return string|null
     */
    public function getUDataArkMode()
    {
        return $this->get("UDataArkMode");
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @param string $uDataArkMode
     */
    public function setUDataArkMode(string $uDataArkMode)
    {
        $this->set("UDataArkMode", $uDataArkMode);
    }
    /**
     * SnapshotService: 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No。仅支持查询开启快照服务的价格。
     *
     * @return string|null
     */
    public function getSnapshotService()
    {
        return $this->get("SnapshotService");
    }

    /**
     * SnapshotService: 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No。仅支持查询开启快照服务的价格。
     *
     * @param string $snapshotService
     */
    public function setSnapshotService(string $snapshotService)
    {
        $this->set("SnapshotService", $snapshotService);
    }
    /**
     * DiskType: 【已废弃】UDisk 类型: DataDisk（普通数据盘），SSDDataDisk（SSD数据盘），RSSDDataDisk(RSSD数据盘)，EfficiencyDataDisk（高效数据盘），SystemDisk（普通系统盘），SSDSystemDisk（SSD系统盘），RSSDSystemDisk(RSSD系统盘)，EfficiencySystemDisk（高效系统盘），默认值（DataDisk）
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 【已废弃】UDisk 类型: DataDisk（普通数据盘），SSDDataDisk（SSD数据盘），RSSDDataDisk(RSSD数据盘)，EfficiencyDataDisk（高效数据盘），SystemDisk（普通系统盘），SSDSystemDisk（SSD系统盘），RSSDSystemDisk(RSSD系统盘)，EfficiencySystemDisk（高效系统盘），默认值（DataDisk）
     *
     * @param string $diskType
     */
    public function setDiskType(string $diskType)
    {
        $this->set("DiskType", $diskType);
    }
    /**
     * MachineType: 【已废弃】云主机机型（V2.0），枚举值["N", "C", "G", "O", "OM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 【已废弃】云主机机型（V2.0），枚举值["N", "C", "G", "O", "OM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }
}
