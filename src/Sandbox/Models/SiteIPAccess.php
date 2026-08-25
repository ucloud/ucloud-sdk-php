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
namespace UCloud\Sandbox\Models;

use UCloud\Core\Response\Response;

class SiteIPAccess extends Response
{
    

    /**
     * IPList: IP 列表
     *
     * @return string[]|null
     */
    public function getIPList()
    {
        return $this->get("IPList");
    }

    /**
     * IPList: IP 列表
     *
     * @param string[] $ipList
     */
    public function setIPList(array $ipList)
    {
        $this->set("IPList", $ipList);
    }

    /**
     * Mode: IP限制模式"":不限制IP“allow”:自定义白名单“deny”:自定义黑名单
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->get("Mode");
    }

    /**
     * Mode: IP限制模式"":不限制IP“allow”:自定义白名单“deny”:自定义黑名单
     *
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->set("Mode", $mode);
    }
}
