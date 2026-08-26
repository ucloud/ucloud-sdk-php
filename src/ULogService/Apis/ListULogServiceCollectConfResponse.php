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
namespace UCloud\ULogService\Apis;

use UCloud\Core\Response\Response;
use UCloud\ULogService\Models\CollectConf;
use UCloud\ULogService\Models\MachineGroup;
use UCloud\ULogService\Models\FilePath;

class ListULogServiceCollectConfResponse extends Response
{
    

    /**
     * CollectConfs: 日志采集配置列表
     *
     * @return CollectConf|null
     */
    public function getCollectConfs()
    {
        return new CollectConf($this->get("CollectConfs"));
    }

    /**
     * CollectConfs: 日志采集配置列表
     *
     * @param CollectConf $collectConfs
     */
    public function setCollectConfs(array $collectConfs)
    {
        $this->set("CollectConfs", $collectConfs->getAll());
    }
}
