<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;

class LoginUEcDockerResponse extends Response
{
    

    /**
     * SessionId: 返回的token
     *
     * @return string|null
     */
    public function getSessionId(): string
    {
        return $this->get("SessionId");
    }

    /**
     * SessionId: 返回的token
     *
     * @param string $sessionId
     */
    public function setSessionId(string $sessionId)
    {
        $this->set("SessionId", $sessionId);
    }

    /**
     * Link: 登录地址
     *
     * @return string|null
     */
    public function getLink(): string
    {
        return $this->get("Link");
    }

    /**
     * Link: 登录地址
     *
     * @param string $link
     */
    public function setLink(string $link)
    {
        $this->set("Link", $link);
    }

    /**
     * LinkPort: 登录端口
     *
     * @return integer|null
     */
    public function getLinkPort(): int
    {
        return $this->get("LinkPort");
    }

    /**
     * LinkPort: 登录端口
     *
     * @param int $linkPort
     */
    public function setLinkPort(int $linkPort)
    {
        $this->set("LinkPort", $linkPort);
    }
}
