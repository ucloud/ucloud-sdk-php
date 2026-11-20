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
namespace UCloud\UDBProxy\Models;

use UCloud\Core\Response\Response;

class Replica extends Response
{
    

    /**
     * ID: 数据库ID
     *
     * @return string|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 数据库ID
     *
     * @param string $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * IP: 数据库IP
     *
     * @return string|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: 数据库IP
     *
     * @param string $ip
     */
    public function setIP($ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Port: 数据库服务端口
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 数据库服务端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * ReadWeight: 读权重
     *
     * @return integer|null
     */
    public function getReadWeight()
    {
        return $this->get("ReadWeight");
    }

    /**
     * ReadWeight: 读权重
     *
     * @param int $readWeight
     */
    public function setReadWeight($readWeight)
    {
        $this->set("ReadWeight", $readWeight);
    }

    /**
     * State: 状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * Role: 角色[master-主库，slave-从库]
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->get("Role");
    }

    /**
     * Role: 角色[master-主库，slave-从库]
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->set("Role", $role);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * JoinState: 是否加入代理服务(true:加入，false:未加入)
     *
     * @return boolean|null
     */
    public function getJoinState()
    {
        return $this->get("JoinState");
    }

    /**
     * JoinState: 是否加入代理服务(true:加入，false:未加入)
     *
     * @param boolean $joinState
     */
    public function setJoinState($joinState)
    {
        $this->set("JoinState", $joinState);
    }

    /**
     * Name: 数据库名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 数据库名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }
}
