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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class ResizeUDRedisBlockSizeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ResizeUDRedisBlockSize"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("SpaceId");
        $this->markRequired("BlockId");
        $this->markRequired("BlockSize");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SpaceId: spaceid
     *
     * @return string|null
     */
    public function getSpaceId()
    {
        return $this->get("SpaceId");
    }

    /**
     * SpaceId: spaceid
     *
     * @param string $spaceId
     */
    public function setSpaceId($spaceId)
    {
        $this->set("SpaceId", $spaceId);
    }

    /**
     * BlockId: 分片id
     *
     * @return string|null
     */
    public function getBlockId()
    {
        return $this->get("BlockId");
    }

    /**
     * BlockId: 分片id
     *
     * @param string $blockId
     */
    public function setBlockId($blockId)
    {
        $this->set("BlockId", $blockId);
    }

    /**
     * BlockSize: 分片容量（单位GB）4/8/12/16/20
     *
     * @return integer|null
     */
    public function getBlockSize()
    {
        return $this->get("BlockSize");
    }

    /**
     * BlockSize: 分片容量（单位GB）4/8/12/16/20
     *
     * @param int $blockSize
     */
    public function setBlockSize($blockSize)
    {
        $this->set("BlockSize", $blockSize);
    }

    /**
     * StartTime: 任务执行时间戳，时间戳需满足未来一天时间范围内。默认不传或者值为0时，即为立即执行
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 任务执行时间戳，时间戳需满足未来一天时间范围内。默认不传或者值为0时，即为立即执行
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * HighPerformance: 是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *
     * @return boolean|null
     */
    public function getHighPerformance()
    {
        return $this->get("HighPerformance");
    }

    /**
     * HighPerformance: 是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *
     * @param boolean $highPerformance
     */
    public function setHighPerformance($highPerformance)
    {
        $this->set("HighPerformance", $highPerformance);
    }
}
