<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class DeleteUGAForwarderRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteUGAForwarder"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGAId");
    }

    

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @return string|null
     */
    public function getUGAId(): string {
        return $this->get("UGAId");
    }

    /**
     * UGAId: 加速配置实例ID
     *
     * @param string $ugaId
     */
    public function setUGAId(string $ugaId) {
        $this->set("UGAId", $ugaId);
    }

    /**
     * HTTPHTTP: HTTP接入HTTP回源，接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPHTTP(): array {
        return $this->get("HTTPHTTP");
    }

    /**
     * HTTPHTTP: HTTP接入HTTP回源，接入端口。禁用65123端口
     *
     * @param int[] $httphttp
     */
    public function setHTTPHTTP(array $httphttp) {
        $this->set("HTTPHTTP", $httphttp);
    }

    /**
     * HTTPSHTTP: HTTPS接入HTTP回源， 接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTP(): array {
        return $this->get("HTTPSHTTP");
    }

    /**
     * HTTPSHTTP: HTTPS接入HTTP回源， 接入端口。禁用65123端口
     *
     * @param int[] $httpshttp
     */
    public function setHTTPSHTTP(array $httpshttp) {
        $this->set("HTTPSHTTP", $httpshttp);
    }

    /**
     * HTTPSHTTPS: HTTPS接入HTTPS回源， 接入端口。禁用65123端口
     *
     * @return int[]|null
     */
    public function getHTTPSHTTPS(): array {
        return $this->get("HTTPSHTTPS");
    }

    /**
     * HTTPSHTTPS: HTTPS接入HTTPS回源， 接入端口。禁用65123端口
     *
     * @param int[] $httpshttps
     */
    public function setHTTPSHTTPS(array $httpshttps) {
        $this->set("HTTPSHTTPS", $httpshttps);
    }

    /**
     * TCP: TCP接入端口
     *
     * @return int[]|null
     */
    public function getTCP(): array {
        return $this->get("TCP");
    }

    /**
     * TCP: TCP接入端口
     *
     * @param int[] $tcp
     */
    public function setTCP(array $tcp) {
        $this->set("TCP", $tcp);
    }

    /**
     * UDP: UDP接入端口
     *
     * @return int[]|null
     */
    public function getUDP(): array {
        return $this->get("UDP");
    }

    /**
     * UDP: UDP接入端口
     *
     * @param int[] $udp
     */
    public function setUDP(array $udp) {
        $this->set("UDP", $udp);
    }


}
