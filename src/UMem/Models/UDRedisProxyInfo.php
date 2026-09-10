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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class UDRedisProxyInfo extends Response
{
    

    /**
     * ResourceId: 代理资源id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 代理资源id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ProxyId: 代理id
     *
     * @return string|null
     */
    public function getProxyId()
    {
        return $this->get("ProxyId");
    }

    /**
     * ProxyId: 代理id
     *
     * @param string $proxyId
     */
    public function setProxyId($proxyId)
    {
        $this->set("ProxyId", $proxyId);
    }

    /**
     * Vip: 代理ip
     *
     * @return string|null
     */
    public function getVip()
    {
        return $this->get("Vip");
    }

    /**
     * Vip: 代理ip
     *
     * @param string $vip
     */
    public function setVip($vip)
    {
        $this->set("Vip", $vip);
    }

    /**
     * State: 代理状态 [PROXY_CREATING:创建中, PROXY_NORMAL:正常运行, PROXY_FAILED:创建失败, PROXY_CLOSED:关闭, PROXY_INIT_RESIZE:初始化核数调整, PROXY_WAIT_RESIZE:等待核数调整, PROXY_RESIZING:核数调整中, PROXY_RESIZE_ERROR:核数调整失败]
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 代理状态 [PROXY_CREATING:创建中, PROXY_NORMAL:正常运行, PROXY_FAILED:创建失败, PROXY_CLOSED:关闭, PROXY_INIT_RESIZE:初始化核数调整, PROXY_WAIT_RESIZE:等待核数调整, PROXY_RESIZING:核数调整中, PROXY_RESIZE_ERROR:核数调整失败]
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * CPU: 代理CPU核数
     *
     * @return integer|null
     */
    public function getCPU()
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 代理CPU核数
     *
     * @param int $cpu
     */
    public function setCPU($cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * ProxyType: 0 : 物理机版分布式代理, 1: NVME(或SSD)版分布式代理
     *
     * @return integer|null
     */
    public function getProxyType()
    {
        return $this->get("ProxyType");
    }

    /**
     * ProxyType: 0 : 物理机版分布式代理, 1: NVME(或SSD)版分布式代理
     *
     * @param int $proxyType
     */
    public function setProxyType($proxyType)
    {
        $this->set("ProxyType", $proxyType);
    }

    /**
     * PublicIp: 开启外网状态下的外网IP，否则为空
     *
     * @return string|null
     */
    public function getPublicIp()
    {
        return $this->get("PublicIp");
    }

    /**
     * PublicIp: 开启外网状态下的外网IP，否则为空
     *
     * @param string $publicIp
     */
    public function setPublicIp($publicIp)
    {
        $this->set("PublicIp", $publicIp);
    }

    /**
     * SupportReadOnly: 代理是否支持设置为只读
     *
     * @return boolean|null
     */
    public function getSupportReadOnly()
    {
        return $this->get("SupportReadOnly");
    }

    /**
     * SupportReadOnly: 代理是否支持设置为只读
     *
     * @param boolean $supportReadOnly
     */
    public function setSupportReadOnly($supportReadOnly)
    {
        $this->set("SupportReadOnly", $supportReadOnly);
    }

    /**
     * ReadOnly: 代理是否为只读
     *
     * @return boolean|null
     */
    public function getReadOnly()
    {
        return $this->get("ReadOnly");
    }

    /**
     * ReadOnly: 代理是否为只读
     *
     * @param boolean $readOnly
     */
    public function setReadOnly($readOnly)
    {
        $this->set("ReadOnly", $readOnly);
    }

    /**
     * ReadMode: 读写分离策略, "Custom": 用户自定义节点权重， "Uniform": 包括主节点在内的所有节点平均读请求， "ReadOnly": 读请求均分至只读节点
     *
     * @return string|null
     */
    public function getReadMode()
    {
        return $this->get("ReadMode");
    }

    /**
     * ReadMode: 读写分离策略, "Custom": 用户自定义节点权重， "Uniform": 包括主节点在内的所有节点平均读请求， "ReadOnly": 读请求均分至只读节点
     *
     * @param string $readMode
     */
    public function setReadMode($readMode)
    {
        $this->set("ReadMode", $readMode);
    }
}
