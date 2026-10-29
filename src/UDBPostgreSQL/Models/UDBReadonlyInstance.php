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
namespace UCloud\UDBPostgreSQL\Models;

use UCloud\Core\Response\Response;

class UDBReadonlyInstance extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * InstanceID: 资源ID
     *
     * @return string|null
     */
    public function getInstanceID()
    {
        return $this->get("InstanceID");
    }

    /**
     * InstanceID: 资源ID
     *
     * @param string $instanceID
     */
    public function setInstanceID($instanceID)
    {
        $this->set("InstanceID", $instanceID);
    }

    /**
     * Name: 实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBVersion: 实例的版本，包括postgresql-10.4,postgresql-13.4
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 实例的版本，包括postgresql-10.4,postgresql-13.4
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * InstanceMode: normal/ha/readonly,普通/高可用/只读从库
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: normal/ha/readonly,普通/高可用/只读从库
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * State: 实例状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中， Running：运行，Stopping：关闭中，Stopped：已关闭,Deleted: 已删除，Upgrading: 升级中 ，Promoting：提升为主库进行中，Recovering：恢复中，RecoverFailed：恢复失败，StartFailed：启动失败，ShutdownFailed：关闭失败，Deleting：删除中，DeleteFailed：删除失败
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中， Running：运行，Stopping：关闭中，Stopped：已关闭,Deleted: 已删除，Upgrading: 升级中 ，Promoting：提升为主库进行中，Recovering：恢复中，RecoverFailed：恢复失败，StartFailed：启动失败，ShutdownFailed：关闭失败，Deleting：删除中，DeleteFailed：删除失败
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * MachineType: 机器规格，格式为nCmG,n代表cpu核数，m代表内存大小(GB)
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机器规格，格式为nCmG,n代表cpu核数，m代表内存大小(GB)
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
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
     * CreateTime: DB实例创建时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: DB实例创建时间，采用UTC计时时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: DB实例过期时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: DB实例过期时间，采用UTC计时时间戳
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * IP: DB实例ip
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: DB实例ip
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }
}
