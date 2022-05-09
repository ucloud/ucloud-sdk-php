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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class MachineSizes extends Response
{
    

    /**
     * Gpu: Gpu为GPU可支持的规格即GPU颗数，非GPU机型，Gpu为0
     *
     * @return integer|null
     */
    public function getGpu()
    {
        return $this->get("Gpu");
    }

    /**
     * Gpu: Gpu为GPU可支持的规格即GPU颗数，非GPU机型，Gpu为0
     *
     * @param int $gpu
     */
    public function setGpu($gpu)
    {
        $this->set("Gpu", $gpu);
    }

    /**
     * Collection: CPU和内存可支持的规格
     *
     * @return Collection[]|null
     */
    public function getCollection()
    {
        $items = $this->get("Collection");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Collection($item));
        }
        return $result;
    }

    /**
     * Collection: CPU和内存可支持的规格
     *
     * @param Collection[] $collection
     */
    public function setCollection(array $collection)
    {
        $result = [];
        foreach ($collection as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
