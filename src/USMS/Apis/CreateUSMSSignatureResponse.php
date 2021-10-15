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

class CreateUSMSSignatureResponse extends Response
{
    

    /**
     * SigId: 短信签名ID（短信签名申请时的工单ID）
     *
     * @return string|null
     */
    public function getSigId()
    {
        return $this->get("SigId");
    }

    /**
     * SigId: 短信签名ID（短信签名申请时的工单ID）
     *
     * @param string $sigId
     */
    public function setSigId($sigId)
    {
        $this->set("SigId", $sigId);
    }
}
