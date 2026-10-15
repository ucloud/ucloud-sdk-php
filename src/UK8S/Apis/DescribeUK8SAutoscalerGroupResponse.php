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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\Autoscaler;
use UCloud\UK8S\Models\AutoScalingGroup;
use UCloud\UK8S\Models\SecGroupId;
use UCloud\UK8S\Models\NetworkInterface;
use UCloud\UK8S\Models\EIP;
use UCloud\UK8S\Models\KubeletConfiguration;
use UCloud\UK8S\Models\EvictionCondition;
use UCloud\UK8S\Models\ReservedResource;

class DescribeUK8SAutoscalerGroupResponse extends Response
{
    

    /**
     * Autoscaler: 伸缩器
     *
     * @return Autoscaler|null
     */
    public function getAutoscaler()
    {
        return new Autoscaler($this->get("Autoscaler"));
    }

    /**
     * Autoscaler: 伸缩器
     *
     * @param Autoscaler $autoscaler
     */
    public function setAutoscaler(array $autoscaler)
    {
        $this->set("Autoscaler", $autoscaler->getAll());
    }

    /**
     * AutoScalingGroup: 伸缩组列表
     *
     * @return AutoScalingGroup[]|null
     */
    public function getAutoScalingGroup()
    {
        $items = $this->get("AutoScalingGroup");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AutoScalingGroup($item));
        }
        return $result;
    }

    /**
     * AutoScalingGroup: 伸缩组列表
     *
     * @param AutoScalingGroup[] $autoScalingGroup
     */
    public function setAutoScalingGroup(array $autoScalingGroup)
    {
        $result = [];
        foreach ($autoScalingGroup as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Update: 0:无需更新1:有更新2:强制更新
     *
     * @return integer|null
     */
    public function getUpdate()
    {
        return $this->get("Update");
    }

    /**
     * Update: 0:无需更新1:有更新2:强制更新
     *
     * @param int $update
     */
    public function setUpdate($update)
    {
        $this->set("Update", $update);
    }
}
