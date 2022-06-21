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
namespace UCloud\UPHost\Params;

use UCloud\Core\Request\Request;

class GetPHostPriceParamDisks extends Request
{
    

    /**
     * IsBoot: 裸金属机型参数->枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @return string|null
     */
    public function getIsBoot()
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 裸金属机型参数->枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @param string $isBoot
     */
    public function setIsBoot($isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * Type: 裸金属机型参数->磁盘类型：枚举值：CLOUD_RSSD
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 裸金属机型参数->磁盘类型：枚举值：CLOUD_RSSD
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Size: 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB。数据盘是20-32000G。
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB。数据盘是20-32000G。
     *
     * @param string $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }


}
