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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;

class CloneRouteTableResponse extends Response {
    

    /**
     * RouteTableId: 复制后新的路由表资源ID
     *
     * @return string|null
     */
    public function getRouteTableId(): string {
        return $this->get("RouteTableId");
    }

    /**
     * RouteTableId: 复制后新的路由表资源ID
     *
     * @param string $routeTableId
     */
    public function setRouteTableId(string $routeTableId) {
        $this->set("RouteTableId", $routeTableId);
    }


}
