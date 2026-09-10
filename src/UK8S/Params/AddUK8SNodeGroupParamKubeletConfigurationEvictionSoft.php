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

class AddUK8SNodeGroupParamKubeletConfigurationEvictionSoft extends Request
{
    

    /**
     * MemoryAvailable: 触发Pod驱逐操作的软性门限之内存用量: 需以Mi或Gi结尾。配置此值时必须同时配置EvictionSoftGracePeriod.MemoryAvailable。控制台展示为evictionSoft - memory.available
     *
     * @return string|null
     */
    public function getMemoryAvailable()
    {
        return $this->get("MemoryAvailable");
    }

    /**
     * MemoryAvailable: 触发Pod驱逐操作的软性门限之内存用量: 需以Mi或Gi结尾。配置此值时必须同时配置EvictionSoftGracePeriod.MemoryAvailable。控制台展示为evictionSoft - memory.available
     *
     * @param string $memoryAvailable
     */
    public function setMemoryAvailable($memoryAvailable)
    {
        $this->set("MemoryAvailable", $memoryAvailable);
    }

    /**
     * ImagefsAvailable: 触发Pod驱逐操作的软性门限之容器镜像剩余空间: 需以%结尾。配置此值时必须同时配置EvictionSoftGracePeriod.ImagefsAvailable。控制台展示为evictionSoft - imagefs.available
     *
     * @return string|null
     */
    public function getImagefsAvailable()
    {
        return $this->get("ImagefsAvailable");
    }

    /**
     * ImagefsAvailable: 触发Pod驱逐操作的软性门限之容器镜像剩余空间: 需以%结尾。配置此值时必须同时配置EvictionSoftGracePeriod.ImagefsAvailable。控制台展示为evictionSoft - imagefs.available
     *
     * @param string $imagefsAvailable
     */
    public function setImagefsAvailable($imagefsAvailable)
    {
        $this->set("ImagefsAvailable", $imagefsAvailable);
    }

    /**
     * NodefsAvailable: 触发Pod驱逐操作的软性门限之节点存储剩余空间: 需以%结尾。配置此值时必须同时配置EvictionSoftGracePeriod.NodefsAvailable。控制台展示为evictionSoft - nodefs.available
     *
     * @return string|null
     */
    public function getNodefsAvailable()
    {
        return $this->get("NodefsAvailable");
    }

    /**
     * NodefsAvailable: 触发Pod驱逐操作的软性门限之节点存储剩余空间: 需以%结尾。配置此值时必须同时配置EvictionSoftGracePeriod.NodefsAvailable。控制台展示为evictionSoft - nodefs.available
     *
     * @param string $nodefsAvailable
     */
    public function setNodefsAvailable($nodefsAvailable)
    {
        $this->set("NodefsAvailable", $nodefsAvailable);
    }

    /**
     * NodefsInodesFree: 触发Pod驱逐操作的软性门限节点inode剩余量: 需以%结尾。配置此值时必须同时配置EvictionSoftGracePeriod.NodefsInodesFree。控制台展示为evictionSoft - nodefs.inodesFree
     *
     * @return string|null
     */
    public function getNodefsInodesFree()
    {
        return $this->get("NodefsInodesFree");
    }

    /**
     * NodefsInodesFree: 触发Pod驱逐操作的软性门限节点inode剩余量: 需以%结尾。配置此值时必须同时配置EvictionSoftGracePeriod.NodefsInodesFree。控制台展示为evictionSoft - nodefs.inodesFree
     *
     * @param string $nodefsInodesFree
     */
    public function setNodefsInodesFree($nodefsInodesFree)
    {
        $this->set("NodefsInodesFree", $nodefsInodesFree);
    }
}
