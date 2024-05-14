<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Array\SaveArrayAction;

class SaveTransAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $key, int|string|array|null $data): void
    {
        $filename = app(GetTransPathAction::class)->execute($key);
        $cont=File::getRequire($filename);
        $piece=implode('.',array_slice(explode('.',$key),1));
        if($piece!=""){
            Arr::set($cont,$piece,$data);
        }else{
            $cont=$data;
        }
         
        app(SaveArrayAction::class)->execute(data:$cont,filename:$filename);
       
        
    }
}
