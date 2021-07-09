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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class ResizeAttachedDiskRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ResizeAttachedDisk"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("UHostId");
        $this->markRequired("DiskSpace");
        $this->markRequired("DiskId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
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
    public function getZone(): string
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
    public function getProjectId(): string
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
     * UHostId: UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *
     * @return string|null
     */
    public function getUHostId(): string
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * DiskSpace: 磁盘大小，单位GB，步长为10。取值范围需大于当前磁盘大小，最大值请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @return integer|null
     */
    public function getDiskSpace(): int
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘大小，单位GB，步长为10。取值范围需大于当前磁盘大小，最大值请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * DiskId: 磁盘ID。参见 [DescribeUHostInstance](describe_uhost_instance.html)返回值中的DiskSet。
     *
     * @return string|null
     */
    public function getDiskId(): string
    {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 磁盘ID。参见 [DescribeUHostInstance](describe_uhost_instance.html)返回值中的DiskSet。
     *
     * @param string $diskId
     */
    public function setDiskId(string $diskId)
    {
        $this->set("DiskId", $diskId);
    }

    /**
     * DryRun: 用于测试磁盘是否支持在线扩容。DryRun=true,不会执行实际操作，只会返回操作的预期结果。DryRun = false ，正常执行扩容操作。
     *
     * @return boolean|null
     */
    public function getDryRun(): bool
    {
        return $this->get("DryRun");
    }

    /**
     * DryRun: 用于测试磁盘是否支持在线扩容。DryRun=true,不会执行实际操作，只会返回操作的预期结果。DryRun = false ，正常执行扩容操作。
     *
     * @param boolean $dryRun
     */
    public function setDryRun(bool $dryRun)
    {
        $this->set("DryRun", $dryRun);
    }
}
