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

class RegisterUMemDefragRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RegisterUMemDefrag"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ResourceId");
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
     * StartTime: 开始时间戳
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 开始时间戳
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 关闭时间戳
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 关闭时间戳
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * OperateType: 操作类型：“Once”： 表示单次执行， “Open”：表示开启策略“Close”:  表示关闭策略（分布式实例只支持Once）。
     *
     * @return string|null
     */
    public function getOperateType()
    {
        return $this->get("OperateType");
    }

    /**
     * OperateType: 操作类型：“Once”： 表示单次执行， “Open”：表示开启策略“Close”:  表示关闭策略（分布式实例只支持Once）。
     *
     * @param string $operateType
     */
    public function setOperateType($operateType)
    {
        $this->set("OperateType", $operateType);
    }

    /**
     * FragTime: 任务时间周期，单位为分钟。
     *
     * @return integer|null
     */
    public function getFragTime()
    {
        return $this->get("FragTime");
    }

    /**
     * FragTime: 任务时间周期，单位为分钟。
     *
     * @param int $fragTime
     */
    public function setFragTime($fragTime)
    {
        $this->set("FragTime", $fragTime);
    }

    /**
     * FragSize: 碎片整理阈值，范围为 100-200（分布式实例该参数无效）。
     *
     * @return integer|null
     */
    public function getFragSize()
    {
        return $this->get("FragSize");
    }

    /**
     * FragSize: 碎片整理阈值，范围为 100-200（分布式实例该参数无效）。
     *
     * @param int $fragSize
     */
    public function setFragSize($fragSize)
    {
        $this->set("FragSize", $fragSize);
    }

    /**
     * StartHour: 开始整点数值（分布式实例该参数无效）。
     *
     * @return integer|null
     */
    public function getStartHour()
    {
        return $this->get("StartHour");
    }

    /**
     * StartHour: 开始整点数值（分布式实例该参数无效）。
     *
     * @param int $startHour
     */
    public function setStartHour($startHour)
    {
        $this->set("StartHour", $startHour);
    }

    /**
     * StartMin: 开始分钟数（分布式实例该参数无效）。
     *
     * @return integer|null
     */
    public function getStartMin()
    {
        return $this->get("StartMin");
    }

    /**
     * StartMin: 开始分钟数（分布式实例该参数无效）。
     *
     * @param int $startMin
     */
    public function setStartMin($startMin)
    {
        $this->set("StartMin", $startMin);
    }

    /**
     * EndHour: 结束整点数值（分布式实例该参数无效）。
     *
     * @return integer|null
     */
    public function getEndHour()
    {
        return $this->get("EndHour");
    }

    /**
     * EndHour: 结束整点数值（分布式实例该参数无效）。
     *
     * @param int $endHour
     */
    public function setEndHour($endHour)
    {
        $this->set("EndHour", $endHour);
    }

    /**
     * EndMin: 结束分钟数（分布式实例该参数无效）。
     *
     * @return integer|null
     */
    public function getEndMin()
    {
        return $this->get("EndMin");
    }

    /**
     * EndMin: 结束分钟数（分布式实例该参数无效）。
     *
     * @param int $endMin
     */
    public function setEndMin($endMin)
    {
        $this->set("EndMin", $endMin);
    }

    /**
     * IsUnion: AND逻辑字段，表示 阈值和时间段都满足（分布式实例该参数无效）。
     *
     * @return boolean|null
     */
    public function getIsUnion()
    {
        return $this->get("IsUnion");
    }

    /**
     * IsUnion: AND逻辑字段，表示 阈值和时间段都满足（分布式实例该参数无效）。
     *
     * @param boolean $isUnion
     */
    public function setIsUnion($isUnion)
    {
        $this->set("IsUnion", $isUnion);
    }
}
