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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class UGAL4Forwarder extends Response
{
    

    /**
     * Port: 接入端口
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 接入端口
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * Protocol: 转发协议，枚举值["TCP"，"UDP"，"HTTPHTTP"，"HTTPSHTTP"，"HTTPSHTTPS"]。TCP和UDP代表四层转发，其余为七层转发
     *
     * @return string|null
     */
    public function getProtocol(): string
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 转发协议，枚举值["TCP"，"UDP"，"HTTPHTTP"，"HTTPSHTTP"，"HTTPSHTTPS"]。TCP和UDP代表四层转发，其余为七层转发
     *
     * @param string $protocol
     */
    public function setProtocol(string $protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * RSPort: RSPort，源站监听端口
     *
     * @return integer|null
     */
    public function getRSPort(): int
    {
        return $this->get("RSPort");
    }

    /**
     * RSPort: RSPort，源站监听端口
     *
     * @param int $rsPort
     */
    public function setRSPort(int $rsPort)
    {
        $this->set("RSPort", $rsPort);
    }
}
