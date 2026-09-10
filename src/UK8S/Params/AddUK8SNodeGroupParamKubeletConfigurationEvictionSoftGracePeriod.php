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

class AddUK8SNodeGroupParamKubeletConfigurationEvictionSoftGracePeriod extends Request
{
    

    /**
     * MemoryAvailable: MemoryAvailable软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - memory.available
     *
     * @return string|null
     */
    public function getMemoryAvailable()
    {
        return $this->get("MemoryAvailable");
    }

    /**
     * MemoryAvailable: MemoryAvailable软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - memory.available
     *
     * @param string $memoryAvailable
     */
    public function setMemoryAvailable($memoryAvailable)
    {
        $this->set("MemoryAvailable", $memoryAvailable);
    }

    /**
     * ImagefsAvailable: ImagefsAvailable软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - imagefs.available
     *
     * @return string|null
     */
    public function getImagefsAvailable()
    {
        return $this->get("ImagefsAvailable");
    }

    /**
     * ImagefsAvailable: ImagefsAvailable软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - imagefs.available
     *
     * @param string $imagefsAvailable
     */
    public function setImagefsAvailable($imagefsAvailable)
    {
        $this->set("ImagefsAvailable", $imagefsAvailable);
    }

    /**
     * NodefsAvailable: NodefsAvailable软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - nodefs.available
     *
     * @return string|null
     */
    public function getNodefsAvailable()
    {
        return $this->get("NodefsAvailable");
    }

    /**
     * NodefsAvailable: NodefsAvailable软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - nodefs.available
     *
     * @param string $nodefsAvailable
     */
    public function setNodefsAvailable($nodefsAvailable)
    {
        $this->set("NodefsAvailable", $nodefsAvailable);
    }

    /**
     * NodefsInodesFree: NodefsInodesFree软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - nodefs.inodesFree
     *
     * @return string|null
     */
    public function getNodefsInodesFree()
    {
        return $this->get("NodefsInodesFree");
    }

    /**
     * NodefsInodesFree: NodefsInodesFree软性门限的宽限时间，必须以s结尾。控制台展示为evictionSoftGracePeriod - nodefs.inodesFree
     *
     * @param string $nodefsInodesFree
     */
    public function setNodefsInodesFree($nodefsInodesFree)
    {
        $this->set("NodefsInodesFree", $nodefsInodesFree);
    }
}
