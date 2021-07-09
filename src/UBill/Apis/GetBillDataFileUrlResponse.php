<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UBill\Apis;

use UCloud\Core\Response\Response;

class GetBillDataFileUrlResponse extends Response
{
    

    /**
     * FileUrl: 交易账单数据下载URL
     *
     * @return string|null
     */
    public function getFileUrl(): string
    {
        return $this->get("FileUrl");
    }

    /**
     * FileUrl: 交易账单数据下载URL
     *
     * @param string $fileUrl
     */
    public function setFileUrl(string $fileUrl)
    {
        $this->set("FileUrl", $fileUrl);
    }

    /**
     * IsValid: 生成的 URL是否有效，即有对应数据文件
     *
     * @return string|null
     */
    public function getIsValid(): string
    {
        return $this->get("IsValid");
    }

    /**
     * IsValid: 生成的 URL是否有效，即有对应数据文件
     *
     * @param string $isValid
     */
    public function setIsValid(string $isValid)
    {
        $this->set("IsValid", $isValid);
    }
}
