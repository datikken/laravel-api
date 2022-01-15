<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait DownloadTrait
{
    public function getFilenameByLink($url): string
    {
        $var = preg_split("#/#", $url);
        return end($var);
    }

    public function download($url, $folder): void
    {
        $contents = file_get_contents($url);
        $fileName = $folder . $this->getFilenameByLink($url);

        Storage::put($fileName, $contents);
    }
}
