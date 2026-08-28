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

class ULSInputDetail extends Response
{
    

    /**
     * FilePaths: 采集路径，数组。
     *
     * @return ULSFilePaths[]|null
     */
    public function getFilePaths()
    {
        $items = $this->get("FilePaths");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ULSFilePaths($item));
        }
        return $result;
    }

    /**
     * FilePaths: 采集路径，数组。
     *
     * @param ULSFilePaths[] $filePaths
     */
    public function setFilePaths(array $filePaths)
    {
        $result = [];
        foreach ($filePaths as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Type: 日志输入类型。当前主要支持 container_file，表示采集容器标准输出或文件。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 日志输入类型。当前主要支持 container_file，表示采集容器标准输出或文件。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * InputMetadata: 定义哪些容器相关的元数据需要附加到日志中。
     *
     * @return ULSInputMetadata|null
     */
    public function getInputMetadata()
    {
        return new ULSInputMetadata($this->get("InputMetadata"));
    }

    /**
     * InputMetadata: 定义哪些容器相关的元数据需要附加到日志中。
     *
     * @param ULSInputMetadata $inputMetadata
     */
    public function setInputMetadata(array $inputMetadata)
    {
        $this->set("InputMetadata", $inputMetadata->getAll());
    }
}
