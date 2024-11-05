<?php

namespace App\Http\Controllers\admin\system;

use App\Http\Controllers\common\AdminController;
use App\Http\Services\annotation\NodeAnnotation;
use App\Http\Services\annotation\ControllerAnnotation;

/**
 * @ControllerAnnotation(title="system_menu")
 */
class MenuController extends AdminController
{

    private array $notes;

    public function initialize()
    {
        parent::initialize();
        $this->model = new \App\Models\SystemMenu();
        $this->notes = $notes = $this->model->notes;
        $this->assign(compact('notes'));
    }

}
