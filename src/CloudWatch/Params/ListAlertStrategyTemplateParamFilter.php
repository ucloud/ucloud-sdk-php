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
namespace UCloud\CloudWatch\Params;

use UCloud\Core\Request\Request;

class ListAlertStrategyTemplateParamFilter extends Request
{
    

    /**
     * TemplateIDs: 模板id集合，根据模板id获取告警条件模板列表
     *
     * @return int[]|null
     */
    public function getTemplateIDs()
    {
        return $this->get("TemplateIDs");
    }

    /**
     * TemplateIDs: 模板id集合，根据模板id获取告警条件模板列表
     *
     * @param int[] $templateIDs
     */
    public function setTemplateIDs(array $templateIDs)
    {
        $this->set("TemplateIDs", $templateIDs);
    }
}
