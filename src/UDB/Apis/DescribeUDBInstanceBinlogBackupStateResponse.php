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

class DescribeUDBInstanceBinlogBackupStateResponse extends Response
{
    

    /**
     * State: 备份状态 0 Backuping // 备份中 1 Success // 备份成功 2 Failed // 备份失败 3 Expired // 备份过期
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 备份状态 0 Backuping // 备份中 1 Success // 备份成功 2 Failed // 备份失败 3 Expired // 备份过期
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }


}
