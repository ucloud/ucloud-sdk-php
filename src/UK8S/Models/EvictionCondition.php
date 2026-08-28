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

class EvictionCondition extends Response
{
    

    /**
     * MemoryAvailable: 内存相关驱逐条件或宽限时间。
     *
     * @return string|null
     */
    public function getMemoryAvailable()
    {
        return $this->get("MemoryAvailable");
    }

    /**
     * MemoryAvailable: 内存相关驱逐条件或宽限时间。
     *
     * @param string $memoryAvailable
     */
    public function setMemoryAvailable($memoryAvailable)
    {
        $this->set("MemoryAvailable", $memoryAvailable);
    }

    /**
     * ImagefsAvailable: 镜像文件系统存储相关驱逐条件或宽限时间。
     *
     * @return string|null
     */
    public function getImagefsAvailable()
    {
        return $this->get("ImagefsAvailable");
    }

    /**
     * ImagefsAvailable: 镜像文件系统存储相关驱逐条件或宽限时间。
     *
     * @param string $imagefsAvailable
     */
    public function setImagefsAvailable($imagefsAvailable)
    {
        $this->set("ImagefsAvailable", $imagefsAvailable);
    }

    /**
     * NodefsAvailable: 节点存储余量相关驱逐条件或宽限时间。
     *
     * @return string|null
     */
    public function getNodefsAvailable()
    {
        return $this->get("NodefsAvailable");
    }

    /**
     * NodefsAvailable: 节点存储余量相关驱逐条件或宽限时间。
     *
     * @param string $nodefsAvailable
     */
    public function setNodefsAvailable($nodefsAvailable)
    {
        $this->set("NodefsAvailable", $nodefsAvailable);
    }

    /**
     * NodefsInodesFree: 节点剩余inodes驱逐条件或宽限时间。
     *
     * @return string|null
     */
    public function getNodefsInodesFree()
    {
        return $this->get("NodefsInodesFree");
    }

    /**
     * NodefsInodesFree: 节点剩余inodes驱逐条件或宽限时间。
     *
     * @param string $nodefsInodesFree
     */
    public function setNodefsInodesFree($nodefsInodesFree)
    {
        $this->set("NodefsInodesFree", $nodefsInodesFree);
    }
}
