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
namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;

class CreateUGAInstanceResponse extends Response
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
     * CName: 加速域名 用户可把业务域名CName到此域名上。注意：未绑定线路情况时 加速域名解析不出IP。
     *
     * @return string|null
     */
    public function getCName(): string
    {
        return $this->get("CName");
    }

    /**
     * CName: 加速域名 用户可把业务域名CName到此域名上。注意：未绑定线路情况时 加速域名解析不出IP。
     *
     * @param string $cName
     */
    public function setCName(string $cName)
    {
        $this->set("CName", $cName);
    }
}
