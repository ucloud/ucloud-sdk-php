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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class PathXUGAInfo extends Response
{
    

    /**
     * UGAId: 加速配置ID
     *
     * @return string|null
     */
    public function getUGAId(): string
    {
        return $this->get("UGAId");
    }

    /**
     * UGAId: 加速配置ID
     *
     * @param string $ugaId
     */
    public function setUGAId(string $ugaId)
    {
        $this->set("UGAId", $ugaId);
    }

    /**
     * IPList: 源站IP列表，多个值由半角英文逗号相隔
     *
     * @return string[]|null
     */
    public function getIPList(): array
    {
        return $this->get("IPList");
    }

    /**
     * IPList: 源站IP列表，多个值由半角英文逗号相隔
     *
     * @param string[] $ipList
     */
    public function setIPList(array $ipList)
    {
        $this->set("IPList", $ipList);
    }

    /**
     * Domain: 源站域名
     *
     * @return string|null
     */
    public function getDomain(): string
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 源站域名
     *
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->set("Domain", $domain);
    }
}
