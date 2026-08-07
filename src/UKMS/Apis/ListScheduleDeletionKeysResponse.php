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
namespace UCloud\UKMS\Apis;

use UCloud\Core\Response\Response;
use UCloud\UKMS\Models\CMK;

class ListScheduleDeletionKeysResponse extends Response
{
    

    /**
     * Objects: 主密钥信息组成的列表
     *
     * @return CMK[]|null
     */
    public function getObjects()
    {
        $items = $this->get("Objects");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CMK($item));
        }
        return $result;
    }

    /**
     * Objects: 主密钥信息组成的列表
     *
     * @param CMK[] $objects
     */
    public function setObjects(array $objects)
    {
        $result = [];
        foreach ($objects as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Status: 操作结果
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 操作结果
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * RequestUuid: 请求唯一标识符
     *
     * @return string|null
     */
    public function getRequestUuid()
    {
        return $this->get("RequestUuid");
    }

    /**
     * RequestUuid: 请求唯一标识符
     *
     * @param string $requestUuid
     */
    public function setRequestUuid($requestUuid)
    {
        $this->set("RequestUuid", $requestUuid);
    }

    /**
     * TotalCount: 符合条件的总数, 不同于Limit
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 符合条件的总数, 不同于Limit
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
