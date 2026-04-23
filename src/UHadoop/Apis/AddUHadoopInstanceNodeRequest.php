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
namespace UCloud\UHadoop\Apis;

use UCloud\Core\Request\Request;

class AddUHadoopInstanceNodeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUHadoopInstanceNode"]);
        $this->markRequired("Region");
        $this->markRequired("NodeRole");
        $this->markRequired("NodeType");
        $this->markRequired("InstanceId");
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
     * NodeRole: 节点的角色，值为task|core|client之一
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 节点的角色，值为task|core|client之一
     *
     * @param string $nodeRole
     */
    public function setNodeRole($nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }

    /**
     * NodeType: 机型，如：o.hadoop2m.medium，可从GetUHadoopNodeType接口获取
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 机型，如：o.hadoop2m.medium，可从GetUHadoopNodeType接口获取
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType)
    {
        $this->set("NodeType", $nodeType);
    }

    /**
     * InstanceId: 集群ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 集群ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * DataDiskNum: 数据盘数量，非裸金属机型时必填
     *
     * @return string|null
     */
    public function getDataDiskNum()
    {
        return $this->get("DataDiskNum");
    }

    /**
     * DataDiskNum: 数据盘数量，非裸金属机型时必填
     *
     * @param string $dataDiskNum
     */
    public function setDataDiskNum($dataDiskNum)
    {
        $this->set("DataDiskNum", $dataDiskNum);
    }

    /**
     * Password: 密码,NodeRole为client时必填
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 密码,NodeRole为client时必填
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * BootDiskSize: 系统盘容量,非裸金属机型必填
     *
     * @return string|null
     */
    public function getBootDiskSize()
    {
        return $this->get("BootDiskSize");
    }

    /**
     * BootDiskSize: 系统盘容量,非裸金属机型必填
     *
     * @param string $bootDiskSize
     */
    public function setBootDiskSize($bootDiskSize)
    {
        $this->set("BootDiskSize", $bootDiskSize);
    }

    /**
     * BootDiskType: 系统盘类型，非裸金属机型必填，例如：CLOUD_RSSD
     *
     * @return string|null
     */
    public function getBootDiskType()
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 系统盘类型，非裸金属机型必填，例如：CLOUD_RSSD
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType($bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskSize: 数据盘容量，非裸金属机型必填
     *
     * @return string|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据盘容量，非裸金属机型必填
     *
     * @param string $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * DataDiskType: 数据盘类型，非裸金属机型必填，例如：CLOUD_RSSD
     *
     * @return string|null
     */
    public function getDataDiskType()
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 数据盘类型，非裸金属机型必填，例如：CLOUD_RSSD
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * NodeCount: 节点数量,默认为1
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 节点数量,默认为1
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }
}
