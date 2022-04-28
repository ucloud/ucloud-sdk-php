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
namespace UCloud\UBill\Models;

use UCloud\Core\Response\Response;

class BillOverviewItem extends Response
{
    

    /**
     * Dimension: 账单维度, product 按产品维度聚合,project 按项目维度聚合，user 按子账号维度聚合
     *
     * @return string|null
     */
    public function getDimension()
    {
        return $this->get("Dimension");
    }

    /**
     * Dimension: 账单维度, product 按产品维度聚合,project 按项目维度聚合，user 按子账号维度聚合
     *
     * @param string $dimension
     */
    public function setDimension($dimension)
    {
        $this->set("Dimension", $dimension);
    }

    /**
     * Amount: 订单总金额
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->get("Amount");
    }

    /**
     * Amount: 订单总金额
     *
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->set("Amount", $amount);
    }

    /**
     * AmountCoupon: 代金券抵扣（已入账时显示）
     *
     * @return string|null
     */
    public function getAmountCoupon()
    {
        return $this->get("AmountCoupon");
    }

    /**
     * AmountCoupon: 代金券抵扣（已入账时显示）
     *
     * @param string $amountCoupon
     */
    public function setAmountCoupon($amountCoupon)
    {
        $this->set("AmountCoupon", $amountCoupon);
    }

    /**
     * AmountFree: 赠送金额抵扣（已入账时显示）
     *
     * @return string|null
     */
    public function getAmountFree()
    {
        return $this->get("AmountFree");
    }

    /**
     * AmountFree: 赠送金额抵扣（已入账时显示）
     *
     * @param string $amountFree
     */
    public function setAmountFree($amountFree)
    {
        $this->set("AmountFree", $amountFree);
    }

    /**
     * AmountReal: 现金账户支付（已入账时显示）
     *
     * @return string|null
     */
    public function getAmountReal()
    {
        return $this->get("AmountReal");
    }

    /**
     * AmountReal: 现金账户支付（已入账时显示）
     *
     * @param string $amountReal
     */
    public function setAmountReal($amountReal)
    {
        $this->set("AmountReal", $amountReal);
    }

    /**
     * ProductCategory: 产品分类    （账单维度按产品筛选时显示）
     *
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->get("ProductCategory");
    }

    /**
     * ProductCategory: 产品分类    （账单维度按产品筛选时显示）
     *
     * @param string $productCategory
     */
    public function setProductCategory($productCategory)
    {
        $this->set("ProductCategory", $productCategory);
    }

    /**
     * ResourceType: 产品类型   （账单维度按产品筛选时显示）
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 产品类型   （账单维度按产品筛选时显示）
     *
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ResourceTypeCode: 产品类型代码（账单维度按产品筛选时显示）
     *
     * @return integer|null
     */
    public function getResourceTypeCode()
    {
        return $this->get("ResourceTypeCode");
    }

    /**
     * ResourceTypeCode: 产品类型代码（账单维度按产品筛选时显示）
     *
     * @param int $resourceTypeCode
     */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->set("ResourceTypeCode", $resourceTypeCode);
    }

    /**
     * ProjectName: 项目名称（账单维度按项目筛选时显示）
     *
     * @return string|null
     */
    public function getProjectName()
    {
        return $this->get("ProjectName");
    }

    /**
     * ProjectName: 项目名称（账单维度按项目筛选时显示）
     *
     * @param string $projectName
     */
    public function setProjectName($projectName)
    {
        $this->set("ProjectName", $projectName);
    }

    /**
     * UserEmail: 账户邮箱（账单维度按子账号筛选时显示）
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->get("UserEmail");
    }

    /**
     * UserEmail: 账户邮箱（账单维度按子账号筛选时显示）
     *
     * @param string $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->set("UserEmail", $userEmail);
    }

    /**
     * UserName: 账户名   （账单维度按子账号筛选时显示）
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->get("UserName");
    }

    /**
     * UserName: 账户名   （账单维度按子账号筛选时显示）
     *
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->set("UserName", $userName);
    }

    /**
     * UserDisplayName: 账户昵称（账单维度按子账号筛选时显示）
     *
     * @return string|null
     */
    public function getUserDisplayName()
    {
        return $this->get("UserDisplayName");
    }

    /**
     * UserDisplayName: 账户昵称（账单维度按子账号筛选时显示）
     *
     * @param string $userDisplayName
     */
    public function setUserDisplayName($userDisplayName)
    {
        $this->set("UserDisplayName", $userDisplayName);
    }

    /**
     * Admin: 该账户是否为主账号，1 主账号，0 子账号（账单维度按子账号筛选时显示）
     *
     * @return integer|null
     */
    public function getAdmin()
    {
        return $this->get("Admin");
    }

    /**
     * Admin: 该账户是否为主账号，1 主账号，0 子账号（账单维度按子账号筛选时显示）
     *
     * @param int $admin
     */
    public function setAdmin($admin)
    {
        $this->set("Admin", $admin);
    }
}
