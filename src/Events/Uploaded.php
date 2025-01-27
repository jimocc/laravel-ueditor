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
class Uploaded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public $file;

    /**
     * @var array
     */
    public $result;

    /**
     * Uploaded constructor.
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @param array                                               $result
     */
    public function __construct(UploadedFile $file, array $result)
    {
        $this->file = $file;
        $this->result = $result;
    }
}
