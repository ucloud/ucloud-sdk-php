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
namespace UCloud\UMongoDB\Apis;

use UCloud\Core\Response\Response;
use UCloud\UMongoDB\Models\ClusterInfo;
use UCloud\UMongoDB\Models\ReplicaInfo;
use UCloud\UMongoDB\Models\NodeInfo;
use UCloud\UMongoDB\Models\DiskInfo;
use UCloud\UMongoDB\Models\DiskInfo;
use UCloud\UMongoDB\Models\ReplicaInfo;
use UCloud\UMongoDB\Models\NodeInfo;
use UCloud\UMongoDB\Models\DiskInfo;
use UCloud\UMongoDB\Models\DiskInfo;
use UCloud\UMongoDB\Models\NodeInfo;
use UCloud\UMongoDB\Models\DiskInfo;
use UCloud\UMongoDB\Models\DiskInfo;
use UCloud\UMongoDB\Models\MongodbMachineType;
use UCloud\UMongoDB\Models\MongodbMachineType;
use UCloud\UMongoDB\Models\MongodbMachineType;

class DescribeUMongoDBInstanceResponse extends Response
{
    

    /**
     * ClusterInfo: 副本集信息
     *
     * @return ClusterInfo|null
     */
    public function getClusterInfo()
    {
        return new ClusterInfo($this->get("ClusterInfo"));
    }

    /**
     * ClusterInfo: 副本集信息
     *
     * @param ClusterInfo $clusterInfo
     */
    public function setClusterInfo(array $clusterInfo)
    {
        $this->set("ClusterInfo", $clusterInfo->getAll());
    }
}
