<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;

class TranslationPanelPolicy extends XotBasePanelPolicy
{
    public function publishItemTrans(UserContract $userContract, PanelContract $panelContract): bool
    {
        return true;
    }

    public function publishContainerTrans(UserContract $userContract, PanelContract $panelContract): bool
    {
        return true;
    }
}
