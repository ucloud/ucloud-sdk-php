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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDB\Models\ExternalInfo;
use UCloud\UDB\Models\PrivateInfo;

class GetUDBAccessInfoResponse extends Response
{
    

    /**
     * ExternalInfo: 实例外网访问信息，含状态、地址、端口、带宽与白名单
     *
     * @return ExternalInfo[]|null
     */
    public function getExternalInfo()
    {
        $items = $this->get("ExternalInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ExternalInfo($item));
        }
        return $result;
    }

    /**
     * ExternalInfo: 实例外网访问信息，含状态、地址、端口、带宽与白名单
     *
     * @param ExternalInfo[] $externalInfo
     */
    public function setExternalInfo(array $externalInfo)
    {
        $result = [];
        foreach ($externalInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PrivateInfo: 实例内网访问信息，含 VPC、子网、内网 IP、内网域名与端口
     *
     * @return PrivateInfo[]|null
     */
    public function getPrivateInfo()
    {
        $items = $this->get("PrivateInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PrivateInfo($item));
        }
        return $result;
    }

    /**
     * PrivateInfo: 实例内网访问信息，含 VPC、子网、内网 IP、内网域名与端口
     *
     * @param PrivateInfo[] $privateInfo
     */
    public function setPrivateInfo(array $privateInfo)
    {
        $result = [];
        foreach ($privateInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
