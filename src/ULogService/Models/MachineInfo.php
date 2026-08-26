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
namespace UCloud\ULogService\Models;

use UCloud\Core\Response\Response;

class MachineInfo extends Response
{
    

    /**
     * Id: 机器组ID
     *
     * @return integer|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 机器组ID
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Name: 机器组名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 机器组名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Type: 机器组类型，取值有：LABEL和IP
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 机器组类型，取值有：LABEL和IP
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * LogAgents: LogAgent信息，数组类型
     *
     * @return LogAgent|null
     */
    public function getLogAgents()
    {
        return new LogAgent($this->get("LogAgents"));
    }

    /**
     * LogAgents: LogAgent信息，数组类型
     *
     * @param LogAgent $logAgents
     */
    public function setLogAgents(array $logAgents)
    {
        $this->set("LogAgents", $logAgents->getAll());
    }

    /**
     * Labels: 机器组标签，数组类型
     *
     * @return string[]|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: 机器组标签，数组类型
     *
     * @param string[] $labels
     */
    public function setLabels(array $labels)
    {
        $this->set("Labels", $labels);
    }

    /**
     * Ips: 机器组Ip，数组类型
     *
     * @return string|null
     */
    public function getIps()
    {
        return $this->get("Ips");
    }

    /**
     * Ips: 机器组Ip，数组类型
     *
     * @param string $ips
     */
    public function setIps($ips)
    {
        $this->set("Ips", $ips);
    }
}
