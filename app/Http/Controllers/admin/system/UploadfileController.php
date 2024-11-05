<?php

namespace App\Http\Controllers\admin\system;

use App\Http\Controllers\common\AdminController;
use App\Http\Services\annotation\NodeAnnotation;
use App\Http\Services\annotation\ControllerAnnotation;

/**
 * @ControllerAnnotation(title="system_uploadfile")
 */
class UploadfileController extends AdminController
{

    private array $notes;

    public function initialize()
    {
        parent::initialize();
        $this->model = new \App\Models\SystemUploadfile();
        $this->notes = $notes = $this->model->notes;
        $this->assign(compact('notes'));
    }

}
