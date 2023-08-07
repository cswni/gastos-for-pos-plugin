<?php

namespace Cswni\GastosForPosPlugin;

use Cswni\GastosForPosPlugin\Resources\GastoResource;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GastosForPosPluginServiceProvider extends PluginServiceProvider
{
    public static string $name = 'gastos-for-pos-plugin';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-gastos-for-pos-plugin' => __DIR__.'/../resources/dist/gastos-for-pos.css',
    ];

    protected array $scripts = [
        'plugin-gastos-for-pos-plugin' => __DIR__.'/../resources/dist/gastos-for-pos.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-gastos-for-pos-plugin' => __DIR__ . '/../resources/dist/gastos-for-pos-plugin.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }

    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/cswni-gastos-for-pos.php', 'cswni-gastos-for-pos');
        $this->configurePublishing();
    }

    protected function configurePublishing(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/cswni-gastos-for-pos.php' => config_path('cswni-gastos-for-pos.php'),
        ], 'cswni-gastos-for-pos-config');

        $this->publishes([
            __DIR__.'/../database/migrations/2023_08_06_00000_create_gastos-for-pos-plugin_table.php' => database_path('2023_08_06_00000_create_gastos-for-pos-plugin_table.php'),
        ], 'cswni-gastos-for-pos-migrations');
    }

    protected function getResources(): array
    {
        return [
            GastoResource::class,
        ];
    }
}
