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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class ExtractUDBParamGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ExtractUDBParamGroup"]);
        $this->markRequired("Region");
        $this->markRequired("GroupId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。如果RegionFlag=false，必须传，反之，可不传。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。如果RegionFlag=false，必须传，反之，可不传。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * GroupId: 配置id
     *
     * @return integer|null
     */
    public function getGroupId(): int
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 配置id
     *
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * RegionFlag: 是否跨可用区，RegionFlag为true时表示跨可用区配置文件。如果RegionFlag=true，Zone可以不传，否则Zone必须传。
     *
     * @return boolean|null
     */
    public function getRegionFlag(): bool
    {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 是否跨可用区，RegionFlag为true时表示跨可用区配置文件。如果RegionFlag=true，Zone可以不传，否则Zone必须传。
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag(bool $regionFlag)
    {
        $this->set("RegionFlag", $regionFlag);
    }
}
