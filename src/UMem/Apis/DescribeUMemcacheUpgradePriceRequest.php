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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class DescribeUMemcacheUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUMemcacheUpgradePrice"]);
        $this->markRequired("Size");
        $this->markRequired("GroupId");
    }

    

    /**
     * Size: 购买umemcache大小,单位:GB
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 购买umemcache大小,单位:GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * GroupId: 需要升级的空间的GroupId,请参考DescribeUMemcacheGroup接口
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 需要升级的空间的GroupId,请参考DescribeUMemcacheGroup接口
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }


}
