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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class DPDConf extends Response
{
    

    /**
     * Enabled: 是否开启 DPD
     *
     * @return integer|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否开启 DPD
     *
     * @param int $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Action: DPD 行为
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->get("Action");
    }

    /**
     * Action: DPD 行为
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->set("Action", $action);
    }

    /**
     * Delay: DPD 探测间隔时间
     *
     * @return integer|null
     */
    public function getDelay()
    {
        return $this->get("Delay");
    }

    /**
     * Delay: DPD 探测间隔时间
     *
     * @param int $delay
     */
    public function setDelay($delay)
    {
        $this->set("Delay", $delay);
    }

    /**
     * Timeout: DPD 探测超时时间
     *
     * @return integer|null
     */
    public function getTimeout()
    {
        return $this->get("Timeout");
    }

    /**
     * Timeout: DPD 探测超时时间
     *
     * @param int $timeout
     */
    public function setTimeout($timeout)
    {
        $this->set("Timeout", $timeout);
    }
}
