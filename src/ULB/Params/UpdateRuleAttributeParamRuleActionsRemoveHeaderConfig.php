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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateRuleAttributeParamRuleActionsRemoveHeaderConfig extends Request
{
    

    /**
     * Key: 删除的 header 字段名称，目前只能删除以下几个默认配置的字段X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 删除的 header 字段名称，目前只能删除以下几个默认配置的字段X-Real-IP、X-Forwarded-For、X-Forwarded-Proto、X-Forwarded-SrcPort
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->set("Key", $key);
    }
}
