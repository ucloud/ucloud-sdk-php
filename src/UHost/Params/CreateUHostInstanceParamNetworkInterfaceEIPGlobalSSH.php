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
namespace UCloud\UHost\Params;

use UCloud\Core\Request\Request;

class CreateUHostInstanceParamNetworkInterfaceEIPGlobalSSH extends Request {
    

    /**
     * Area: 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”。Area和AreaCode两者必填其中之一。
     *
     * @return string|null
     */
    public function getArea(): string {
        return $this->get("Area");
    }

    /**
     * Area: 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”。Area和AreaCode两者必填其中之一。
     *
     * @param string $area
     */
    public function setArea(string $area) {
        $this->set("Area", $area);
    }

    /**
     * Port: SSH端口，1-65535且不能使用80，443端口
     *
     * @return int|null
     */
    public function getPort(): int {
        return $this->get("Port");
    }

    /**
     * Port: SSH端口，1-65535且不能使用80，443端口
     *
     * @param int $port
     */
    public function setPort(int $port) {
        $this->set("Port", $port);
    }

    /**
     * AreaCode: GlobalSSH的地区编码，格式为区域航空港国际通用代码。Area和AreaCode两者必填其中之一。
     *
     * @return string|null
     */
    public function getAreaCode(): string {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: GlobalSSH的地区编码，格式为区域航空港国际通用代码。Area和AreaCode两者必填其中之一。
     *
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode) {
        $this->set("AreaCode", $areaCode);
    }


}
