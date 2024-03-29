<?php

namespace App\Service;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class CustomMediaPathGenerator implements PathGenerator
{
    public function getPath(Media $media) : string
    {
        return 'posts/'. $media->model_id .'/';
    }

    public function getPathForConversions(Media $media) : string
    {
        return $this->getPath($media).'c/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'/cri/';
    }
}
