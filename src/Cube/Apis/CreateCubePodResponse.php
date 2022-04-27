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
namespace UCloud\Cube\Apis;

use UCloud\Core\Response\Response;

class CreateCubePodResponse extends Response
{
    

    /**
     * Pod: base64编码的yaml
     *
     * @return string|null
     */
    public function getPod(): string
    {
        return $this->get("Pod");
    }

    /**
     * Pod: base64编码的yaml
     *
     * @param string $pod
     */
    public function setPod(string $pod)
    {
        $this->set("Pod", $pod);
    }

    /**
     * CubeId: cube的资源Id
     *
     * @return string|null
     */
    public function getCubeId(): string
    {
        return $this->get("CubeId");
    }

    /**
     * CubeId: cube的资源Id
     *
     * @param string $cubeId
     */
    public function setCubeId(string $cubeId)
    {
        $this->set("CubeId", $cubeId);
    }
}
