<?php


namespace Sailfish\Api\Application\Bootstrap;


use App\Console\Kernel as ConsoleKernel;
use App\Exceptions\Handler as ExceptionHandler;
use Illuminate\Contracts\Console\Kernel as ConsoleKernelInterface;
use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerInterface;
use Illuminate\Contracts\Http\Kernel as HttpKernelInterface;
use Sailfish\Rey\Kernel\Http\HttpKernel;
use Sailfish\Shared\Application\Application;

class ApiBootstrap extends Application
{
    /**
     * @return void
     */
    public function bindBaseInterfaces(): void
    {
        $this->singleton(HttpKernelInterface::class, HttpKernel::class);
        $this->singleton(ConsoleKernelInterface::class, ConsoleKernel::class);
        $this->singleton(ExceptionHandlerInterface::class, ExceptionHandler::class);
    }
}
