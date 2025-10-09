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

class BackendMsg extends Response
{
    

    /**
     * BackendId: rs的资源ID
     *
     * @return string|null
     */
    public function getBackendId()
    {
        return $this->get("BackendId");
    }

    /**
     * BackendId: rs的资源ID
     *
     * @param string $backendId
     */
    public function setBackendId($backendId)
    {
        $this->set("BackendId", $backendId);
    }

    /**
     * SubMessage: 修改rs返回的消息
     *
     * @return string|null
     */
    public function getSubMessage()
    {
        return $this->get("SubMessage");
    }

    /**
     * SubMessage: 修改rs返回的消息
     *
     * @param string $subMessage
     */
    public function setSubMessage($subMessage)
    {
        $this->set("SubMessage", $subMessage);
    }

    /**
     * SubRetCode: 修改rs的返回值
     *
     * @return integer|null
     */
    public function getSubRetCode()
    {
        return $this->get("SubRetCode");
    }

    /**
     * SubRetCode: 修改rs的返回值
     *
     * @param int $subRetCode
     */
    public function setSubRetCode($subRetCode)
    {
        $this->set("SubRetCode", $subRetCode);
    }
}
