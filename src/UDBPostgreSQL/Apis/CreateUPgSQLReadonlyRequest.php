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
use UCloud\UDBPostgreSQL\Params\CreateUPgSQLReadonlyParamLabels;
use UCloud\UDBPostgreSQL\Params\CreateUPgSQLReadonlyParamSecGroupId;

class CreateUPgSQLReadonlyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUPgSQLReadonly"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("Port");
        $this->markRequired("DiskSpace");
        $this->markRequired("MachineType");
        $this->markRequired("SrcInstanceID");
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
     * Name: Db名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: Db名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Port: DB端口
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: DB端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * DiskSpace: 磁盘空间
     *
     * @return integer|null
     */
    public function getDiskSpace()
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间
     *
     * @param int $diskSpace
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
     * SrcInstanceID: 同步的源库
     *
     * @return string|null
     */
    public function getSrcInstanceID()
    {
        return $this->get("SrcInstanceID");
    }

    /**
     * SrcInstanceID: 同步的源库
     *
     * @param string $srcInstanceID
     */
    public function setSrcInstanceID($srcInstanceID)
    {
        $this->set("SrcInstanceID", $srcInstanceID);
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
     * VPCID: VPCID
     *
     * @return string|null
     */
    public function getVPCID()
    {
        return $this->get("VPCID");
    }

    /**
     * VPCID: VPCID
     *
     * @param string $vpcid
     */
    public function setVPCID($vpcid)
    {
        $this->set("VPCID", $vpcid);
    }

    /**
     * Labels:
     *
     * @return CreateUPgSQLReadonlyParamLabels[]|null
     */
    public function getLabels()
    {
        $items = $this->get("Labels");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUPgSQLReadonlyParamLabels($item));
        }
        return $result;
    }

    /**
     * Labels:
     *
     * @param CreateUPgSQLReadonlyParamLabels[] $labels
     */
    public function setLabels(array $labels)
    {
        $result = [];
        foreach ($labels as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SecGroupId:
     *
     * @return CreateUPgSQLReadonlyParamSecGroupId[]|null
     */
    public function getSecGroupId()
    {
        $items = $this->get("SecGroupId");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUPgSQLReadonlyParamSecGroupId($item));
        }
        return $result;
    }

    /**
     * SecGroupId:
     *
     * @param CreateUPgSQLReadonlyParamSecGroupId[] $secGroupId
     */
    public function setSecGroupId(array $secGroupId)
    {
        $result = [];
        foreach ($secGroupId as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
