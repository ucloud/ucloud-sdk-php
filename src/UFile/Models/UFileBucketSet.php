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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class UFileBucketSet extends Response
{
    

    /**
     * Region: Bucket所属地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: Bucket所属地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * BucketName: Bucket名称
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: Bucket名称
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * BucketId: Bucket的ID
     *
     * @return string|null
     */
    public function getBucketId()
    {
        return $this->get("BucketId");
    }

    /**
     * BucketId: Bucket的ID
     *
     * @param string $bucketId
     */
    public function setBucketId($bucketId)
    {
        $this->set("BucketId", $bucketId);
    }

    /**
     * Domain: Bucket的域名集合 参数见 UFileDomainSet
     *
     * @return UFileDomainSet|null
     */
    public function getDomain()
    {
        return new UFileDomainSet($this->get("Domain"));
    }

    /**
     * Domain: Bucket的域名集合 参数见 UFileDomainSet
     *
     * @param UFileDomainSet $domain
     */
    public function setDomain(array $domain)
    {
        $this->set("Domain", $domain->getAll());
    }

    /**
     * CdnDomainId: 与Bucket关联的CND加速域名的ID列表
     *
     * @return string[]|null
     */
    public function getCdnDomainId()
    {
        return $this->get("CdnDomainId");
    }

    /**
     * CdnDomainId: 与Bucket关联的CND加速域名的ID列表
     *
     * @param string[] $cdnDomainId
     */
    public function setCdnDomainId(array $cdnDomainId)
    {
        $this->set("CdnDomainId", $cdnDomainId);
    }

    /**
     * Type: Bucket访问类型
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: Bucket访问类型
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * CreateTime: Bucket的创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: Bucket的创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: Bucket的修改时间
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: Bucket的修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * Biz: Bucket所属业务, general或vod或udb general: 普通业务； vod: 视频云业务; udb: 云数据库业务
     *
     * @return string|null
     */
    public function getBiz()
    {
        return $this->get("Biz");
    }

    /**
     * Biz: Bucket所属业务, general或vod或udb general: 普通业务； vod: 视频云业务; udb: 云数据库业务
     *
     * @param string $biz
     */
    public function setBiz($biz)
    {
        $this->set("Biz", $biz);
    }

    /**
     * Tag: 所属业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 所属业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * HasUserDomain: 是否存在自定义域名。0不存在，1存在，2错误
     *
     * @return integer|null
     */
    public function getHasUserDomain()
    {
        return $this->get("HasUserDomain");
    }

    /**
     * HasUserDomain: 是否存在自定义域名。0不存在，1存在，2错误
     *
     * @param int $hasUserDomain
     */
    public function setHasUserDomain($hasUserDomain)
    {
        $this->set("HasUserDomain", $hasUserDomain);
    }
}
