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

namespace UCloud\UFS\Models;

use UCloud\Core\Response\Response;

use UCloud\UFS\Models\DescribeUFSVolumeMountpointResponse;

class MountPointInfo extends Response
{

    /**
     * MountPointName: 挂载点名称
     *
     * @return string|null
     */
    public function getMountPointName()
    {
        return $this->get("MountPointName");
    }

    /**
     * MountPointName: 挂载点名称
     *
     * @param string $mountPointName
     */
    public function setMountPointName(string $mountPointName)
    {
        $this->set("MountPointName", $mountPointName);
    }
    /**
     * VpcId: Vpc ID
     *
     * @return string|null
     */
    public function getVpcId()
    {
        return $this->get("VpcId");
    }

    /**
     * VpcId: Vpc ID
     *
     * @param string $vpcId
     */
    public function setVpcId(string $vpcId)
    {
        $this->set("VpcId", $vpcId);
    }
    /**
     * SubnetId: Subnet ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: Subnet ID
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }
    /**
     * MountPointIp: ${挂载点IP}:/
     *
     * @return string|null
     */
    public function getMountPointIp()
    {
        return $this->get("MountPointIp");
    }

    /**
     * MountPointIp: ${挂载点IP}:/
     *
     * @param string $mountPointIp
     */
    public function setMountPointIp(string $mountPointIp)
    {
        $this->set("MountPointIp", $mountPointIp);
    }
    /**
     * CreateTime: 文件系统创建时间（unix时间戳）
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 文件系统创建时间（unix时间戳）
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * SubnetDescription: Subnet ID + 网段的形式，方便前端展示
     *
     * @return string|null
     */
    public function getSubnetDescription()
    {
        return $this->get("SubnetDescription");
    }

    /**
     * SubnetDescription: Subnet ID + 网段的形式，方便前端展示
     *
     * @param string $subnetDescription
     */
    public function setSubnetDescription(string $subnetDescription)
    {
        $this->set("SubnetDescription", $subnetDescription);
    }
}
