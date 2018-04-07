<?php namespace Agung\Agunggram;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
        'Agung\Agunggram\Components\UploadForm' => 'uploadform'
        ];
    }

    public function registerSettings()
    {
    }
}
