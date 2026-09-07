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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class ResourceExInfo extends Response
{
    

    /**
     * SuperResourceId: 父级资源ID
     *
     * @return string|null
     */
    public function getSuperResourceId()
    {
        return $this->get("SuperResourceId");
    }

    /**
     * SuperResourceId: 父级资源ID
     *
     * @param string $superResourceId
     */
    public function setSuperResourceId($superResourceId)
    {
        $this->set("SuperResourceId", $superResourceId);
    }

    /**
     * ResourceName: 资源名称
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName($resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * IP: 主机内网IP
     *
     * @return string[]|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP: 主机内网IP
     *
     * @param string[] $ip
     */
    public function setIP(array $ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * EIP: 主机外网IP
     *
     * @return string[]|null
     */
    public function getEIP()
    {
        return $this->get("EIP");
    }

    /**
     * EIP: 主机外网IP
     *
     * @param string[] $eip
     */
    public function setEIP(array $eip)
    {
        $this->set("EIP", $eip);
    }

    /**
     * Uni: 弹性网卡信息
     *
     * @return ResourceSecgroupInfo[]|null
     */
    public function getUni()
    {
        $items = $this->get("Uni");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceSecgroupInfo($item));
        }
        return $result;
    }

    /**
     * Uni: 弹性网卡信息
     *
     * @param ResourceSecgroupInfo[] $uni
     */
    public function setUni(array $uni)
    {
        $result = [];
        foreach ($uni as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SuperResourceName: 父级资源名称
     *
     * @return string|null
     */
    public function getSuperResourceName()
    {
        return $this->get("SuperResourceName");
    }

    /**
     * SuperResourceName: 父级资源名称
     *
     * @param string $superResourceName
     */
    public function setSuperResourceName($superResourceName)
    {
        $this->set("SuperResourceName", $superResourceName);
    }
}
