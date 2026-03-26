<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UDNS\Models;

use UCloud\Core\Response\Response;

class ValueSet extends Response
{
    

    /**
     * Data: 主机记录
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->get("Data");
    }

    /**
     * Data: 主机记录
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->set("Data", $data);
    }

    /**
     * Weight: 权重
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 权重
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * IsEnabled: 是否启用
     *
     * @return integer|null
     */
    public function getIsEnabled()
    {
        return $this->get("IsEnabled");
    }

    /**
     * IsEnabled: 是否启用
     *
     * @param int $isEnabled
     */
    public function setIsEnabled($isEnabled)
    {
        $this->set("IsEnabled", $isEnabled);
    }
}
