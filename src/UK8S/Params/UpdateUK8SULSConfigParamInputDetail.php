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

class UpdateUK8SULSConfigParamInputDetail extends Request
{
    

    /**
     * Type: 日志输入类型。可选值：container_file、container_stdout。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 日志输入类型。可选值：container_file、container_stdout。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Stream: 容器标准输出流类型。仅适用于container_stdout，可选值：all、stdout、stderr，默认为all。
     *
     * @return string|null
     */
    public function getStream()
    {
        return $this->get("Stream");
    }

    /**
     * Stream: 容器标准输出流类型。仅适用于container_stdout，可选值：all、stdout、stderr，默认为all。
     *
     * @param string $stream
     */
    public function setStream($stream)
    {
        $this->set("Stream", $stream);
    }

    /**
     * Metadata:
     *
     * @return UpdateUK8SULSConfigParamInputDetailMetadata|null
     */
    public function getMetadata()
    {
        return new UpdateUK8SULSConfigParamInputDetailMetadata($this->get("Metadata"));
    }

    /**
     * Metadata:
     *
     * @param UpdateUK8SULSConfigParamInputDetailMetadata $metadata
     */
    public function setMetadata(array $metadata)
    {
        $this->set("Metadata", $metadata->getAll());
    }

    /**
     * FilePaths:
     *
     * @return UpdateUK8SULSConfigParamInputDetailFilePaths[]|null
     */
    public function getFilePaths()
    {
        $items = $this->get("FilePaths");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateUK8SULSConfigParamInputDetailFilePaths($item));
        }
        return $result;
    }

    /**
     * FilePaths:
     *
     * @param UpdateUK8SULSConfigParamInputDetailFilePaths[] $filePaths
     */
    public function setFilePaths(array $filePaths)
    {
        $result = [];
        foreach ($filePaths as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
