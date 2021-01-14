<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\Route\RouteController;

class ExportRoutesToJs extends Command
{
    /**
     * 命令識別名稱
     *
     * @var string
     */
    protected $signature = 'zh-route:export';

    /**
     * 命令描述
     *
     * @var string
     */
    protected $description = '將具有別名的後端路由同步到 JavaScript 檔案，使前端能以同樣的別名呼叫路由';

    /**
     * 建立命令工作實體
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 執行命令工作
     *
     * @return mixed
     */
    public function handle()
    {
        $router = new RouteController();
        echo $router->ExportJS() . PHP_EOL;
    }
}
