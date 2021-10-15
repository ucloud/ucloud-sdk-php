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
namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

class PHostCPUSet extends Response
{
    

    /**
     * Model: CPU型号
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->get("Model");
    }

    /**
     * Model: CPU型号
     *
     * @param string $model
     */
    public function setModel($model)
    {
        $this->set("Model", $model);
    }

    /**
     * Frequence: CPU主频
     *
     * @return float|null
     */
    public function getFrequence()
    {
        return $this->get("Frequence");
    }

    /**
     * Frequence: CPU主频
     *
     * @param float $frequence
     */
    public function setFrequence($frequence)
    {
        $this->set("Frequence", $frequence);
    }

    /**
     * Count: CPU个数
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: CPU个数
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * CoreCount: CPU核数
     *
     * @return integer|null
     */
    public function getCoreCount()
    {
        return $this->get("CoreCount");
    }

    /**
     * CoreCount: CPU核数
     *
     * @param int $coreCount
     */
    public function setCoreCount($coreCount)
    {
        $this->set("CoreCount", $coreCount);
    }
}
