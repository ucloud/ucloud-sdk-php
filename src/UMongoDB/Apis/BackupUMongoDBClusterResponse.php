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

class BackupUMongoDBClusterResponse extends Response
{
    

    /**
     * BackupId: 备份ID
     *
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份ID
     *
     * @param string $backupId
     */
    public function setBackupId($backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * ClusterId: 实例ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 实例ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }
}
