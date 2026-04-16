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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class ConfigTemplateItem extends Response
{
    

    /**
     * ItemId: itemId
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->get("ItemId");
    }

    /**
     * ItemId: itemId
     *
     * @param string $itemId
     */
    public function setItemId($itemId)
    {
        $this->set("ItemId", $itemId);
    }

    /**
     * TemplateId: 模板ID
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 模板ID
     *
     * @param string $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * ConfigName: 配置名称
     *
     * @return string|null
     */
    public function getConfigName()
    {
        return $this->get("ConfigName");
    }

    /**
     * ConfigName: 配置名称
     *
     * @param string $configName
     */
    public function setConfigName($configName)
    {
        $this->set("ConfigName", $configName);
    }

    /**
     * ConfigValue: 配置值
     *
     * @return string|null
     */
    public function getConfigValue()
    {
        return $this->get("ConfigValue");
    }

    /**
     * ConfigValue: 配置值
     *
     * @param string $configValue
     */
    public function setConfigValue($configValue)
    {
        $this->set("ConfigValue", $configValue);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * ConfigOption: 配置选项
     *
     * @return ConfigOptions|null
     */
    public function getConfigOption()
    {
        return new ConfigOptions($this->get("ConfigOption"));
    }

    /**
     * ConfigOption: 配置选项
     *
     * @param ConfigOptions $configOption
     */
    public function setConfigOption(array $configOption)
    {
        $this->set("ConfigOption", $configOption->getAll());
    }

    /**
     * NodeType: 节点类型: DataNode:数据节点 | ConfigSrvNode:配置节点 | MongosNode:路由节点
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->get("NodeType");
    }

    /**
     * NodeType: 节点类型: DataNode:数据节点 | ConfigSrvNode:配置节点 | MongosNode:路由节点
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType)
    {
        $this->set("NodeType", $nodeType);
    }
}
