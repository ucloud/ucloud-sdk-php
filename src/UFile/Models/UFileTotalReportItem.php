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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class UFileTotalReportItem extends Response
{
    

    /**
     * Flow: 下载流量：单位byte；国内无此字段
     *
     * @return float|null
     */
    public function getFlow()
    {
        return $this->get("Flow");
    }

    /**
     * Flow: 下载流量：单位byte；国内无此字段
     *
     * @param float $flow
     */
    public function setFlow($flow)
    {
        $this->set("Flow", $flow);
    }

    /**
     * IdleFlow: 闲时流量；单位byte；海外无此字段
     *
     * @return float|null
     */
    public function getIdleFlow()
    {
        return $this->get("IdleFlow");
    }

    /**
     * IdleFlow: 闲时流量；单位byte；海外无此字段
     *
     * @param float $idleFlow
     */
    public function setIdleFlow($idleFlow)
    {
        $this->set("IdleFlow", $idleFlow);
    }

    /**
     * BusyFlow: 忙时流量；单位byte；海外无此字段
     *
     * @return float|null
     */
    public function getBusyFlow()
    {
        return $this->get("BusyFlow");
    }

    /**
     * BusyFlow: 忙时流量；单位byte；海外无此字段
     *
     * @param float $busyFlow
     */
    public function setBusyFlow($busyFlow)
    {
        $this->set("BusyFlow", $busyFlow);
    }

    /**
     * CdnFlow: cdn回源流量;单位byte
     *
     * @return float|null
     */
    public function getCdnFlow()
    {
        return $this->get("CdnFlow");
    }

    /**
     * CdnFlow: cdn回源流量;单位byte
     *
     * @param float $cdnFlow
     */
    public function setCdnFlow($cdnFlow)
    {
        $this->set("CdnFlow", $cdnFlow);
    }

    /**
     * ApiTimes: API请求次数（万次）
     *
     * @return float|null
     */
    public function getApiTimes()
    {
        return $this->get("ApiTimes");
    }

    /**
     * ApiTimes: API请求次数（万次）
     *
     * @param float $apiTimes
     */
    public function setApiTimes($apiTimes)
    {
        $this->set("ApiTimes", $apiTimes);
    }


}
