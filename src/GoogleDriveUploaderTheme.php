<?php

namespace MhdeveloperYs\GoogleDriveUploader;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class GoogleDriveUploader implements Plugin
{
    public function getId(): string
    {
        return 'google-drive-uploader';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('google-drive-uploader', __DIR__ . '/../resources/dist/google-drive-uploader.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('google-drive-uploader');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
