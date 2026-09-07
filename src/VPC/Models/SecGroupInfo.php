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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class SecGroupInfo extends Response
{
    

    /**
     * SecGroupId: 安全组资源ID
     *
     * @return string|null
     */
    public function getSecGroupId()
    {
        return $this->get("SecGroupId");
    }

    /**
     * SecGroupId: 安全组资源ID
     *
     * @param string $secGroupId
     */
    public function setSecGroupId($secGroupId)
    {
        $this->set("SecGroupId", $secGroupId);
    }

    /**
     * Name: 安全组名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 安全组名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * VPCId: VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Account: 用户 ID
     *
     * @return integer|null
     */
    public function getAccount()
    {
        return $this->get("Account");
    }

    /**
     * Account: 用户 ID
     *
     * @param int $account
     */
    public function setAccount($account)
    {
        $this->set("Account", $account);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Type: 安全组类型，枚举值为： "user defined", 自定义创建安全组； "recommend web", 使用Web模板创建的安全组； "recommend non web", 使用非Web模板创建的安全组
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 安全组类型，枚举值为： "user defined", 自定义创建安全组； "recommend web", 使用Web模板创建的安全组； "recommend non web", 使用非Web模板创建的安全组
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * CreateTime: 创建的时间，格式为Unix Timestamp，如 1747030299
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建的时间，格式为Unix Timestamp，如 1747030299
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Rule: 安全组组中的规则列表，参见 SecGroupRuleInfo
     *
     * @return SecGroupRuleInfo[]|null
     */
    public function getRule()
    {
        $items = $this->get("Rule");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SecGroupRuleInfo($item));
        }
        return $result;
    }

    /**
     * Rule: 安全组组中的规则列表，参见 SecGroupRuleInfo
     *
     * @param SecGroupRuleInfo[] $rule
     */
    public function setRule(array $rule)
    {
        $result = [];
        foreach ($rule as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
