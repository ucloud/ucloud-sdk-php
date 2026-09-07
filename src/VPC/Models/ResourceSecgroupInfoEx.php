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

class ResourceSecgroupInfoEx extends Response
{
    

    /**
     * ResourceId: 资源 ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源 ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceName: 资源名称
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName($resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * Count: 该资源绑定的安全组数量
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 该资源绑定的安全组数量
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * SecGroupInfo: 绑定安全组信息
     *
     * @return BindingSecGroupInfo[]|null
     */
    public function getSecGroupInfo()
    {
        $items = $this->get("SecGroupInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BindingSecGroupInfo($item));
        }
        return $result;
    }

    /**
     * SecGroupInfo: 绑定安全组信息
     *
     * @param BindingSecGroupInfo[] $secGroupInfo
     */
    public function setSecGroupInfo(array $secGroupInfo)
    {
        $result = [];
        foreach ($secGroupInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PermitAssociate: 表示是否允许绑定安全组
     *
     * @return boolean|null
     */
    public function getPermitAssociate()
    {
        return $this->get("PermitAssociate");
    }

    /**
     * PermitAssociate: 表示是否允许绑定安全组
     *
     * @param boolean $permitAssociate
     */
    public function setPermitAssociate($permitAssociate)
    {
        $this->set("PermitAssociate", $permitAssociate);
    }

    /**
     * ExInfo: 资源额外信息
     *
     * @return ResourceExInfo|null
     */
    public function getExInfo()
    {
        return new ResourceExInfo($this->get("ExInfo"));
    }

    /**
     * ExInfo: 资源额外信息
     *
     * @param ResourceExInfo $exInfo
     */
    public function setExInfo(array $exInfo)
    {
        $this->set("ExInfo", $exInfo->getAll());
    }
}
