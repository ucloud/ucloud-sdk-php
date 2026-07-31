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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;

class CheckUHostResourceCapacityResponse extends Response
{
    

    /**
     * ResourceEnough: 资源是否充足
     *
     * @return boolean|null
     */
    public function getResourceEnough()
    {
        return $this->get("ResourceEnough");
    }

    /**
     * ResourceEnough: 资源是否充足
     *
     * @param boolean $resourceEnough
     */
    public function setResourceEnough($resourceEnough)
    {
        $this->set("ResourceEnough", $resourceEnough);
    }

    /**
     * RdmaClusterIds: 随机的资源对应的RdmaClusterId数组，若资源不足则为空，只有快杰系列机型，以及A800才可能有此字段
     *
     * @return string[]|null
     */
    public function getRdmaClusterIds()
    {
        return $this->get("RdmaClusterIds");
    }

    /**
     * RdmaClusterIds: 随机的资源对应的RdmaClusterId数组，若资源不足则为空，只有快杰系列机型，以及A800才可能有此字段
     *
     * @param string[] $rdmaClusterIds
     */
    public function setRdmaClusterIds(array $rdmaClusterIds)
    {
        $this->set("RdmaClusterIds", $rdmaClusterIds);
    }
}
