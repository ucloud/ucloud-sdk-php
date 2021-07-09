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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class K8SNodeCondition extends Response {
    

    /**
     * Type: Condition 类型，如 MemoryPressure、DiskPressure、PIDPressure、Ready
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: Condition 类型，如 MemoryPressure、DiskPressure、PIDPressure、Ready
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }

    /**
     * Status: 状态，False、True
     *
     * @return string|null
     */
    public function getStatus(): string {
        return $this->get("Status");
    }

    /**
     * Status: 状态，False、True
     *
     * @param string $status
     */
    public function setStatus(string $status) {
        $this->set("Status", $status);
    }

    /**
     * LastProbeTime: 最后一次上报状态的时间
     *
     * @return string|null
     */
    public function getLastProbeTime(): string {
        return $this->get("LastProbeTime");
    }

    /**
     * LastProbeTime: 最后一次上报状态的时间
     *
     * @param string $lastProbeTime
     */
    public function setLastProbeTime(string $lastProbeTime) {
        $this->set("LastProbeTime", $lastProbeTime);
    }

    /**
     * LastTransitionTime: 最后一次状态转变时间
     *
     * @return string|null
     */
    public function getLastTransitionTime(): string {
        return $this->get("LastTransitionTime");
    }

    /**
     * LastTransitionTime: 最后一次状态转变时间
     *
     * @param string $lastTransitionTime
     */
    public function setLastTransitionTime(string $lastTransitionTime) {
        $this->set("LastTransitionTime", $lastTransitionTime);
    }

    /**
     * Reason: 状态变化的原因
     *
     * @return string|null
     */
    public function getReason(): string {
        return $this->get("Reason");
    }

    /**
     * Reason: 状态变化的原因
     *
     * @param string $reason
     */
    public function setReason(string $reason) {
        $this->set("Reason", $reason);
    }

    /**
     * Message: 状态变化的描述信息
     *
     * @return string|null
     */
    public function getMessage(): string {
        return $this->get("Message");
    }

    /**
     * Message: 状态变化的描述信息
     *
     * @param string $message
     */
    public function setMessage(string $message) {
        $this->set("Message", $message);
    }


}
