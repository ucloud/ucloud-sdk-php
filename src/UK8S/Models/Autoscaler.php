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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class Autoscaler extends Response
{
    

    /**
     * ScaleDownUnneededTime: 节点持续不需要后触发缩容的等待时间，单位分钟。
     *
     * @return integer|null
     */
    public function getScaleDownUnneededTime()
    {
        return $this->get("ScaleDownUnneededTime");
    }

    /**
     * ScaleDownUnneededTime: 节点持续不需要后触发缩容的等待时间，单位分钟。
     *
     * @param int $scaleDownUnneededTime
     */
    public function setScaleDownUnneededTime($scaleDownUnneededTime)
    {
        $this->set("ScaleDownUnneededTime", $scaleDownUnneededTime);
    }

    /**
     * ScaleDownUtilizationThreshold: 节点缩容利用率阈值，单位百分比，范围 0–100。
     *
     * @return integer|null
     */
    public function getScaleDownUtilizationThreshold()
    {
        return $this->get("ScaleDownUtilizationThreshold");
    }

    /**
     * ScaleDownUtilizationThreshold: 节点缩容利用率阈值，单位百分比，范围 0–100。
     *
     * @param int $scaleDownUtilizationThreshold
     */
    public function setScaleDownUtilizationThreshold($scaleDownUtilizationThreshold)
    {
        $this->set("ScaleDownUtilizationThreshold", $scaleDownUtilizationThreshold);
    }

    /**
     * ScaleDownDelayAfterAdd: 添加节点后等待缩容的时间，单位分钟。
     *
     * @return integer|null
     */
    public function getScaleDownDelayAfterAdd()
    {
        return $this->get("ScaleDownDelayAfterAdd");
    }

    /**
     * ScaleDownDelayAfterAdd: 添加节点后等待缩容的时间，单位分钟。
     *
     * @param int $scaleDownDelayAfterAdd
     */
    public function setScaleDownDelayAfterAdd($scaleDownDelayAfterAdd)
    {
        $this->set("ScaleDownDelayAfterAdd", $scaleDownDelayAfterAdd);
    }

    /**
     * Enabled: 打开/关闭
     *
     * @return integer|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 打开/关闭
     *
     * @param int $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Version: 伸缩器版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 伸缩器版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * UpdateTime: 配置更新时间，Unix 时间戳，单位秒。
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 配置更新时间，Unix 时间戳，单位秒。
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * ScaleDownGpuUtilizationThreshold: GPU 缩容利用率阈值，单位百分比，范围 0–100。
     *
     * @return integer|null
     */
    public function getScaleDownGpuUtilizationThreshold()
    {
        return $this->get("ScaleDownGpuUtilizationThreshold");
    }

    /**
     * ScaleDownGpuUtilizationThreshold: GPU 缩容利用率阈值，单位百分比，范围 0–100。
     *
     * @param int $scaleDownGpuUtilizationThreshold
     */
    public function setScaleDownGpuUtilizationThreshold($scaleDownGpuUtilizationThreshold)
    {
        $this->set("ScaleDownGpuUtilizationThreshold", $scaleDownGpuUtilizationThreshold);
    }
}
