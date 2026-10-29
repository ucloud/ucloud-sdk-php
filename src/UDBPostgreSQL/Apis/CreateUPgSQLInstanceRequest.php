<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UDBPostgreSQL\Apis;

use UCloud\Core\Request\Request;

class CreateUPgSQLInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUPgSQLInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("DBVersion");
        $this->markRequired("ParamGroupID");
        $this->markRequired("AdminPassword");
        $this->markRequired("Port");
        $this->markRequired("DiskSpace");
        $this->markRequired("MachineType");
        $this->markRequired("SubnetID");
        $this->markRequired("VPCID");
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
     * Name: 实例名称，至少6位
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称，至少6位
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBVersion: PostgreSQL的版本，pg10.4:postgresql-10.4，pg13.4:postgresql-13.4
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: PostgreSQL的版本，pg10.4:postgresql-10.4，pg13.4:postgresql-13.4
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * ParamGroupID: DB实例使用的配置参数组id
     *
     * @return integer|null
     */
    public function getParamGroupID()
    {
        return $this->get("ParamGroupID");
    }

    /**
     * ParamGroupID: DB实例使用的配置参数组id
     *
     * @param int $paramGroupID
     */
    public function setParamGroupID($paramGroupID)
    {
        $this->set("ParamGroupID", $paramGroupID);
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @return string|null
     */
    public function getAdminPassword()
    {
        return $this->get("AdminPassword");
    }

    /**
     * AdminPassword: 管理员密码
     *
     * @param string $adminPassword
     */
    public function setAdminPassword($adminPassword)
    {
        $this->set("AdminPassword", $adminPassword);
    }

    /**
     * Port: 端口默认为5432
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口默认为5432
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * DiskSpace: 磁盘空间(GB)
     *
     * @return string|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB)
     *
     * @param string $diskSpace
     */
    public function setDiskSpace($diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * MachineType: 机器配置类型，2核4G的机器:o.pgsql2m.medium
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机器配置类型，2核4G的机器:o.pgsql2m.medium
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * SubnetID: 子网ID
     *
     * @return string|null
     */
    public function getSubnetID()
    {
        return $this->get("SubnetID");
    }

    /**
     * SubnetID: 子网ID
     *
     * @param string $subnetID
     */
    public function setSubnetID($subnetID)
    {
        $this->set("SubnetID", $subnetID);
    }

    /**
     * VPCID: VPC的ID
     *
     * @return string|null
     */
    public function getVPCID()
    {
        return $this->get("VPCID");
    }

    /**
     * VPCID: VPC的ID
     *
     * @param string $vpcid
     */
    public function setVPCID($vpcid)
    {
        $this->set("VPCID", $vpcid);
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }
}
