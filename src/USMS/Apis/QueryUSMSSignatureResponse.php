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

namespace UCloud\USMS\Apis;

use UCloud\Core\Response\Response;

use UCloud\USMS\Models\OutSignature;

class QueryUSMSSignatureResponse extends Response
{

    /**
     * Data: 签名信息
     *
     * @return OutSignatureModel|null
     */
    public function getData()
    {
        return new OutSignatureModel($this->get("Data"));
    }

    /**
     * Data: 签名信息
     *
     * @param OutSignatureModel $data
     */
    public function setData(OutSignatureModel $data)
    {
        $this->set("Data", $data->getAll());
    }
}
