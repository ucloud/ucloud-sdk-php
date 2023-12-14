<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
use UCloud\USMS\Models\OutTemplate;

class QueryUSMSTemplateResponse extends Response
{
    

    /**
     * Data: 短信模板明细信息，各字段说明详见OutTemplate
     *
     * @return OutTemplate|null
     */
    public function getData()
    {
        return new OutTemplate($this->get("Data"));
    }

    /**
     * Data: 短信模板明细信息，各字段说明详见OutTemplate
     *
     * @param OutTemplate $data
     */
    public function setData(array $data)
    {
        $this->set("Data", $data->getAll());
    }
}
