<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Xot\Services\FileService;
use Modules\Xot\Services\ArrayService;
use Modules\Lang\Datas\TranslationData;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Array\SaveArrayAction;

class PublishTranslationAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(TranslationData $translationData): void
    {
        /*
        $hints=app('translator')->getLoader()->namespaces();
        $path=collect($hints)->get($row->namespace);
        if($path==null){
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        $filename=FileService::fixPath($path.'/'.$row->lang.'/'.$row->group.'.php');
        */
        $filename = $translationData->getFilename();
        /*
        $data=[];
        if(File::exists($filename)){
            $data=File::getRequire($filename);
        }
        */
        $data = $translationData->getData();
        $data_up = $data;
        Arr::set($data_up, $translationData->item, $translationData->value);
        if ($data != $data_up) {
            app(SaveArrayAction::class)->execute(data: $data_up, filename: $filename);
        }
    }
}
