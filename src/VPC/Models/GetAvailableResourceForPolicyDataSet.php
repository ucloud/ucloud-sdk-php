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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class GetAvailableResourceForPolicyDataSet extends Response {
    

    /**
     * ResourceId: 资源的Id
     *
     * @return string|null
     */
    public function getResourceId(): string {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源的Id
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId) {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * PrivateIP: 资源对应的内网Ip
     *
     * @return string|null
     */
    public function getPrivateIP(): string {
        return $this->get("PrivateIP");
    }

    /**
     * PrivateIP: 资源对应的内网Ip
     *
     * @param string $privateIP
     */
    public function setPrivateIP(string $privateIP) {
        $this->set("PrivateIP", $privateIP);
    }

    /**
     * ResourceType: 资源类型。"uhost"：云主机； "upm"，物理云主机； "hadoophost"：hadoop节点； "fortresshost"：堡垒机： "udockhost"，容器
     *
     * @return string|null
     */
    public function getResourceType(): string {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 资源类型。"uhost"：云主机； "upm"，物理云主机； "hadoophost"：hadoop节点； "fortresshost"：堡垒机： "udockhost"，容器
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType) {
        $this->set("ResourceType", $resourceType);
    }


}
