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

class ModelTypeMap extends Response
{
    

    /**
     * TextGeneration: 文生文模型，true 表示是文生文模型，下同
     *
     * @return boolean|null
     */
    public function getTextGeneration()
    {
        return $this->get("TextGeneration");
    }

    /**
     * TextGeneration: 文生文模型，true 表示是文生文模型，下同
     *
     * @param boolean $textGeneration
     */
    public function setTextGeneration($textGeneration)
    {
        $this->set("TextGeneration", $textGeneration);
    }

    /**
     * ImageToImage: 图生图模型
     *
     * @return boolean|null
     */
    public function getImageToImage()
    {
        return $this->get("ImageToImage");
    }

    /**
     * ImageToImage: 图生图模型
     *
     * @param boolean $imageToImage
     */
    public function setImageToImage($imageToImage)
    {
        $this->set("ImageToImage", $imageToImage);
    }

    /**
     * TextToImage: 文生图模型
     *
     * @return boolean|null
     */
    public function getTextToImage()
    {
        return $this->get("TextToImage");
    }

    /**
     * TextToImage: 文生图模型
     *
     * @param boolean $textToImage
     */
    public function setTextToImage($textToImage)
    {
        $this->set("TextToImage", $textToImage);
    }

    /**
     * TextToVideo: 文生视频模型
     *
     * @return boolean|null
     */
    public function getTextToVideo()
    {
        return $this->get("TextToVideo");
    }

    /**
     * TextToVideo: 文生视频模型
     *
     * @param boolean $textToVideo
     */
    public function setTextToVideo($textToVideo)
    {
        $this->set("TextToVideo", $textToVideo);
    }

    /**
     * ImageToVideo: 图生视频模型
     *
     * @return boolean|null
     */
    public function getImageToVideo()
    {
        return $this->get("ImageToVideo");
    }

    /**
     * ImageToVideo: 图生视频模型
     *
     * @param boolean $imageToVideo
     */
    public function setImageToVideo($imageToVideo)
    {
        $this->set("ImageToVideo", $imageToVideo);
    }

    /**
     * Sensitive: 海外模型
     *
     * @return boolean|null
     */
    public function getSensitive()
    {
        return $this->get("Sensitive");
    }

    /**
     * Sensitive: 海外模型
     *
     * @param boolean $sensitive
     */
    public function setSensitive($sensitive)
    {
        $this->set("Sensitive", $sensitive);
    }

    /**
     * Inference: 微调模型
     *
     * @return boolean|null
     */
    public function getInference()
    {
        return $this->get("Inference");
    }

    /**
     * Inference: 微调模型
     *
     * @param boolean $inference
     */
    public function setInference($inference)
    {
        $this->set("Inference", $inference);
    }
}
