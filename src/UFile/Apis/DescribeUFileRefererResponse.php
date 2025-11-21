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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;

class DescribeUFileRefererResponse extends Response
{
    

    /**
     * RefererType: 防盗链Referer类型，支持两种类型，1黑名单，2白名单；未开启referer时不返回此参数
     *
     * @return integer|null
     */
    public function getRefererType()
    {
        return $this->get("RefererType");
    }

    /**
     * RefererType: 防盗链Referer类型，支持两种类型，1黑名单，2白名单；未开启referer时不返回此参数
     *
     * @param int $refererType
     */
    public function setRefererType($refererType)
    {
        $this->set("RefererType", $refererType);
    }

    /**
     * RefererList: 防盗链Referer规则列表；未开启referer时不返回此参数
     *
     * @return string[]|null
     */
    public function getRefererList()
    {
        return $this->get("RefererList");
    }

    /**
     * RefererList: 防盗链Referer规则列表；未开启referer时不返回此参数
     *
     * @param string[] $refererList
     */
    public function setRefererList(array $refererList)
    {
        $this->set("RefererList", $refererList);
    }

    /**
     * NullRefer: ReferType为白名单时，NullRefer为false代表不允许NULL refer访问，为true代表允许Null refer访问; 未开启referer时不返回此参数
     *
     * @return boolean|null
     */
    public function getNullRefer()
    {
        return $this->get("NullRefer");
    }

    /**
     * NullRefer: ReferType为白名单时，NullRefer为false代表不允许NULL refer访问，为true代表允许Null refer访问; 未开启referer时不返回此参数
     *
     * @param boolean $nullRefer
     */
    public function setNullRefer($nullRefer)
    {
        $this->set("NullRefer", $nullRefer);
    }

    /**
     * RefererStatus: 防盗链功能是否开启，"on"表示开启，"off"表示关闭
     *
     * @return string|null
     */
    public function getRefererStatus()
    {
        return $this->get("RefererStatus");
    }

    /**
     * RefererStatus: 防盗链功能是否开启，"on"表示开启，"off"表示关闭
     *
     * @param string $refererStatus
     */
    public function setRefererStatus($refererStatus)
    {
        $this->set("RefererStatus", $refererStatus);
    }

    /**
     * BlackList: 黑名单列表
     *
     * @return string[]|null
     */
    public function getBlackList()
    {
        return $this->get("BlackList");
    }

    /**
     * BlackList: 黑名单列表
     *
     * @param string[] $blackList
     */
    public function setBlackList(array $blackList)
    {
        $this->set("BlackList", $blackList);
    }

    /**
     * WhiteList: 白名单列表
     *
     * @return string[]|null
     */
    public function getWhiteList()
    {
        return $this->get("WhiteList");
    }

    /**
     * WhiteList: 白名单列表
     *
     * @param string[] $whiteList
     */
    public function setWhiteList(array $whiteList)
    {
        $this->set("WhiteList", $whiteList);
    }
}
