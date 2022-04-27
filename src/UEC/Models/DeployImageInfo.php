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

namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

use UCloud\UEC\Models\GetUEcImageResponse;
use UCloud\UEC\Models\ImageInfo;

class DeployImageInfo extends Response
{

    /**
     * IdcId: 机房ID
     *
     * @return string|null
     */
    public function getIdcId()
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房ID
     *
     * @param string $idcId
     */
    public function setIdcId(string $idcId)
    {
        $this->set("IdcId", $idcId);
    }
    /**
     * State: 镜像状态 1-可用, 2-不可用, 3-获取中, 4-转换中, 5-部署中
     *
     * @return integer|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 镜像状态 1-可用, 2-不可用, 3-获取中, 4-转换中, 5-部署中
     *
     * @param int $state
     */
    public function setState(int $state)
    {
        $this->set("State", $state);
    }
}
