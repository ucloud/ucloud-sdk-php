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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class ULSInputMetadata extends Response
{
    

    /**
     * Container: 指定具体要采集元数据的容器名。如果留空，则不采集容器的元数据，可选字段：container_name,namespace,pod_name,pod_ip,pod_uid,container_id,image_name。Pod Label 元数据通过指定 InputDetail.Metadata.Labels 字段。
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->get("Container");
    }

    /**
     * Container: 指定具体要采集元数据的容器名。如果留空，则不采集容器的元数据，可选字段：container_name,namespace,pod_name,pod_ip,pod_uid,container_id,image_name。Pod Label 元数据通过指定 InputDetail.Metadata.Labels 字段。
     *
     * @param string $container
     */
    public function setContainer($container)
    {
        $this->set("Container", $container);
    }

    /**
     * Labels: 定义要采集哪些 Pod 的标签 (Labels)。可选值：*：采集所有标签。app,version：仅采集 app 和 version 这两个标签。""（空字符串）：不采集任何标签。
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->get("Labels");
    }

    /**
     * Labels: 定义要采集哪些 Pod 的标签 (Labels)。可选值：*：采集所有标签。app,version：仅采集 app 和 version 这两个标签。""（空字符串）：不采集任何标签。
     *
     * @param string $labels
     */
    public function setLabels($labels)
    {
        $this->set("Labels", $labels);
    }
}
