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

class CreateUK8SULSConfigParamInputDetail extends Request
{
    

    /**
     * Type: 日志输入类型。支持 container_file 和 container_stdout
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 日志输入类型。支持 container_file 和 container_stdout
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Metadata:
     *
     * @return CreateUK8SULSConfigParamInputDetailMetadata|null
     */
    public function getMetadata()
    {
        return new CreateUK8SULSConfigParamInputDetailMetadata($this->get("Metadata"));
    }

    /**
     * Metadata:
     *
     * @param CreateUK8SULSConfigParamInputDetailMetadata $metadata
     */
    public function setMetadata(array $metadata)
    {
        $this->set("Metadata", $metadata->getAll());
    }

    /**
     * FilePaths:
     *
     * @return CreateUK8SULSConfigParamInputDetailFilePaths[]|null
     */
    public function getFilePaths()
    {
        $items = $this->get("FilePaths");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUK8SULSConfigParamInputDetailFilePaths($item));
        }
        return $result;
    }

    /**
     * FilePaths:
     *
     * @param CreateUK8SULSConfigParamInputDetailFilePaths[] $filePaths
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
     * Stream: all、stdout、stderr，默认 all (用于 InputDetail.Type = container_stdout)
     *
     * @return string|null
     */
    public function getStream()
    {
        return $this->get("Stream");
    }

    /**
     * Stream: all、stdout、stderr，默认 all (用于 InputDetail.Type = container_stdout)
     *
     * @param string $stream
     */
    public function setStream($stream)
    {
        $this->set("Stream", $stream);
    }
}
