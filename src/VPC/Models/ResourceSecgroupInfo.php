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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class ResourceSecgroupInfo extends Response
{
    

    /**
     * ResourceId: 资源ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Count: 资源绑定安全组数量
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 资源绑定安全组数量
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * SecGroupInfo: 详见SecGroupSimpleInfo
     *
     * @return SecGroupSimpleInfo[]|null
     */
    public function getSecGroupInfo()
    {
        $items = $this->get("SecGroupInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SecGroupSimpleInfo($item));
        }
        return $result;
    }

    /**
     * SecGroupInfo: 详见SecGroupSimpleInfo
     *
     * @param SecGroupSimpleInfo[] $secGroupInfo
     */
    public function setSecGroupInfo(array $secGroupInfo)
    {
        $result = [];
        foreach ($secGroupInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
