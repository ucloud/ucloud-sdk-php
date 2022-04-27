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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreateUGAForwarderRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUGAForwarder"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGAId");
    }

    

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @return string|null
     */
    public function getUGAId(): string
    {
        return $this->get("UGAId");
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @param string $ugaId
     */
    public function setUGAId(string $ugaId)
    {
        $this->set("UGAId", $ugaId);
    }

    /**
     * HTTPHTTP: HTTP接入HTTP回源转发，接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPHTTP(): array
    {
        return $this->get("HTTPHTTP");
    }

    /**
     * HTTPHTTP: HTTP接入HTTP回源转发，接入端口。禁用65123端口
     *
     * @param int[] $httphttp
     */
    public function setHTTPHTTP(array $httphttp)
    {
        $this->set("HTTPHTTP", $httphttp);
    }

    /**
     * HTTPHTTPRS: HTTP接入HTTP回源转发，源站监听端口
     *
     * @return int[]|null
     */
    public function getHTTPHTTPRS(): array
    {
        return $this->get("HTTPHTTPRS");
    }

    /**
     * HTTPHTTPRS: HTTP接入HTTP回源转发，源站监听端口
     *
     * @param int[] $httphttprs
     */
    public function setHTTPHTTPRS(array $httphttprs)
    {
        $this->set("HTTPHTTPRS", $httphttprs);
    }

    /**
     * HTTPSHTTP: HTTPS接入HTTP回源转发，接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTP(): array
    {
        return $this->get("HTTPSHTTP");
    }

    /**
     * HTTPSHTTP: HTTPS接入HTTP回源转发，接入端口。禁用65123端口
     *
     * @param int[] $httpshttp
     */
    public function setHTTPSHTTP(array $httpshttp)
    {
        $this->set("HTTPSHTTP", $httpshttp);
    }

    /**
     * HTTPSHTTPRS: HTTPS接入HTTP回源转发，回源端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTPRS(): array
    {
        return $this->get("HTTPSHTTPRS");
    }

    /**
     * HTTPSHTTPRS: HTTPS接入HTTP回源转发，回源端口
     *
     * @param int[] $httpshttprs
     */
    public function setHTTPSHTTPRS(array $httpshttprs)
    {
        $this->set("HTTPSHTTPRS", $httpshttprs);
    }

    /**
     * HTTPSHTTPS: HTTPS接入HTTPS回源转发，接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTPS(): array
    {
        return $this->get("HTTPSHTTPS");
    }

    /**
     * HTTPSHTTPS: HTTPS接入HTTPS回源转发，接入端口。禁用65123端口
     *
     * @param int[] $httpshttps
     */
    public function setHTTPSHTTPS(array $httpshttps)
    {
        $this->set("HTTPSHTTPS", $httpshttps);
    }

    /**
     * HTTPSHTTPSRS: HTTPS接入HTTPS回源转发，源站监听端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTPSRS(): array
    {
        return $this->get("HTTPSHTTPSRS");
    }

    /**
     * HTTPSHTTPSRS: HTTPS接入HTTPS回源转发，源站监听端口
     *
     * @param int[] $httpshttpsrs
     */
    public function setHTTPSHTTPSRS(array $httpshttpsrs)
    {
        $this->set("HTTPSHTTPSRS", $httpshttpsrs);
    }

    /**
     * TCP: TCP接入端口，禁用65123端口
     *
     * @return int[]|null
     */
    public function getTCP(): array
    {
        return $this->get("TCP");
    }

    /**
     * TCP: TCP接入端口，禁用65123端口
     *
     * @param int[] $tcp
     */
    public function setTCP(array $tcp)
    {
        $this->set("TCP", $tcp);
    }

    /**
     * TCPRS: TCP回源端口
     *
     * @return int[]|null
     */
    public function getTCPRS(): array
    {
        return $this->get("TCPRS");
    }

    /**
     * TCPRS: TCP回源端口
     *
     * @param int[] $tcprs
     */
    public function setTCPRS(array $tcprs)
    {
        $this->set("TCPRS", $tcprs);
    }

    /**
     * UDP: UDP接入端口，禁用65123端口
     *
     * @return int[]|null
     */
    public function getUDP(): array
    {
        return $this->get("UDP");
    }

    /**
     * UDP: UDP接入端口，禁用65123端口
     *
     * @param int[] $udp
     */
    public function setUDP(array $udp)
    {
        $this->set("UDP", $udp);
    }

    /**
     * UDPRS: UDP回源端口
     *
     * @return int[]|null
     */
    public function getUDPRS(): array
    {
        return $this->get("UDPRS");
    }

    /**
     * UDPRS: UDP回源端口
     *
     * @param int[] $udprs
     */
    public function setUDPRS(array $udprs)
    {
        $this->set("UDPRS", $udprs);
    }

    /**
     * WSWS: WebSocket接入WebSocket回源转发，接入端口。禁用65123。
     *
     * @return int[]|null
     */
    public function getWSWS(): array
    {
        return $this->get("WSWS");
    }

    /**
     * WSWS: WebSocket接入WebSocket回源转发，接入端口。禁用65123。
     *
     * @param int[] $wsws
     */
    public function setWSWS(array $wsws)
    {
        $this->set("WSWS", $wsws);
    }

    /**
     * WSWSRS: WebSocket接入WebSocket回源转发，源站监听端口
     *
     * @return int[]|null
     */
    public function getWSWSRS(): array
    {
        return $this->get("WSWSRS");
    }

    /**
     * WSWSRS: WebSocket接入WebSocket回源转发，源站监听端口
     *
     * @param int[] $wswsrs
     */
    public function setWSWSRS(array $wswsrs)
    {
        $this->set("WSWSRS", $wswsrs);
    }

    /**
     * WSSWSS: WebSocketS接入WebSocketS回源转发，接入端口。禁用65123。
     *
     * @return int[]|null
     */
    public function getWSSWSS(): array
    {
        return $this->get("WSSWSS");
    }

    /**
     * WSSWSS: WebSocketS接入WebSocketS回源转发，接入端口。禁用65123。
     *
     * @param int[] $wsswss
     */
    public function setWSSWSS(array $wsswss)
    {
        $this->set("WSSWSS", $wsswss);
    }

    /**
     * WSSWSSRS: WebSocketS接入WebSocketS回源转发，源站监听端口。
     *
     * @return int[]|null
     */
    public function getWSSWSSRS(): array
    {
        return $this->get("WSSWSSRS");
    }

    /**
     * WSSWSSRS: WebSocketS接入WebSocketS回源转发，源站监听端口。
     *
     * @param int[] $wsswssrs
     */
    public function setWSSWSSRS(array $wsswssrs)
    {
        $this->set("WSSWSSRS", $wsswssrs);
    }

    /**
     * WSSWS: WebSocketS接入WebSocket回源转发，接入端口。禁用65123。
     *
     * @return int[]|null
     */
    public function getWSSWS(): array
    {
        return $this->get("WSSWS");
    }

    /**
     * WSSWS: WebSocketS接入WebSocket回源转发，接入端口。禁用65123。
     *
     * @param int[] $wssws
     */
    public function setWSSWS(array $wssws)
    {
        $this->set("WSSWS", $wssws);
    }

    /**
     * WSSWSRS: WebSocketS接入WebSocket回源转发，源站监听端口。
     *
     * @return int[]|null
     */
    public function getWSSWSRS(): array
    {
        return $this->get("WSSWSRS");
    }

    /**
     * WSSWSRS: WebSocketS接入WebSocket回源转发，源站监听端口。
     *
     * @param int[] $wsswsrs
     */
    public function setWSSWSRS(array $wsswsrs)
    {
        $this->set("WSSWSRS", $wsswsrs);
    }
}
