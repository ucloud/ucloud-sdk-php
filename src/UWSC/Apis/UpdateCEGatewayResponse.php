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

class UpdateCEGatewayResponse extends Response
{
    

    /**
     * RequestId: 请求 ID
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->get("RequestId");
    }

    /**
     * RequestId: 请求 ID
     *
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->set("RequestId", $requestId);
    }
}
