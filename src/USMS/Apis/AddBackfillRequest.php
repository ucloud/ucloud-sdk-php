<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class AddBackfillRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddBackfill"]);
        $this->markRequired("ProjectId");
        $this->markRequired("SendNo");
        $this->markRequired("Target");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SendNo: 发送Number，记录一次发送请求的唯一性
     *
     * @return string|null
     */
    public function getSendNo()
    {
        return $this->get("SendNo");
    }

    /**
     * SendNo: 发送Number，记录一次发送请求的唯一性
     *
     * @param string $sendNo
     */
    public function setSendNo($sendNo)
    {
        $this->set("SendNo", $sendNo);
    }

    /**
     * Target: 短信的接收目标,手机号需要添加国家码，比如(1)231xxxx
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->get("Target");
    }

    /**
     * Target: 短信的接收目标,手机号需要添加国家码，比如(1)231xxxx
     *
     * @param string $target
     */
    public function setTarget($target)
    {
        $this->set("Target", $target);
    }

    /**
     * BackfillTime: 回填时间，秒级别时间戳
     *
     * @return integer|null
     */
    public function getBackfillTime()
    {
        return $this->get("BackfillTime");
    }

    /**
     * BackfillTime: 回填时间，秒级别时间戳
     *
     * @param int $backfillTime
     */
    public function setBackfillTime($backfillTime)
    {
        $this->set("BackfillTime", $backfillTime);
    }

    /**
     * Content: 回填内容
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->get("Content");
    }

    /**
     * Content: 回填内容
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->set("Content", $content);
    }

    /**
     * SendTime: 发送请求的时间，秒级别时间戳
     *
     * @return integer|null
     */
    public function getSendTime()
    {
        return $this->get("SendTime");
    }

    /**
     * SendTime: 发送请求的时间，秒级别时间戳
     *
     * @param int $sendTime
     */
    public function setSendTime($sendTime)
    {
        $this->set("SendTime", $sendTime);
    }
}
