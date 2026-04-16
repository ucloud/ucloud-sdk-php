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

class ConfigTemplate extends Response
{
    

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
     * TemplateName: 模板名称
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 模板名称
     *
     * @param string $templateName
     */
    public function setTemplateName($templateName)
    {
        $this->set("TemplateName", $templateName);
    }

    /**
     * MongodbVersion: mongo版本
     *
     * @return string|null
     */
    public function getMongodbVersion()
    {
        return $this->get("MongodbVersion");
    }

    /**
     * MongodbVersion: mongo版本
     *
     * @param string $mongodbVersion
     */
    public function setMongodbVersion($mongodbVersion)
    {
        $this->set("MongodbVersion", $mongodbVersion);
    }

    /**
     * ClusterType: 集群类型
     *
     * @return string|null
     */
    public function getClusterType()
    {
        return $this->get("ClusterType");
    }

    /**
     * ClusterType: 集群类型
     *
     * @param string $clusterType
     */
    public function setClusterType($clusterType)
    {
        $this->set("ClusterType", $clusterType);
    }

    /**
     * TemplateType: 模板类型 UsersTemplate DefaultTemplate
     *
     * @return string|null
     */
    public function getTemplateType()
    {
        return $this->get("TemplateType");
    }

    /**
     * TemplateType: 模板类型 UsersTemplate DefaultTemplate
     *
     * @param string $templateType
     */
    public function setTemplateType($templateType)
    {
        $this->set("TemplateType", $templateType);
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
     * DeleteTime: 删除时间
     *
     * @return integer|null
     */
    public function getDeleteTime()
    {
        return $this->get("DeleteTime");
    }

    /**
     * DeleteTime: 删除时间
     *
     * @param int $deleteTime
     */
    public function setDeleteTime($deleteTime)
    {
        $this->set("DeleteTime", $deleteTime);
    }

    /**
     * Description: 模板描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 模板描述
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }
}
