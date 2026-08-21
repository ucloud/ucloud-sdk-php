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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class ObjectType extends Response
{
    

    /**
     * Id: ID
     *
     * @return integer|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: ID
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * ObjectType: 资源类型ID
     *
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->get("ObjectType");
    }

    /**
     * ObjectType: 资源类型ID
     *
     * @param string $objectType
     */
    public function setObjectType($objectType)
    {
        $this->set("ObjectType", $objectType);
    }

    /**
     * ObjectTypeKey: 资源类型
     *
     * @return string|null
     */
    public function getObjectTypeKey()
    {
        return $this->get("ObjectTypeKey");
    }

    /**
     * ObjectTypeKey: 资源类型
     *
     * @param string $objectTypeKey
     */
    public function setObjectTypeKey($objectTypeKey)
    {
        $this->set("ObjectTypeKey", $objectTypeKey);
    }

    /**
     * ProductName: 产品名称
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->get("ProductName");
    }

    /**
     * ProductName: 产品名称
     *
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->set("ProductName", $productName);
    }

    /**
     * ProductName1: 产品子名称
     *
     * @return string|null
     */
    public function getProductName1()
    {
        return $this->get("ProductName1");
    }

    /**
     * ProductName1: 产品子名称
     *
     * @param string $productName1
     */
    public function setProductName1($productName1)
    {
        $this->set("ProductName1", $productName1);
    }

    /**
     * ProductCNName: 产品中文名称
     *
     * @return string|null
     */
    public function getProductCNName()
    {
        return $this->get("ProductCNName");
    }

    /**
     * ProductCNName: 产品中文名称
     *
     * @param string $productCNName
     */
    public function setProductCNName($productCNName)
    {
        $this->set("ProductCNName", $productCNName);
    }

    /**
     * ProductENName: 产品英文名称
     *
     * @return string|null
     */
    public function getProductENName()
    {
        return $this->get("ProductENName");
    }

    /**
     * ProductENName: 产品英文名称
     *
     * @param string $productENName
     */
    public function setProductENName($productENName)
    {
        $this->set("ProductENName", $productENName);
    }

    /**
     * Metas: {type: spec|basic, key:string, name: string}[] -> JSON字符串
     *
     * @return string|null
     */
    public function getMetas()
    {
        return $this->get("Metas");
    }

    /**
     * Metas: {type: spec|basic, key:string, name: string}[] -> JSON字符串
     *
     * @param string $metas
     */
    public function setMetas($metas)
    {
        $this->set("Metas", $metas);
    }
}
