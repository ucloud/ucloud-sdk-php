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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class ProxyClientList extends Response
{
    

    /**
     * Ip: 客户端Ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip: 客户端Ip
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->set("Ip", $ip);
    }

    /**
     * ConnCnt: 该客户端Ip连接数量
     *
     * @return integer|null
     */
    public function getConnCnt()
    {
        return $this->get("ConnCnt");
    }

    /**
     * ConnCnt: 该客户端Ip连接数量
     *
     * @param int $connCnt
     */
    public function setConnCnt($connCnt)
    {
        $this->set("ConnCnt", $connCnt);
    }
}
