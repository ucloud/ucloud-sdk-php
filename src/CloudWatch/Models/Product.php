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

class Product extends Response
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
     * ProductType: 资源类型ID
     *
     * @return integer|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 资源类型ID
     *
     * @param int $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * ProductKey: 资源类型唯一key
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 资源类型唯一key
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
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
     * ProductChName: 产品中文名称
     *
     * @return string|null
     */
    public function getProductChName()
    {
        return $this->get("ProductChName");
    }

    /**
     * ProductChName: 产品中文名称
     *
     * @param string $productChName
     */
    public function setProductChName($productChName)
    {
        $this->set("ProductChName", $productChName);
    }

    /**
     * ProductEnName: 产品英文名称
     *
     * @return string|null
     */
    public function getProductEnName()
    {
        return $this->get("ProductEnName");
    }

    /**
     * ProductEnName: 产品英文名称
     *
     * @param string $productEnName
     */
    public function setProductEnName($productEnName)
    {
        $this->set("ProductEnName", $productEnName);
    }

    /**
     * Metas: {Type: 1|2, Key:string, Name: string}[] -> JSON字符串
     *
     * @return string|null
     */
    public function getMetas()
    {
        return $this->get("Metas");
    }

    /**
     * Metas: {Type: 1|2, Key:string, Name: string}[] -> JSON字符串
     *
     * @param string $metas
     */
    public function setMetas($metas)
    {
        $this->set("Metas", $metas);
    }

    /**
     * ProductGroup: 产品分组
     *
     * @return string|null
     */
    public function getProductGroup()
    {
        return $this->get("ProductGroup");
    }

    /**
     * ProductGroup: 产品分组
     *
     * @param string $productGroup
     */
    public function setProductGroup($productGroup)
    {
        $this->set("ProductGroup", $productGroup);
    }
}
