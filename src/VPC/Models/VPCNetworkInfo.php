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

class VPCNetworkInfo extends Response {
    

    /**
     * Network: vpc地址空间
     *
     * @return string|null
     */
    public function getNetwork(): string {
        return $this->get("Network");
    }

    /**
     * Network: vpc地址空间
     *
     * @param string $network
     */
    public function setNetwork(string $network) {
        $this->set("Network", $network);
    }

    /**
     * SubnetCount: 地址空间中子网数量
     *
     * @return int|null
     */
    public function getSubnetCount(): int {
        return $this->get("SubnetCount");
    }

    /**
     * SubnetCount: 地址空间中子网数量
     *
     * @param int $subnetCount
     */
    public function setSubnetCount(int $subnetCount) {
        $this->set("SubnetCount", $subnetCount);
    }


}
