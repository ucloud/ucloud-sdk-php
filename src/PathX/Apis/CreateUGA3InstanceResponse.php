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

class CreateUGA3InstanceResponse extends Response
{
    

    /**
     * InstanceId: 加速配置ID
     *
     * @return string|null
     */
    public function getInstanceId(): string
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 加速配置ID
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * CName: 加速域名 用户可把业务域名CName到此域名上
     *
     * @return string|null
     */
    public function getCName(): string
    {
        return $this->get("CName");
    }

    /**
     * CName: 加速域名 用户可把业务域名CName到此域名上
     *
     * @param string $cName
     */
    public function setCName(string $cName)
    {
        $this->set("CName", $cName);
    }
}
