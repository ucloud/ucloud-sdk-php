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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class StickinessConfigSet extends Response
{
    

    /**
     * Enabled: 是否开启会话保持功能。应用型负载均衡实例基于Cookie实现
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否开启会话保持功能。应用型负载均衡实例基于Cookie实现
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Type: （应用型专用）Cookie处理方式。限定枚举值： ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: （应用型专用）Cookie处理方式。限定枚举值： ServerInsert -> 自动生成KEY；UserDefined -> 用户自定义KEY
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * CookieName: （应用型专用）自定义Cookie。当StickinessType取值"UserDefined"时有效
     *
     * @return string|null
     */
    public function getCookieName()
    {
        return $this->get("CookieName");
    }

    /**
     * CookieName: （应用型专用）自定义Cookie。当StickinessType取值"UserDefined"时有效
     *
     * @param string $cookieName
     */
    public function setCookieName($cookieName)
    {
        $this->set("CookieName", $cookieName);
    }
}
