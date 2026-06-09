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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class UMinferAPIModel extends Response
{
    

    /**
     * ServedModelName: 使用OpenAI接口调用时，填入的 model值
     *
     * @return string|null
     */
    public function getServedModelName()
    {
        return $this->get("ServedModelName");
    }

    /**
     * ServedModelName: 使用OpenAI接口调用时，填入的 model值
     *
     * @param string $servedModelName
     */
    public function setServedModelName($servedModelName)
    {
        $this->set("ServedModelName", $servedModelName);
    }

    /**
     * Id: id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: id
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * SimpleDescribe: 描述
     *
     * @return string|null
     */
    public function getSimpleDescribe()
    {
        return $this->get("SimpleDescribe");
    }

    /**
     * SimpleDescribe: 描述
     *
     * @param string $simpleDescribe
     */
    public function setSimpleDescribe($simpleDescribe)
    {
        $this->set("SimpleDescribe", $simpleDescribe);
    }

    /**
     * Language: 语言
     *
     * @return string[]|null
     */
    public function getLanguage()
    {
        return $this->get("Language");
    }

    /**
     * Language: 语言
     *
     * @param string[] $language
     */
    public function setLanguage(array $language)
    {
        $this->set("Language", $language);
    }

    /**
     * Icon: 图标链接
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->get("Icon");
    }

    /**
     * Icon: 图标链接
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->set("Icon", $icon);
    }

    /**
     * Pricing: 模型价格
     *
     * @return Pricing|null
     */
    public function getPricing()
    {
        return new Pricing($this->get("Pricing"));
    }

    /**
     * Pricing: 模型价格
     *
     * @param Pricing $pricing
     */
    public function setPricing(array $pricing)
    {
        $this->set("Pricing", $pricing->getAll());
    }

    /**
     * CreateAt: 创建时间
     *
     * @return integer|null
     */
    public function getCreateAt()
    {
        return $this->get("CreateAt");
    }

    /**
     * CreateAt: 创建时间
     *
     * @param int $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->set("CreateAt", $createAt);
    }

    /**
     * UpdateAt: 更新时间
     *
     * @return integer|null
     */
    public function getUpdateAt()
    {
        return $this->get("UpdateAt");
    }

    /**
     * UpdateAt: 更新时间
     *
     * @param int $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->set("UpdateAt", $updateAt);
    }
}
