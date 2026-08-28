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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class UpdateUK8SULSConfigParamInputDetailMetadata extends Request
{
    

    /**
     * Container: 要附加到日志中的容器元数据字段，多个字段使用逗号分隔。可选字段：container_name、namespace、pod_name、pod_ip、pod_uid、container_id、image_name。留空表示不采集容器元数据。
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->get("Container");
    }

    /**
     * Container: 要附加到日志中的容器元数据字段，多个字段使用逗号分隔。可选字段：container_name、namespace、pod_name、pod_ip、pod_uid、container_id、image_name。留空表示不采集容器元数据。
     *
     * @param string $container
     */
    public function setContainer($container)
    {
        $this->set("Container", $container);
    }

    /**
     * Labels: 要采集的Pod标签。*表示采集所有标签，app,version表示仅采集指定标签，空字符串表示不采集标签。
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: 要采集的Pod标签。*表示采集所有标签，app,version表示仅采集指定标签，空字符串表示不采集标签。
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }
}
