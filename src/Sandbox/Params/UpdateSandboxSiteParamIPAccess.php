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
namespace UCloud\Sandbox\Params;

use UCloud\Core\Request\Request;

class UpdateSandboxSiteParamIPAccess extends Request
{
    

    /**
     * IPList: 访问限制IP，格式["192.168.1.2","192.168.1.3"]
     *
     * @return string|null
     */
    public function getIPList()
    {
        return $this->get("IPList");
    }

    /**
     * IPList: 访问限制IP，格式["192.168.1.2","192.168.1.3"]
     *
     * @param string $ipList
     */
    public function setIPList($ipList)
    {
        $this->set("IPList", $ipList);
    }

    /**
     * Mode: 访问模式，- ""：无IP限制- "allow":白名单模式- "deny":黑名单
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->get("Mode");
    }

    /**
     * Mode: 访问模式，- ""：无IP限制- "allow":白名单模式- "deny":黑名单
     *
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->set("Mode", $mode);
    }
}
