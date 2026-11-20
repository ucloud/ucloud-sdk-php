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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class ExternalInfo extends Response
{
    

    /**
     * Status: 外网访问状态，字符串枚举，取值见下表
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 外网访问状态，字符串枚举，取值见下表
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ExternalAddress: 外网访问地址；未开通外网访问时为空字符串
     *
     * @return string|null
     */
    public function getExternalAddress()
    {
        return $this->get("ExternalAddress");
    }

    /**
     * ExternalAddress: 外网访问地址；未开通外网访问时为空字符串
     *
     * @param string $externalAddress
     */
    public function setExternalAddress($externalAddress)
    {
        $this->set("ExternalAddress", $externalAddress);
    }

    /**
     * ExternalPort: 外网访问端口；未开通时为 0
     *
     * @return integer|null
     */
    public function getExternalPort()
    {
        return $this->get("ExternalPort");
    }

    /**
     * ExternalPort: 外网访问端口；未开通时为 0
     *
     * @param int $externalPort
     */
    public function setExternalPort($externalPort)
    {
        $this->set("ExternalPort", $externalPort);
    }

    /**
     * Bindwidth: 外网带宽，单位 Mbps，取自 EIP 带宽；无 EIP 时为 0
     *
     * @return integer|null
     */
    public function getBindwidth()
    {
        return $this->get("Bindwidth");
    }

    /**
     * Bindwidth: 外网带宽，单位 Mbps，取自 EIP 带宽；无 EIP 时为 0
     *
     * @param int $bindwidth
     */
    public function setBindwidth($bindwidth)
    {
        $this->set("Bindwidth", $bindwidth);
    }

    /**
     * WhiteList: 外网访问白名单，多个 IP 以逗号分隔，取自 NLB 白名单
     *
     * @return string|null
     */
    public function getWhiteList()
    {
        return $this->get("WhiteList");
    }

    /**
     * WhiteList: 外网访问白名单，多个 IP 以逗号分隔，取自 NLB 白名单
     *
     * @param string $whiteList
     */
    public function setWhiteList($whiteList)
    {
        $this->set("WhiteList", $whiteList);
    }

    /**
     * Support: 实例是否支持外网访问能力：1 支持；当前实现恒返回 1
     *
     * @return integer|null
     */
    public function getSupport()
    {
        return $this->get("Support");
    }

    /**
     * Support: 实例是否支持外网访问能力：1 支持；当前实现恒返回 1
     *
     * @param int $support
     */
    public function setSupport($support)
    {
        $this->set("Support", $support);
    }
}
