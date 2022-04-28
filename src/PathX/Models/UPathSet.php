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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class UPathSet extends Response
{
    

    /**
     * UPathName: UPath名字
     *
     * @return string|null
     */
    public function getUPathName()
    {
        return $this->get("UPathName");
    }

    /**
     * UPathName: UPath名字
     *
     * @param string $uPathName
     */
    public function setUPathName($uPathName)
    {
        $this->set("UPathName", $uPathName);
    }

    /**
     * UPathId: UPath 实例ID
     *
     * @return string|null
     */
    public function getUPathId()
    {
        return $this->get("UPathId");
    }

    /**
     * UPathId: UPath 实例ID
     *
     * @param string $uPathId
     */
    public function setUPathId($uPathId)
    {
        $this->set("UPathId", $uPathId);
    }

    /**
     * Bandwidth: 带宽 Mbps, 1~800Mbps
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽 Mbps, 1~800Mbps
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * LineId: 线路ID
     *
     * @return string|null
     */
    public function getLineId()
    {
        return $this->get("LineId");
    }

    /**
     * LineId: 线路ID
     *
     * @param string $lineId
     */
    public function setLineId($lineId)
    {
        $this->set("LineId", $lineId);
    }

    /**
     * LineFromName: 线路起点中文名字，加速区域
     *
     * @return string|null
     */
    public function getLineFromName()
    {
        return $this->get("LineFromName");
    }

    /**
     * LineFromName: 线路起点中文名字，加速区域
     *
     * @param string $lineFromName
     */
    public function setLineFromName($lineFromName)
    {
        $this->set("LineFromName", $lineFromName);
    }

    /**
     * LineToName: 线路对端中文名字，源站区域
     *
     * @return string|null
     */
    public function getLineToName()
    {
        return $this->get("LineToName");
    }

    /**
     * LineToName: 线路对端中文名字，源站区域
     *
     * @param string $lineToName
     */
    public function setLineToName($lineToName)
    {
        $this->set("LineToName", $lineToName);
    }

    /**
     * LineFrom: 线路起点英文代号，加速区域
     *
     * @return string|null
     */
    public function getLineFrom()
    {
        return $this->get("LineFrom");
    }

    /**
     * LineFrom: 线路起点英文代号，加速区域
     *
     * @param string $lineFrom
     */
    public function setLineFrom($lineFrom)
    {
        $this->set("LineFrom", $lineFrom);
    }

    /**
     * LineTo: 线路对端英文代号，源站区域
     *
     * @return string|null
     */
    public function getLineTo()
    {
        return $this->get("LineTo");
    }

    /**
     * LineTo: 线路对端英文代号，源站区域
     *
     * @param string $lineTo
     */
    public function setLineTo($lineTo)
    {
        $this->set("LineTo", $lineTo);
    }
}
