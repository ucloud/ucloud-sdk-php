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
namespace UCloud\UWSC\Params;

use UCloud\Core\Request\Request;

class CreateCETunnelParamDPDConf extends Request
{
    

    /**
     * Enabled: 是否开启 DPD（对等体存活检测）功能。取值：0（关闭）、1（开启）
     *
     * @return integer|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否开启 DPD（对等体存活检测）功能。取值：0（关闭）、1（开启）
     *
     * @param int $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Action: DPD超时后的动作,Enable为1（开启）时有效。可取值为clear（断开）、restart（重试）和 trap（流量触发）
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->get("Action");
    }

    /**
     * Action: DPD超时后的动作,Enable为1（开启）时有效。可取值为clear（断开）、restart（重试）和 trap（流量触发）
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->set("Action", $action);
    }

    /**
     * Delay: DPD探测间隔时间。dpdEnable为1（开启）时有效。单位为秒，默认为 10
     *
     * @return integer|null
     */
    public function getDelay()
    {
        return $this->get("Delay");
    }

    /**
     * Delay: DPD探测间隔时间。dpdEnable为1（开启）时有效。单位为秒，默认为 10
     *
     * @param int $delay
     */
    public function setDelay($delay)
    {
        $this->set("Delay", $delay);
    }

    /**
     * Timeout: DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。单位为秒。取值范围为 30-60（IKEv2 默认为 0）
     *
     * @return integer|null
     */
    public function getTimeout()
    {
        return $this->get("Timeout");
    }

    /**
     * Timeout: DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。单位为秒。取值范围为 30-60（IKEv2 默认为 0）
     *
     * @param int $timeout
     */
    public function setTimeout($timeout)
    {
        $this->set("Timeout", $timeout);
    }
}
