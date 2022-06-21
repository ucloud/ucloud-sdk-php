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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class AclEntryInfo extends Response
{
    

    /**
     * EntryId: Entry的ID
     *
     * @return string|null
     */
    public function getEntryId()
    {
        return $this->get("EntryId");
    }

    /**
     * EntryId: Entry的ID
     *
     * @param string $entryId
     */
    public function setEntryId($entryId)
    {
        $this->set("EntryId", $entryId);
    }

    /**
     * Priority: 优先级
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 优先级
     *
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * Direction: 出向或者入向
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->get("Direction");
    }

    /**
     * Direction: 出向或者入向
     *
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->set("Direction", $direction);
    }

    /**
     * IpProtocol: 针对的IP协议
     *
     * @return string|null
     */
    public function getIpProtocol()
    {
        return $this->get("IpProtocol");
    }

    /**
     * IpProtocol: 针对的IP协议
     *
     * @param string $ipProtocol
     */
    public function setIpProtocol($ipProtocol)
    {
        $this->set("IpProtocol", $ipProtocol);
    }

    /**
     * CidrBlock: IP段的CIDR信息
     *
     * @return string|null
     */
    public function getCidrBlock()
    {
        return $this->get("CidrBlock");
    }

    /**
     * CidrBlock: IP段的CIDR信息
     *
     * @param string $cidrBlock
     */
    public function setCidrBlock($cidrBlock)
    {
        $this->set("CidrBlock", $cidrBlock);
    }

    /**
     * PortRange: Port的段信息
     *
     * @return string|null
     */
    public function getPortRange()
    {
        return $this->get("PortRange");
    }

    /**
     * PortRange: Port的段信息
     *
     * @param string $portRange
     */
    public function setPortRange($portRange)
    {
        $this->set("PortRange", $portRange);
    }

    /**
     * EntryAction: 匹配规则的动作
     *
     * @return string|null
     */
    public function getEntryAction()
    {
        return $this->get("EntryAction");
    }

    /**
     * EntryAction: 匹配规则的动作
     *
     * @param string $entryAction
     */
    public function setEntryAction($entryAction)
    {
        $this->set("EntryAction", $entryAction);
    }

    /**
     * TargetType: 应用目标类型。 0代表“子网内全部资源” ，1代表“子网内指定资源” 。
     *
     * @return int|null
     */
    public function getTargetType()
    {
        return $this->get("TargetType");
    }

    /**
     * TargetType: 应用目标类型。 0代表“子网内全部资源” ，1代表“子网内指定资源” 。
     *
     * @param int $targetType
     */
    public function setTargetType($targetType)
    {
        $this->set("TargetType", $targetType);
    }

    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建的Unix时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * UpdateTime: 更改的Unix时间戳
     *
     * @return int|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更改的Unix时间戳
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * TargetResourceList: 应用目标资源信息。TargetType为0时不返回该值。具体结构见下方TargetResourceInfo
     *
     * @return TargetResourceInfo[]|null
     */
    public function getTargetResourceList()
    {
        $items = $this->get("TargetResourceList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TargetResourceInfo($item));
        }
        return $result;
    }

    /**
     * TargetResourceList: 应用目标资源信息。TargetType为0时不返回该值。具体结构见下方TargetResourceInfo
     *
     * @param TargetResourceInfo[] $targetResourceList
     */
    public function setTargetResourceList(array $targetResourceList)
    {
        $result = [];
        foreach ($targetResourceList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TargetResourceCount: 应用目标资源数量。TargetType为0时不返回该值。
     *
     * @return int|null
     */
    public function getTargetResourceCount()
    {
        return $this->get("TargetResourceCount");
    }

    /**
     * TargetResourceCount: 应用目标资源数量。TargetType为0时不返回该值。
     *
     * @param int $targetResourceCount
     */
    public function setTargetResourceCount($targetResourceCount)
    {
        $this->set("TargetResourceCount", $targetResourceCount);
    }


}
