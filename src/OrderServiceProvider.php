<?php 

namespace Water\Vular\Order;

use Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Water\Vular\Providers\VularBaseServiceProvider;

class OrderServiceProvider extends VularBaseServiceProvider {

    protected $namespace = 'Water\Vular\Http\Controllers';
    protected $baseDir = '';


    public function boot() 
    {
        $this->loadMigrationsFrom($this->baseDir.'database/migrations/');
    }


    public function register()
    {
        $this->baseDir = __DIR__ .'/../';
        $this->registerMenuItem('Water\Vular\Order\Order\Menu');
        $this->registerMenuItem('Water\Vular\Order\Sample\Menu');
        $this->registerMenuItem('Water\Vular\Order\Common\Menu');
    }


}   