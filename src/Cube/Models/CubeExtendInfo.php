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
namespace UCloud\Cube\Models;

use UCloud\Core\Response\Response;

class CubeExtendInfo extends Response
{
    

    /**
     * CubeId: Cube的Id
     *
     * @return string|null
     */
    public function getCubeId(): string
    {
        return $this->get("CubeId");
    }

    /**
     * CubeId: Cube的Id
     *
     * @param string $cubeId
     */
    public function setCubeId(string $cubeId)
    {
        $this->set("CubeId", $cubeId);
    }

    /**
     * Name: Cube的名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: Cube的名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Eip: EIPSet
     *
     * @return EIPSet[]|null
     */
    public function getEip(): array
    {
        $items = $this->get("Eip") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new EIPSet($item));
        }
        return $result;
    }

    /**
     * Eip: EIPSet
     *
     * @param EIPSet[] $eip
     */
    public function setEip(array $eip)
    {
        $result = [];
        foreach ($eip as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Expiration: 资源有效期
     *
     * @return integer|null
     */
    public function getExpiration(): int
    {
        return $this->get("Expiration");
    }

    /**
     * Expiration: 资源有效期
     *
     * @param int $expiration
     */
    public function setExpiration(int $expiration)
    {
        $this->set("Expiration", $expiration);
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
}
