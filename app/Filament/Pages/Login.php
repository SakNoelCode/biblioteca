<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Pages\Auth\Login as FilamentLogin;

class Login extends FilamentLogin
{
    protected static string $view = 'filament.pages.login';
}
