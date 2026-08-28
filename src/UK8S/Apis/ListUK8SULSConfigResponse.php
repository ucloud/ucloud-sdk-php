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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\ULSLogConfig;
use UCloud\UK8S\Models\ULSExtractRule;
use UCloud\UK8S\Models\ULSInputDetail;
use UCloud\UK8S\Models\ULSFilePaths;
use UCloud\UK8S\Models\ULSInputMetadata;
use UCloud\UK8S\Models\ULSMatchRule;
use UCloud\UK8S\Models\ULSWorkloadMatch;
use UCloud\UK8S\Models\ULSPodLabelsMatch;
use UCloud\UK8S\Models\ULSLabels;

class ListUK8SULSConfigResponse extends Response
{
    

    /**
     * LogConfig: 日志服务配置,见 ClusterLogConfig
     *
     * @return ULSLogConfig[]|null
     */
    public function getLogConfig()
    {
        $items = $this->get("LogConfig");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULSLogConfig($item));
        }
        return $result;
    }

    /**
     * LogConfig: 日志服务配置,见 ClusterLogConfig
     *
     * @param ULSLogConfig[] $logConfig
     */
    public function setLogConfig(array $logConfig)
    {
        $result = [];
        foreach ($logConfig as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
