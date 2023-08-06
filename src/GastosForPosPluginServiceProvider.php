<?php

namespace Cswni\GastosForPosPlugin;

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
        'plugin-gastos-for-pos-plugin' => __DIR__.'/../resources/dist/gastos-for-pos-plugin.css',
    ];

    protected array $scripts = [
        'plugin-gastos-for-pos-plugin' => __DIR__.'/../resources/dist/gastos-for-pos-plugin.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-gastos-for-pos-plugin' => __DIR__ . '/../resources/dist/gastos-for-pos-plugin.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
