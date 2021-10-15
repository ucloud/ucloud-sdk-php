<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class SSLBindedTargetSet extends Response
{
    

    /**
     * ResourceId: SSL证书绑定到的实例ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: SSL证书绑定到的实例ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceName: SSL证书绑定到的实例名称
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: SSL证书绑定到的实例名称
     *
     * @param string $resourceName
     */
    public function setResourceName($resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }
}
