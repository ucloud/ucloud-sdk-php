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

class NodeDelays extends Response
{
    

    /**
     * Area: 加速区域
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->get("Area");
    }

    /**
     * Area: 加速区域
     *
     * @param string $area
     */
    public function setArea($area)
    {
        $this->set("Area", $area);
    }

    /**
     * AreaCode: 加速区域Code
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 加速区域Code
     *
     * @param string $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * CountryCode: 国家代码
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->get("CountryCode");
    }

    /**
     * CountryCode: 国家代码
     *
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->set("CountryCode", $countryCode);
    }

    /**
     * FlagUnicode: 国旗Code
     *
     * @return string|null
     */
    public function getFlagUnicode()
    {
        return $this->get("FlagUnicode");
    }

    /**
     * FlagUnicode: 国旗Code
     *
     * @param string $flagUnicode
     */
    public function setFlagUnicode($flagUnicode)
    {
        $this->set("FlagUnicode", $flagUnicode);
    }

    /**
     * FlagEmoji: 国旗Emoji
     *
     * @return string|null
     */
    public function getFlagEmoji()
    {
        return $this->get("FlagEmoji");
    }

    /**
     * FlagEmoji: 国旗Emoji
     *
     * @param string $flagEmoji
     */
    public function setFlagEmoji($flagEmoji)
    {
        $this->set("FlagEmoji", $flagEmoji);
    }

    /**
     * Latency: 加速延迟
     *
     * @return float|null
     */
    public function getLatency()
    {
        return $this->get("Latency");
    }

    /**
     * Latency: 加速延迟
     *
     * @param float $latency
     */
    public function setLatency($latency)
    {
        $this->set("Latency", $latency);
    }

    /**
     * LatencyInternet: 公网延迟
     *
     * @return float|null
     */
    public function getLatencyInternet()
    {
        return $this->get("LatencyInternet");
    }

    /**
     * LatencyInternet: 公网延迟
     *
     * @param float $latencyInternet
     */
    public function setLatencyInternet($latencyInternet)
    {
        $this->set("LatencyInternet", $latencyInternet);
    }

    /**
     * LatencyOptimization: 加速提升比例
     *
     * @return float|null
     */
    public function getLatencyOptimization()
    {
        return $this->get("LatencyOptimization");
    }

    /**
     * LatencyOptimization: 加速提升比例
     *
     * @param float $latencyOptimization
     */
    public function setLatencyOptimization($latencyOptimization)
    {
        $this->set("LatencyOptimization", $latencyOptimization);
    }

    /**
     * Loss: 加速后丢包率
     *
     * @return float|null
     */
    public function getLoss()
    {
        return $this->get("Loss");
    }

    /**
     * Loss: 加速后丢包率
     *
     * @param float $loss
     */
    public function setLoss($loss)
    {
        $this->set("Loss", $loss);
    }

    /**
     * LossInternet: 原始丢包率
     *
     * @return float|null
     */
    public function getLossInternet()
    {
        return $this->get("LossInternet");
    }

    /**
     * LossInternet: 原始丢包率
     *
     * @param float $lossInternet
     */
    public function setLossInternet($lossInternet)
    {
        $this->set("LossInternet", $lossInternet);
    }

    /**
     * LossOptimization: 丢包下降比例
     *
     * @return float|null
     */
    public function getLossOptimization()
    {
        return $this->get("LossOptimization");
    }

    /**
     * LossOptimization: 丢包下降比例
     *
     * @param float $lossOptimization
     */
    public function setLossOptimization($lossOptimization)
    {
        $this->set("LossOptimization", $lossOptimization);
    }


}
