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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class Version extends Response
{
    

    /**
     * Version: kafka版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: kafka版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * Label: kafka 版本标签。recommend 表示推荐版本，beta 表示公测版本
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->get("Label");
    }

    /**
     * Label: kafka 版本标签。recommend 表示推荐版本，beta 表示公测版本
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->set("Label", $label);
    }
}
