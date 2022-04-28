<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;

class CreateGlobalSSHInstanceResponse extends Response
{
    

    /**
     * InstanceId: 实例ID，资源唯一标识
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID，资源唯一标识
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * AcceleratingDomain: 加速域名，访问该域名可就近接入
     *
     * @return string|null
     */
    public function getAcceleratingDomain()
    {
        return $this->get("AcceleratingDomain");
    }

    /**
     * AcceleratingDomain: 加速域名，访问该域名可就近接入
     *
     * @param string $acceleratingDomain
     */
    public function setAcceleratingDomain($acceleratingDomain)
    {
        $this->set("AcceleratingDomain", $acceleratingDomain);
    }
}
