<?php

/*
 * This file is part of the Jimocc/laravel-ueditor.
 *
 * (c) Jimocc <i@Jimocc.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jimocc\LaravelUEditor\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Uploading.
 *
 * @author Jimocc <i@Jimocc.me>
 */
class Uploading
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public $file;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var array
     */
    public $config;

    /**
     * Uploading constructor.
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @param                                                     $filename
     * @param array                                               $config
     */
    public function __construct(UploadedFile $file, $filename, array $config)
    {
        $this->file = $file;
        $this->filename = $filename;
        $this->config = $config;
    }
}
