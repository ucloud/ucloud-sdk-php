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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class UGAALine extends Response
{
    

    /**
     * LineFrom: 线路源
     *
     * @return string|null
     */
    public function getLineFrom()
    {
        return $this->get("LineFrom");
    }

    /**
     * LineFrom: 线路源
     *
     * @param string $lineFrom
     */
    public function setLineFrom($lineFrom)
    {
        $this->set("LineFrom", $lineFrom);
    }

    /**
     * LineTo: 线路目的
     *
     * @return string|null
     */
    public function getLineTo()
    {
        return $this->get("LineTo");
    }

    /**
     * LineTo: 线路目的
     *
     * @param string $lineTo
     */
    public function setLineTo($lineTo)
    {
        $this->set("LineTo", $lineTo);
    }

    /**
     * LineFromName: 线路源中文名称
     *
     * @return string|null
     */
    public function getLineFromName()
    {
        return $this->get("LineFromName");
    }

    /**
     * LineFromName: 线路源中文名称
     *
     * @param string $lineFromName
     */
    public function setLineFromName($lineFromName)
    {
        $this->set("LineFromName", $lineFromName);
    }

    /**
     * LineToName: 线路目的中文名称
     *
     * @return string|null
     */
    public function getLineToName()
    {
        return $this->get("LineToName");
    }

    /**
     * LineToName: 线路目的中文名称
     *
     * @param string $lineToName
     */
    public function setLineToName($lineToName)
    {
        $this->set("LineToName", $lineToName);
    }

    /**
     * MaxBandwidth: 线路可售最大带宽
     *
     * @return integer|null
     */
    public function getMaxBandwidth()
    {
        return $this->get("MaxBandwidth");
    }

    /**
     * MaxBandwidth: 线路可售最大带宽
     *
     * @param int $maxBandwidth
     */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->set("MaxBandwidth", $maxBandwidth);
    }

    /**
     * LineId: 线路计费Id
     *
     * @return string|null
     */
    public function getLineId()
    {
        return $this->get("LineId");
    }

    /**
     * LineId: 线路计费Id
     *
     * @param string $lineId
     */
    public function setLineId($lineId)
    {
        $this->set("LineId", $lineId);
    }

    /**
     * LineDetail: 子线路信息
     *
     * @return LineDetail[]|null
     */
    public function getLineDetail()
    {
        $items = $this->get("LineDetail");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new LineDetail($item));
        }
        return $result;
    }

    /**
     * LineDetail: 子线路信息
     *
     * @param LineDetail[] $lineDetail
     */
    public function setLineDetail(array $lineDetail)
    {
        $result = [];
        foreach ($lineDetail as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
