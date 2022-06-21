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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class SetUDBRWSplittingRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SetUDBRWSplitting"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("MasterDBId");
        $this->markRequired("ReadModel");
        $this->markRequired("DBIds");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * MasterDBId: DB实例ID（master)
     *
     * @return string|null
     */
    public function getMasterDBId()
    {
        return $this->get("MasterDBId");
    }

    /**
     * MasterDBId: DB实例ID（master)
     *
     * @param string $masterDBId
     */
    public function setMasterDBId($masterDBId)
    {
        $this->set("MasterDBId", $masterDBId);
    }

    /**
     * ReadModel: 读写分离策略
     *
     * @return string|null
     */
    public function getReadModel()
    {
        return $this->get("ReadModel");
    }

    /**
     * ReadModel: 读写分离策略
     *
     * @param string $readModel
     */
    public function setReadModel($readModel)
    {
        $this->set("ReadModel", $readModel);
    }

    /**
     * DBIds: DBIds.0 代表UDB主节点， DBIds.1 到DBIds.n 代表1到N个从节点
     *
     * @return string[]|null
     */
    public function getDBIds()
    {
        return $this->get("DBIds");
    }

    /**
     * DBIds: DBIds.0 代表UDB主节点， DBIds.1 到DBIds.n 代表1到N个从节点
     *
     * @param string[] $dbIds
     */
    public function setDBIds(array $dbIds)
    {
        $this->set("DBIds", $dbIds);
    }

    /**
     * ReadPercents: udb主从节点的只读比例。ReadPercents.0代表主节点的只读比例，ReadPercents.1代表从节点1的读写比例， 以此类推
     *
     * @return string[]|null
     */
    public function getReadPercents()
    {
        return $this->get("ReadPercents");
    }

    /**
     * ReadPercents: udb主从节点的只读比例。ReadPercents.0代表主节点的只读比例，ReadPercents.1代表从节点1的读写比例， 以此类推
     *
     * @param string[] $readPercents
     */
    public function setReadPercents(array $readPercents)
    {
        $this->set("ReadPercents", $readPercents);
    }

    /**
     * DelayThreshold: 时间阙值
     *
     * @return int|null
     */
    public function getDelayThreshold()
    {
        return $this->get("DelayThreshold");
    }

    /**
     * DelayThreshold: 时间阙值
     *
     * @param int $delayThreshold
     */
    public function setDelayThreshold($delayThreshold)
    {
        $this->set("DelayThreshold", $delayThreshold);
    }


}
