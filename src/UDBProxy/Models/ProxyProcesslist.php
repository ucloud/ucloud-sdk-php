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

class ProxyProcesslist extends Response
{
    

    /**
     * ID: 当前连接DB进程ID
     *
     * @return integer|null
     */
    public function getID()
    {
        return $this->get("ID");
    }

    /**
     * ID: 当前连接DB进程ID
     *
     * @param int $id
     */
    public function setID($id)
    {
        $this->set("ID", $id);
    }

    /**
     * User: 启动这个线程的用户
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->get("User");
    }

    /**
     * User: 启动这个线程的用户
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->set("User", $user);
    }

    /**
     * Host: 代理连接DB地址
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->get("Host");
    }

    /**
     * Host: 代理连接DB地址
     *
     * @param string $host
     */
    public function setHost($host)
    {
        $this->set("Host", $host);
    }

    /**
     * DB: 当前执行的命令是在哪一个数据库上。如果没有指定数据库，则该值为 NULL
     *
     * @return string|null
     */
    public function getDB()
    {
        return $this->get("DB");
    }

    /**
     * DB: 当前执行的命令是在哪一个数据库上。如果没有指定数据库，则该值为 NULL
     *
     * @param string $db
     */
    public function setDB($db)
    {
        $this->set("DB", $db);
    }

    /**
     * Command: 显示当前连接的执行的命令
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->get("Command");
    }

    /**
     * Command: 显示当前连接的执行的命令
     *
     * @param string $command
     */
    public function setCommand($command)
    {
        $this->set("Command", $command);
    }

    /**
     * Time: 表示该线程处于当前状态的时间
     *
     * @return integer|null
     */
    public function getTime()
    {
        return $this->get("Time");
    }

    /**
     * Time: 表示该线程处于当前状态的时间
     *
     * @param int $time
     */
    public function setTime($time)
    {
        $this->set("Time", $time);
    }

    /**
     * State: 线程的状态，和 Command 对应
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 线程的状态，和 Command 对应
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * Info: 一般记录的是线程执行的语句
     *
     * @return string|null
     */
    public function getInfo()
    {
        return $this->get("Info");
    }

    /**
     * Info: 一般记录的是线程执行的语句
     *
     * @param string $info
     */
    public function setInfo($info)
    {
        $this->set("Info", $info);
    }

    /**
     * ClientHost: 客户端来源IP地址
     *
     * @return string|null
     */
    public function getClientHost()
    {
        return $this->get("ClientHost");
    }

    /**
     * ClientHost: 客户端来源IP地址
     *
     * @param string $clientHost
     */
    public function setClientHost($clientHost)
    {
        $this->set("ClientHost", $clientHost);
    }

    /**
     * DBID: 数据库资源ID
     *
     * @return string|null
     */
    public function getDBID()
    {
        return $this->get("DBID");
    }

    /**
     * DBID: 数据库资源ID
     *
     * @param string $dbid
     */
    public function setDBID($dbid)
    {
        $this->set("DBID", $dbid);
    }

    /**
     * Role: 数据库角色(主库/从库)
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->get("Role");
    }

    /**
     * Role: 数据库角色(主库/从库)
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->set("Role", $role);
    }
}
