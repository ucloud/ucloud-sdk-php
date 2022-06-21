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

class DeleteUGAForwarderRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteUGAForwarder"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGAId");
    }

    

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @return string|null
     */
    public function getUGAId()
    {
        return $this->get("UGAId");
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @param string $ugaId
     */
    public function setUGAId($ugaId)
    {
        $this->set("UGAId", $ugaId);
    }

    /**
     * HTTPHTTP: HTTP接入HTTP回源，接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPHTTP()
    {
        return $this->get("HTTPHTTP");
    }

    /**
     * HTTPHTTP: HTTP接入HTTP回源，接入端口。禁用65123端口
     *
     * @param int[] $httphttp
     */
    public function setHTTPHTTP(array $httphttp)
    {
        $this->set("HTTPHTTP", $httphttp);
    }

    /**
     * HTTPSHTTP: HTTPS接入HTTP回源， 接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTP()
    {
        return $this->get("HTTPSHTTP");
    }

    /**
     * HTTPSHTTP: HTTPS接入HTTP回源， 接入端口。禁用65123端口
     *
     * @param int[] $httpshttp
     */
    public function setHTTPSHTTP(array $httpshttp)
    {
        $this->set("HTTPSHTTP", $httpshttp);
    }

    /**
     * HTTPSHTTPS: HTTPS接入HTTPS回源， 接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTPS()
    {
        return $this->get("HTTPSHTTPS");
    }

    /**
     * HTTPSHTTPS: HTTPS接入HTTPS回源， 接入端口。禁用65123端口
     *
     * @param int[] $httpshttps
     */
    public function setHTTPSHTTPS(array $httpshttps)
    {
        $this->set("HTTPSHTTPS", $httpshttps);
    }

    /**
     * WSSWSS: WebSocketS接入WebSocketS回源， 接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getWSSWSS()
    {
        return $this->get("WSSWSS");
    }

    /**
     * WSSWSS: WebSocketS接入WebSocketS回源， 接入端口。禁用65123端口
     *
     * @param int[] $wsswss
     */
    public function setWSSWSS(array $wsswss)
    {
        $this->set("WSSWSS", $wsswss);
    }

    /**
     * WSWS: WebSocket接入WebSocket回源， 接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getWSWS()
    {
        return $this->get("WSWS");
    }

    /**
     * WSWS: WebSocket接入WebSocket回源， 接入端口。禁用65123端口
     *
     * @param int[] $wsws
     */
    public function setWSWS(array $wsws)
    {
        $this->set("WSWS", $wsws);
    }

    /**
     * WSSWS: WebSocketS接入WebSocket回源， 接入端口。禁用65123端口。
     *
     * @return int[]|null
     */
    public function getWSSWS()
    {
        return $this->get("WSSWS");
    }

    /**
     * WSSWS: WebSocketS接入WebSocket回源， 接入端口。禁用65123端口。
     *
     * @param int[] $wssws
     */
    public function setWSSWS(array $wssws)
    {
        $this->set("WSSWS", $wssws);
    }

    /**
     * TCP: TCP接入端口
     *
     * @return int[]|null
     */
    public function getTCP()
    {
        return $this->get("TCP");
    }

    /**
     * TCP: TCP接入端口
     *
     * @param int[] $tcp
     */
    public function setTCP(array $tcp)
    {
        $this->set("TCP", $tcp);
    }

    /**
     * UDP: UDP接入端口
     *
     * @return int[]|null
     */
    public function getUDP()
    {
        return $this->get("UDP");
    }

    /**
     * UDP: UDP接入端口
     *
     * @param int[] $udp
     */
    public function setUDP(array $udp)
    {
        $this->set("UDP", $udp);
    }


}
