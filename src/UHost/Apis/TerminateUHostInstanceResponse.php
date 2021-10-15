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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;

class TerminateUHostInstanceResponse extends Response
{
    

    /**
     * InRecycle: 用于判断主机删除时是否进入回收站。放入回收站:"Yes", 彻底删除：“No”。
     *
     * @return string|null
     */
    public function getInRecycle()
    {
        return $this->get("InRecycle");
    }

    /**
     * InRecycle: 用于判断主机删除时是否进入回收站。放入回收站:"Yes", 彻底删除：“No”。
     *
     * @param string $inRecycle
     */
    public function setInRecycle($inRecycle)
    {
        $this->set("InRecycle", $inRecycle);
    }

    /**
     * UHostId: UHost 实例 Id
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: UHost 实例 Id
     *
     * @param string $uHostId
     */
    public function setUHostId($uHostId)
    {
        $this->set("UHostId", $uHostId);
    }
}
