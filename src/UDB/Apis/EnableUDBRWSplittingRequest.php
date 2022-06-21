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

class EnableUDBRWSplittingRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "EnableUDBRWSplitting"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("MasterDBId");
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
     * MasterDBId: DB实例ID（主库）
     *
     * @return string|null
     */
    public function getMasterDBId()
    {
        return $this->get("MasterDBId");
    }

    /**
     * MasterDBId: DB实例ID（主库）
     *
     * @param string $masterDBId
     */
    public function setMasterDBId($masterDBId)
    {
        $this->set("MasterDBId", $masterDBId);
    }

    /**
     * BackupZone: 备份的可用区。用于创建跨可用区读写分离的一个节点，跨机房的读写分离必须有这个参数
     *
     * @return string|null
     */
    public function getBackupZone()
    {
        return $this->get("BackupZone");
    }

    /**
     * BackupZone: 备份的可用区。用于创建跨可用区读写分离的一个节点，跨机房的读写分离必须有这个参数
     *
     * @param string $backupZone
     */
    public function setBackupZone($backupZone)
    {
        $this->set("BackupZone", $backupZone);
    }


}
