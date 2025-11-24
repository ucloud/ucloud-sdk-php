<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class CompShareImage extends Response
{
    

    /**
     * CompShareImageId: 镜像Id
     *
     * @return string|null
     */
    public function getCompShareImageId()
    {
        return $this->get("CompShareImageId");
    }

    /**
     * CompShareImageId: 镜像Id
     *
     * @param string $compShareImageId
     */
    public function setCompShareImageId($compShareImageId)
    {
        $this->set("CompShareImageId", $compShareImageId);
    }

    /**
     * Name: 镜像名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 镜像名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Author: 镜像作者昵称
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->get("Author");
    }

    /**
     * Author: 镜像作者昵称
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->set("Author", $author);
    }

    /**
     * AuthInfo: 镜像作者认证信息
     *
     * @return integer|null
     */
    public function getAuthInfo()
    {
        return $this->get("AuthInfo");
    }

    /**
     * AuthInfo: 镜像作者认证信息
     *
     * @param int $authInfo
     */
    public function setAuthInfo($authInfo)
    {
        $this->set("AuthInfo", $authInfo);
    }

    /**
     * ImageOwnerAlias: 镜像来源。- Official 平台镜像；- Community 社区镜像
     *
     * @return string|null
     */
    public function getImageOwnerAlias()
    {
        return $this->get("ImageOwnerAlias");
    }

    /**
     * ImageOwnerAlias: 镜像来源。- Official 平台镜像；- Community 社区镜像
     *
     * @param string $imageOwnerAlias
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        $this->set("ImageOwnerAlias", $imageOwnerAlias);
    }

    /**
     * ImageType: 镜像类型。- System 平台提供的公共镜像；- App 平台提供的应用镜像；- Custom 自制镜像；- Community 社区镜像
     *
     * @return string|null
     */
    public function getImageType()
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类型。- System 平台提供的公共镜像；- App 平台提供的应用镜像；- Custom 自制镜像；- Community 社区镜像
     *
     * @param string $imageType
     */
    public function setImageType($imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * IsOfficial: 来源是否为官方镜像【仅自制镜像信息返回该字段】
     *
     * @return boolean|null
     */
    public function getIsOfficial()
    {
        return $this->get("IsOfficial");
    }

    /**
     * IsOfficial: 来源是否为官方镜像【仅自制镜像信息返回该字段】
     *
     * @param boolean $isOfficial
     */
    public function setIsOfficial($isOfficial)
    {
        $this->set("IsOfficial", $isOfficial);
    }

    /**
     * Container: 是否为容器镜像。- True 容器镜像- False 虚机镜像
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->get("Container");
    }

    /**
     * Container: 是否为容器镜像。- True 容器镜像- False 虚机镜像
     *
     * @param string $container
     */
    public function setContainer($container)
    {
        $this->set("Container", $container);
    }

    /**
     * Status: 镜像状态。- Making 制作中；- Available 可用；- UnAvailable 不可用；- Reviewing 审核中;- Offline 已下线
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 镜像状态。- Making 制作中；- Available 可用；- UnAvailable 不可用；- Reviewing 审核中;- Offline 已下线
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * Size: 镜像大小。单位MB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 镜像大小。单位MB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Visibility: 可见性。0：私密镜像；1：公开至镜像社区
     *
     * @return integer|null
     */
    public function getVisibility()
    {
        return $this->get("Visibility");
    }

    /**
     * Visibility: 可见性。0：私密镜像；1：公开至镜像社区
     *
     * @param int $visibility
     */
    public function setVisibility($visibility)
    {
        $this->set("Visibility", $visibility);
    }

    /**
     * Description: 镜像描述信息
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 镜像描述信息
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * Tags: 【array of string】镜像标签
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->get("Tags");
    }

    /**
     * Tags: 【array of string】镜像标签
     *
     * @param string[] $tags
     */
    public function setTags(array $tags)
    {
        $this->set("Tags", $tags);
    }

    /**
     * Price: 镜像价格。单位：元
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get("Price");
    }

    /**
     * Price: 镜像价格。单位：元
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->set("Price", $price);
    }

    /**
     * Cover: 镜像封面URL
     *
     * @return string|null
     */
    public function getCover()
    {
        return $this->get("Cover");
    }

    /**
     * Cover: 镜像封面URL
     *
     * @param string $cover
     */
    public function setCover($cover)
    {
        $this->set("Cover", $cover);
    }

    /**
     * Readme: 镜像详细描述。仅指定镜像Id查询时返回
     *
     * @return string|null
     */
    public function getReadme()
    {
        return $this->get("Readme");
    }

    /**
     * Readme: 镜像详细描述。仅指定镜像Id查询时返回
     *
     * @param string $readme
     */
    public function setReadme($readme)
    {
        $this->set("Readme", $readme);
    }

    /**
     * Softwares: 镜像软件信息
     *
     * @return Software|null
     */
    public function getSoftwares()
    {
        return new Software($this->get("Softwares"));
    }

    /**
     * Softwares: 镜像软件信息
     *
     * @param Software $softwares
     */
    public function setSoftwares(array $softwares)
    {
        $this->set("Softwares", $softwares->getAll());
    }

    /**
     * CreatedCount: 镜像引用创建计数
     *
     * @return integer|null
     */
    public function getCreatedCount()
    {
        return $this->get("CreatedCount");
    }

    /**
     * CreatedCount: 镜像引用创建计数
     *
     * @param int $createdCount
     */
    public function setCreatedCount($createdCount)
    {
        $this->set("CreatedCount", $createdCount);
    }

    /**
     * FavoritesCount: 镜像收藏计数
     *
     * @return integer|null
     */
    public function getFavoritesCount()
    {
        return $this->get("FavoritesCount");
    }

    /**
     * FavoritesCount: 镜像收藏计数
     *
     * @param int $favoritesCount
     */
    public function setFavoritesCount($favoritesCount)
    {
        $this->set("FavoritesCount", $favoritesCount);
    }

    /**
     * FailedReason: 镜像制作失败错误原因
     *
     * @return string|null
     */
    public function getFailedReason()
    {
        return $this->get("FailedReason");
    }

    /**
     * FailedReason: 镜像制作失败错误原因
     *
     * @param string $failedReason
     */
    public function setFailedReason($failedReason)
    {
        $this->set("FailedReason", $failedReason);
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * PubTime: 发布时间戳
     *
     * @return integer|null
     */
    public function getPubTime()
    {
        return $this->get("PubTime");
    }

    /**
     * PubTime: 发布时间戳
     *
     * @param int $pubTime
     */
    public function setPubTime($pubTime)
    {
        $this->set("PubTime", $pubTime);
    }

    /**
     * Owner: 镜像所属账号信息
     *
     * @return Projects|null
     */
    public function getOwner()
    {
        return new Projects($this->get("Owner"));
    }

    /**
     * Owner: 镜像所属账号信息
     *
     * @param Projects $owner
     */
    public function setOwner(array $owner)
    {
        $this->set("Owner", $owner->getAll());
    }

    /**
     * GroupId: 镜像组id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 镜像组id
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * VersionName: 版本名称
     *
     * @return string|null
     */
    public function getVersionName()
    {
        return $this->get("VersionName");
    }

    /**
     * VersionName: 版本名称
     *
     * @param string $versionName
     */
    public function setVersionName($versionName)
    {
        $this->set("VersionName", $versionName);
    }

    /**
     * VersionDesc: 版本描述
     *
     * @return string|null
     */
    public function getVersionDesc()
    {
        return $this->get("VersionDesc");
    }

    /**
     * VersionDesc: 版本描述
     *
     * @param string $versionDesc
     */
    public function setVersionDesc($versionDesc)
    {
        $this->set("VersionDesc", $versionDesc);
    }

    /**
     * SourceGpuType: 自制镜像来源机型
     *
     * @return string|null
     */
    public function getSourceGpuType()
    {
        return $this->get("SourceGpuType");
    }

    /**
     * SourceGpuType: 自制镜像来源机型
     *
     * @param string $sourceGpuType
     */
    public function setSourceGpuType($sourceGpuType)
    {
        $this->set("SourceGpuType", $sourceGpuType);
    }

    /**
     * AutoStart: 是否支持自启动 default:false
     *
     * @return boolean|null
     */
    public function getAutoStart()
    {
        return $this->get("AutoStart");
    }

    /**
     * AutoStart: 是否支持自启动 default:false
     *
     * @param boolean $autoStart
     */
    public function setAutoStart($autoStart)
    {
        $this->set("AutoStart", $autoStart);
    }

    /**
     * ImageCharge: 是否镜像收费  default: false
     *
     * @return boolean|null
     */
    public function getImageCharge()
    {
        return $this->get("ImageCharge");
    }

    /**
     * ImageCharge: 是否镜像收费  default: false
     *
     * @param boolean $imageCharge
     */
    public function setImageCharge($imageCharge)
    {
        $this->set("ImageCharge", $imageCharge);
    }

    /**
     * ImageUseTime: 镜像使用时长
     *
     * @return integer|null
     */
    public function getImageUseTime()
    {
        return $this->get("ImageUseTime");
    }

    /**
     * ImageUseTime: 镜像使用时长
     *
     * @param int $imageUseTime
     */
    public function setImageUseTime($imageUseTime)
    {
        $this->set("ImageUseTime", $imageUseTime);
    }
}
