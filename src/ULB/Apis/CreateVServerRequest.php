<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class CreateVServerRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateVServer"]);
        $this->markRequired("Region");
        $this->markRequired("ULBId");
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
     * ULBId: 传统型负载均衡实例ID
     *
     * @return string|null
     */
    public function getULBId()
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 传统型负载均衡实例ID
     *
     * @param string $ulbId
     */
    public function setULBId($ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * VServerName: VServer实例名称，默认为"VServer"
     *
     * @return string|null
     */
    public function getVServerName()
    {
        return $this->get("VServerName");
    }

    /**
     * VServerName: VServer实例名称，默认为"VServer"
     *
     * @param string $vServerName
     */
    public function setVServerName($vServerName)
    {
        $this->set("VServerName", $vServerName);
    }

    /**
     * ListenType: 监听器类型，枚举值，RequestProxy ，请求代理；PacketsTransmit ，报文转发。默认为RequestProxy
     *
     * @return string|null
     */
    public function getListenType()
    {
        return $this->get("ListenType");
    }

    /**
     * ListenType: 监听器类型，枚举值，RequestProxy ，请求代理；PacketsTransmit ，报文转发。默认为RequestProxy
     *
     * @param string $listenType
     */
    public function setListenType($listenType)
    {
        $this->set("ListenType", $listenType);
    }

    /**
     * Protocol: VServer实例的协议，请求代理模式下有 HTTP、HTTPS、TCP，报文转发下有 TCP，UDP。默认为“HTTP"
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: VServer实例的协议，请求代理模式下有 HTTP、HTTPS、TCP，报文转发下有 TCP，UDP。默认为“HTTP"
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * FrontendPort: VServer后端端口，取值范围[1-65535]；默认值为80
     *
     * @return integer|null
     */
    public function getFrontendPort()
    {
        return $this->get("FrontendPort");
    }

    /**
     * FrontendPort: VServer后端端口，取值范围[1-65535]；默认值为80
     *
     * @param int $frontendPort
     */
    public function setFrontendPort($frontendPort)
    {
        $this->set("FrontendPort", $frontendPort);
    }

    /**
     * Method: VServer负载均衡模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）; WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数;Backup ->主备模式。ConsistentHash，SourcePort，ConsistentHashPort 只在报文转发中使用；Leastconn只在请求代理中使用；Roundrobin、Source和WeightRoundrobin,Backup在请求代理和报文转发中使用。默认为："Roundrobin"
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->get("Method");
    }

    /**
     * Method: VServer负载均衡模式，枚举值：Roundrobin -> 轮询;Source -> 源地址；ConsistentHash -> 一致性哈希；SourcePort -> 源地址（计算端口）；ConsistentHashPort -> 一致性哈希（计算端口）; WeightRoundrobin -> 加权轮询; Leastconn -> 最小连接数;Backup ->主备模式。ConsistentHash，SourcePort，ConsistentHashPort 只在报文转发中使用；Leastconn只在请求代理中使用；Roundrobin、Source和WeightRoundrobin,Backup在请求代理和报文转发中使用。默认为："Roundrobin"
     *
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->set("Method", $method);
    }

    /**
     * PersistenceType: VServer会话保持方式，默认关闭会话保持。枚举值：None -> 关闭；ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY。
     *
     * @return string|null
     */
    public function getPersistenceType()
    {
        return $this->get("PersistenceType");
    }

    /**
     * PersistenceType: VServer会话保持方式，默认关闭会话保持。枚举值：None -> 关闭；ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY。
     *
     * @param string $persistenceType
     */
    public function setPersistenceType($persistenceType)
    {
        $this->set("PersistenceType", $persistenceType);
    }

    /**
     * PersistenceInfo: 根据PersistenceType确认； None和ServerInsert： 此字段无意义； UserDefined：此字段传入自定义会话保持String
     *
     * @return string|null
     */
    public function getPersistenceInfo()
    {
        return $this->get("PersistenceInfo");
    }

    /**
     * PersistenceInfo: 根据PersistenceType确认； None和ServerInsert： 此字段无意义； UserDefined：此字段传入自定义会话保持String
     *
     * @param string $persistenceInfo
     */
    public function setPersistenceInfo($persistenceInfo)
    {
        $this->set("PersistenceInfo", $persistenceInfo);
    }

    /**
     * ClientTimeout: ListenType为RequestProxy时表示空闲连接的回收时间，单位：秒，取值范围：时(0，86400]，默认值为60；ListenType为PacketsTransmit时表示连接保持的时间，单位：秒，取值范围：[60，900]，0 表示禁用连接保持
     *
     * @return integer|null
     */
    public function getClientTimeout()
    {
        return $this->get("ClientTimeout");
    }

    /**
     * ClientTimeout: ListenType为RequestProxy时表示空闲连接的回收时间，单位：秒，取值范围：时(0，86400]，默认值为60；ListenType为PacketsTransmit时表示连接保持的时间，单位：秒，取值范围：[60，900]，0 表示禁用连接保持
     *
     * @param int $clientTimeout
     */
    public function setClientTimeout($clientTimeout)
    {
        $this->set("ClientTimeout", $clientTimeout);
    }

    /**
     * MonitorType: 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测；Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path;报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize，默认值为Ping
     *
     * @return string|null
     */
    public function getMonitorType()
    {
        return $this->get("MonitorType");
    }

    /**
     * MonitorType: 健康检查类型，枚举值：Port -> 端口检查；Path -> 路径检查；Ping -> Ping探测；Customize -> UDP检查请求代理型默认值为Port，其中TCP协议仅支持Port，其他协议支持Port和Path;报文转发型TCP协议仅支持Port，UDP协议支持Ping、Port和Customize，默认值为Ping
     *
     * @param string $monitorType
     */
    public function setMonitorType($monitorType)
    {
        $this->set("MonitorType", $monitorType);
    }

    /**
     * Domain: 根据MonitorType确认； 当MonitorType为Path时，此字段有意义，代表HTTP检查域名
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 根据MonitorType确认； 当MonitorType为Path时，此字段有意义，代表HTTP检查域名
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->set("Domain", $domain);
    }

    /**
     * Path: 根据MonitorType确认； 当MonitorType为Path时，此字段有意义，代表HTTP检查路径
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->get("Path");
    }

    /**
     * Path: 根据MonitorType确认； 当MonitorType为Path时，此字段有意义，代表HTTP检查路径
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
     * SecurityPolicyId: 安全策略组ID，默认值'Default'
     *
     * @return string|null
     */
    public function getSecurityPolicyId()
    {
        return $this->get("SecurityPolicyId");
    }

    /**
     * SecurityPolicyId: 安全策略组ID，默认值'Default'
     *
     * @param string $securityPolicyId
     */
    public function setSecurityPolicyId($securityPolicyId)
    {
        $this->set("SecurityPolicyId", $securityPolicyId);
    }

    /**
     * EnableCompression: 0:关闭 1:开启，用于数据压缩功能
     *
     * @return integer|null
     */
    public function getEnableCompression()
    {
        return $this->get("EnableCompression");
    }

    /**
     * EnableCompression: 0:关闭 1:开启，用于数据压缩功能
     *
     * @param int $enableCompression
     */
    public function setEnableCompression($enableCompression)
    {
        $this->set("EnableCompression", $enableCompression);
    }

    /**
     * ForwardPort: 重定向端口，取值范围[0-65535]；默认值为0，代表关闭；仅HTTP协议支持开启重定向功能
     *
     * @return integer|null
     */
    public function getForwardPort()
    {
        return $this->get("ForwardPort");
    }

    /**
     * ForwardPort: 重定向端口，取值范围[0-65535]；默认值为0，代表关闭；仅HTTP协议支持开启重定向功能
     *
     * @param int $forwardPort
     */
    public function setForwardPort($forwardPort)
    {
        $this->set("ForwardPort", $forwardPort);
    }

    /**
     * EnableHTTP2: 0:关闭 1:开启，用于开启http2功能；默认值为0
     *
     * @return integer|null
     */
    public function getEnableHTTP2()
    {
        return $this->get("EnableHTTP2");
    }

    /**
     * EnableHTTP2: 0:关闭 1:开启，用于开启http2功能；默认值为0
     *
     * @param int $enableHTTP2
     */
    public function setEnableHTTP2($enableHTTP2)
    {
        $this->set("EnableHTTP2", $enableHTTP2);
    }
}
