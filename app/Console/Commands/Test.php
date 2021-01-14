<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\Route\RouteController;

class Test extends Command
{
    /**
     * 命令識別名稱
     *
     * @var string
     */
    protected $signature = 'zh:test';

    /**
     * 命令描述
     *
     * @var string
     */
    protected $description = '自訂測試指令';

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
        $this->warn('測試');
    }
}
