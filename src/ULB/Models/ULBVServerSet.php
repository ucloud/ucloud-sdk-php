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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class ULBVServerSet extends Response
{
    

    /**
     * MonitorType: 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测， Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path; 报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize
     *
     * @return string|null
     */
    public function getMonitorType()
    {
        return $this->get("MonitorType");
    }

    /**
     * MonitorType: 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测， Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path; 报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize
     *
     * @param string $monitorType
     */
    public function setMonitorType($monitorType)
    {
        $this->set("MonitorType", $monitorType);
    }

    /**
     * ULBId: 负载均衡实例的Id
     *
     * @return string|null
     */
    public function getULBId()
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 负载均衡实例的Id
     *
     * @param string $ulbId
     */
    public function setULBId($ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * Domain: 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查域名
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查域名
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->set("Domain", $domain);
    }

    /**
     * Path: 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查路径
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->get("Path");
    }

    /**
     * Path: 根据MonitorType确认； 当MonitorType为Port时，此字段无意义。当MonitorType为Path时，代表HTTP检查路径
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->set("Path", $path);
    }

    /**
     * RequestMsg: 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *
     * @return string|null
     */
    public function getRequestMsg()
    {
        return $this->get("RequestMsg");
    }

    /**
     * RequestMsg: 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查发出的请求报文
     *
     * @param string $requestMsg
     */
    public function setRequestMsg($requestMsg)
    {
        $this->set("RequestMsg", $requestMsg);
    }

    /**
     * ResponseMsg: 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     *
     * @return string|null
     */
    public function getResponseMsg()
    {
        return $this->get("ResponseMsg");
    }

    /**
     * ResponseMsg: 根据MonitorType确认； 当MonitorType为Customize时，此字段有意义，代表UDP检查请求应收到的响应报文
     *
     * @param string $responseMsg
     */
    public function setResponseMsg($responseMsg)
    {
        $this->set("ResponseMsg", $responseMsg);
    }

    /**
     * VServerId: VServer实例的Id
     *
     * @return string|null
     */
    public function getVServerId()
    {
        return $this->get("VServerId");
    }

    /**
     * VServerId: VServer实例的Id
     *
     * @param string $vServerId
     */
    public function setVServerId($vServerId)
    {
        $this->set("VServerId", $vServerId);
    }

    /**
     * VServerName: VServer实例的名字
     *
     * @return string|null
     */
    public function getVServerName()
    {
        return $this->get("VServerName");
    }

    /**
     * VServerName: VServer实例的名字
     *
     * @param string $vServerName
     */
    public function setVServerName($vServerName)
    {
        $this->set("VServerName", $vServerName);
    }

    /**
     * Protocol: VServer实例的协议。 枚举值为：HTTP，TCP，UDP，HTTPS。
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: VServer实例的协议。 枚举值为：HTTP，TCP，UDP，HTTPS。
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * FrontendPort: VServer服务端口
     *
     * @return integer|null
     */
    public function getFrontendPort()
    {
        return $this->get("FrontendPort");
    }

    /**
     * FrontendPort: VServer服务端口
     *
     * @param int $frontendPort
     */
    public function setFrontendPort($frontendPort)
    {
        $this->set("FrontendPort", $frontendPort);
    }

    /**
     * Method: VServer负载均衡的模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）。
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->get("Method");
    }

    /**
     * Method: VServer负载均衡的模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）。
     *
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->set("Method", $method);
    }

    /**
     * PersistenceType: VServer会话保持方式。枚举值为： None -> 关闭会话保持； ServerInsert -> 自动生成； UserDefined -> 用户自定义。
     *
     * @return string|null
     */
    public function getPersistenceType()
    {
        return $this->get("PersistenceType");
    }

    /**
     * PersistenceType: VServer会话保持方式。枚举值为： None -> 关闭会话保持； ServerInsert -> 自动生成； UserDefined -> 用户自定义。
     *
     * @param string $persistenceType
     */
    public function setPersistenceType($persistenceType)
    {
        $this->set("PersistenceType", $persistenceType);
    }

    /**
     * PersistenceInfo: 根据PersistenceType确定： None或ServerInsert，此字段为空； UserDefined，此字段展示用户自定义会话string。
     *
     * @return string|null
     */
    public function getPersistenceInfo()
    {
        return $this->get("PersistenceInfo");
    }

    /**
     * PersistenceInfo: 根据PersistenceType确定： None或ServerInsert，此字段为空； UserDefined，此字段展示用户自定义会话string。
     *
     * @param string $persistenceInfo
     */
    public function setPersistenceInfo($persistenceInfo)
    {
        $this->set("PersistenceInfo", $persistenceInfo);
    }

    /**
     * ClientTimeout: 空闲连接的回收时间，单位：秒。
     *
     * @return integer|null
     */
    public function getClientTimeout()
    {
        return $this->get("ClientTimeout");
    }

    /**
     * ClientTimeout: 空闲连接的回收时间，单位：秒。
     *
     * @param int $clientTimeout
     */
    public function setClientTimeout($clientTimeout)
    {
        $this->set("ClientTimeout", $clientTimeout);
    }

    /**
     * Status: VServer的运行状态。枚举值： 0 -> rs全部运行正常;1 -> rs全部运行异常；2 -> rs部分运行异常。
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: VServer的运行状态。枚举值： 0 -> rs全部运行正常;1 -> rs全部运行异常；2 -> rs部分运行异常。
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * SSLSet: VServer绑定的SSL证书信息，具体结构见下方 ULBSSLSet。
     *
     * @return ULBSSLSet[]|null
     */
    public function getSSLSet()
    {
        $items = $this->get("SSLSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULBSSLSet($item));
        }
        return $result;
    }

    /**
     * SSLSet: VServer绑定的SSL证书信息，具体结构见下方 ULBSSLSet。
     *
     * @param ULBSSLSet[] $sslSet
     */
    public function setSSLSet(array $sslSet)
    {
        $result = [];
        foreach ($sslSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * BackendSet: 后端资源信息列表，具体结构见下方 ULBBackendSet
     *
     * @return ULBBackendSet[]|null
     */
    public function getBackendSet()
    {
        $items = $this->get("BackendSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULBBackendSet($item));
        }
        return $result;
    }

    /**
     * BackendSet: 后端资源信息列表，具体结构见下方 ULBBackendSet
     *
     * @param ULBBackendSet[] $backendSet
     */
    public function setBackendSet(array $backendSet)
    {
        $result = [];
        foreach ($backendSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ListenType: 监听器类型，枚举值为: RequestProxy -> 请求代理；PacketsTransmit -> 报文转发
     *
     * @return string|null
     */
    public function getListenType()
    {
        return $this->get("ListenType");
    }

    /**
     * ListenType: 监听器类型，枚举值为: RequestProxy -> 请求代理；PacketsTransmit -> 报文转发
     *
     * @param string $listenType
     */
    public function setListenType($listenType)
    {
        $this->set("ListenType", $listenType);
    }

    /**
     * PolicySet: 内容转发信息列表，具体结构见下方 ULBPolicySet
     *
     * @return ULBPolicySet[]|null
     */
    public function getPolicySet()
    {
        $items = $this->get("PolicySet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULBPolicySet($item));
        }
        return $result;
    }

    /**
     * PolicySet: 内容转发信息列表，具体结构见下方 ULBPolicySet
     *
     * @param ULBPolicySet[] $policySet
     */
    public function setPolicySet(array $policySet)
    {
        $result = [];
        foreach ($policySet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
