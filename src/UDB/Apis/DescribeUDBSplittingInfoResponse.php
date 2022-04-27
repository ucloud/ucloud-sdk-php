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

use UCloud\Core\Response\Response;
use UCloud\UDB\Models\UDBRWSplittingSet;

class DescribeUDBSplittingInfoResponse extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * MasterDBId: DB实例ID
     *
     * @return string|null
     */
    public function getMasterDBId(): string
    {
        return $this->get("MasterDBId");
    }

    /**
     * MasterDBId: DB实例ID
     *
     * @param string $masterDBId
     */
    public function setMasterDBId(string $masterDBId)
    {
        $this->set("MasterDBId", $masterDBId);
    }

    /**
     * RWIP: 读写分离IP
     *
     * @return string|null
     */
    public function getRWIP(): string
    {
        return $this->get("RWIP");
    }

    /**
     * RWIP: 读写分离IP
     *
     * @param string $rwip
     */
    public function setRWIP(string $rwip)
    {
        $this->set("RWIP", $rwip);
    }

    /**
     * DelayThreshold: 时间阈值
     *
     * @return integer|null
     */
    public function getDelayThreshold(): int
    {
        return $this->get("DelayThreshold");
    }

    /**
     * DelayThreshold: 时间阈值
     *
     * @param int $delayThreshold
     */
    public function setDelayThreshold(int $delayThreshold)
    {
        $this->set("DelayThreshold", $delayThreshold);
    }

    /**
     * Port: 端口号
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 端口号
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * ReadModel: 读写分离策略
     *
     * @return string|null
     */
    public function getReadModel(): string
    {
        return $this->get("ReadModel");
    }

    /**
     * ReadModel: 读写分离策略
     *
     * @param string $readModel
     */
    public function setReadModel(string $readModel)
    {
        $this->set("ReadModel", $readModel);
    }

    /**
     * DBTypeId: 数据库版本
     *
     * @return string|null
     */
    public function getDBTypeId(): string
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: 数据库版本
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId(string $dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * RWState: 读写分离状态
     *
     * @return string|null
     */
    public function getRWState(): string
    {
        return $this->get("RWState");
    }

    /**
     * RWState: 读写分离状态
     *
     * @param string $rwState
     */
    public function setRWState(string $rwState)
    {
        $this->set("RWState", $rwState);
    }

    /**
     * DataSet: 读写分离从库信息
     *
     * @return UDBRWSplittingSet[]|null
     */
    public function getDataSet(): array
    {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UDBRWSplittingSet($item));
        }
        return $result;
    }

    /**
     * DataSet: 读写分离从库信息
     *
     * @param UDBRWSplittingSet[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
