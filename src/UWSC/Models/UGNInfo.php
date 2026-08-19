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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class UGNInfo extends Response
{
    

    /**
     * UGNId: 云联网 ID
     *
     * @return string|null
     */
    public function getUGNId()
    {
        return $this->get("UGNId");
    }

    /**
     * UGNId: 云联网 ID
     *
     * @param string $ugnId
     */
    public function setUGNId($ugnId)
    {
        $this->set("UGNId", $ugnId);
    }

    /**
     * UGNName: 云联网名称
     *
     * @return string|null
     */
    public function getUGNName()
    {
        return $this->get("UGNName");
    }

    /**
     * UGNName: 云联网名称
     *
     * @param string $ugnName
     */
    public function setUGNName($ugnName)
    {
        $this->set("UGNName", $ugnName);
    }

    /**
     * UGNBWInfos: UGN 带宽包信息
     *
     * @return UGNBWInfo[]|null
     */
    public function getUGNBWInfos()
    {
        $items = $this->get("UGNBWInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGNBWInfo($item));
        }
        return $result;
    }

    /**
     * UGNBWInfos: UGN 带宽包信息
     *
     * @param UGNBWInfo[] $ugnbwInfos
     */
    public function setUGNBWInfos(array $ugnbwInfos)
    {
        $result = [];
        foreach ($ugnbwInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
