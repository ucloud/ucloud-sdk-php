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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Response\Response;

class CreateCPEResponse extends Response
{
    

    /**
     * CPEId: cpe id
     *
     * @return string|null
     */
    public function getCPEId()
    {
        return $this->get("CPEId");
    }

    /**
     * CPEId: cpe id
     *
     * @param string $cpeId
     */
    public function setCPEId($cpeId)
    {
        $this->set("CPEId", $cpeId);
    }
}
