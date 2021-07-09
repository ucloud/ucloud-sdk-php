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
namespace UCloud\USMS\Apis;

use UCloud\Core\Response\Response;

class CreateUSMSTemplateResponse extends Response {
    

    /**
     * TemplateId: 短信模板ID（短信模板申请时的工单ID）
     *
     * @return string|null
     */
    public function getTemplateId(): string {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 短信模板ID（短信模板申请时的工单ID）
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId) {
        $this->set("TemplateId", $templateId);
    }


}
