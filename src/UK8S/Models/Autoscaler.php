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
     * ScaleDownUnneededTime: 缩容触发延时
     *
     * @return string|null
     */
    public function getScaleDownUnneededTime()
    {
        return $this->get("ScaleDownUnneededTime");
    }

    /**
     * ScaleDownUnneededTime: 缩容触发延时
     *
     * @param string $scaleDownUnneededTime
     */
    public function setScaleDownUnneededTime($scaleDownUnneededTime)
    {
        $this->set("ScaleDownUnneededTime", $scaleDownUnneededTime);
    }

    /**
     * ScaleDownUtilizationThreshold: CPU缩容阈值
     *
     * @return string|null
     */
    public function getScaleDownUtilizationThreshold()
    {
        return $this->get("ScaleDownUtilizationThreshold");
    }

    /**
     * ScaleDownUtilizationThreshold: CPU缩容阈值
     *
     * @param string $scaleDownUtilizationThreshold
     */
    public function setScaleDownUtilizationThreshold($scaleDownUtilizationThreshold)
    {
        $this->set("ScaleDownUtilizationThreshold", $scaleDownUtilizationThreshold);
    }

    /**
     * ScaleDownDelayAfterAdd: 静默时间
     *
     * @return string|null
     */
    public function getScaleDownDelayAfterAdd()
    {
        return $this->get("ScaleDownDelayAfterAdd");
    }

    /**
     * ScaleDownDelayAfterAdd: 静默时间
     *
     * @param string $scaleDownDelayAfterAdd
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
     * UpdateTime:
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime:
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * ScaleDownGpuUtilizationThreshold: GPU缩容阈值
     *
     * @return string|null
     */
    public function getScaleDownGpuUtilizationThreshold()
    {
        return $this->get("ScaleDownGpuUtilizationThreshold");
    }

    /**
     * ScaleDownGpuUtilizationThreshold: GPU缩容阈值
     *
     * @param string $scaleDownGpuUtilizationThreshold
     */
    public function setScaleDownGpuUtilizationThreshold($scaleDownGpuUtilizationThreshold)
    {
        $this->set("ScaleDownGpuUtilizationThreshold", $scaleDownGpuUtilizationThreshold);
    }
}
