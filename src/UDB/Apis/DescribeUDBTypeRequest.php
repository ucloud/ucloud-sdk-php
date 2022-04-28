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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBTypeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBType"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
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
     * BackupZone: 跨可用区高可用DB的备库所在区域，仅当该可用区支持跨可用区高可用时填入。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getBackupZone()
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 跨可用区高可用DB的备库所在区域，仅当该可用区支持跨可用区高可用时填入。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $backupZone
     */
    public function setBackupZone($backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }

    /**
     * DBClusterType: DB实例类型，如mysql，sqlserver，mongo，postgresql
     *
     * @return string|null
     */
    public function getDBClusterType()
    {
        return $this->get("DBClusterType");
    }

    /**
     * DBClusterType: DB实例类型，如mysql，sqlserver，mongo，postgresql
     *
     * @param string $dbClusterType
     */
    public function setDBClusterType($dbClusterType)
    {
        $this->set("DBClusterType", $dbClusterType);
    }

    /**
     * InstanceMode: 返回支持某种实例类型的DB类型。如果没传，则表示任何实例类型均可。normal:单点,ha:高可用,sharded_cluster:分片集群
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: 返回支持某种实例类型的DB类型。如果没传，则表示任何实例类型均可。normal:单点,ha:高可用,sharded_cluster:分片集群
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * DiskType: 返回支持某种磁盘类型的DB类型，如Normal、SSD、NVMe_SSD。如果没传，则表示任何磁盘类型均可。
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 返回支持某种磁盘类型的DB类型，如Normal、SSD、NVMe_SSD。如果没传，则表示任何磁盘类型均可。
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * CompatibleWithDBType: 返回从备份创建实例时，该版本号所支持的备份创建版本。如果没传，则表示不是从备份创建。
     *
     * @return string|null
     */
    public function getCompatibleWithDBType()
    {
        return $this->get("CompatibleWithDBType");
    }

    /**
     * CompatibleWithDBType: 返回从备份创建实例时，该版本号所支持的备份创建版本。如果没传，则表示不是从备份创建。
     *
     * @param string $compatibleWithDBType
     */
    public function setCompatibleWithDBType($compatibleWithDBType)
    {
        $this->set("CompatibleWithDBType", $compatibleWithDBType);
    }
}
