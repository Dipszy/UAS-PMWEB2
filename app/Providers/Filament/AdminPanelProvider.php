<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                $user = Auth::user();
                if (!$user) return $builder;

                $groups = [];

                // Dashboard
                $groups[] = NavigationGroup::make()->items([
                    NavigationItem::make('Dashboard')
                        ->icon('heroicon-o-home')
                        ->url(route('filament.admin.pages.dashboard'))
                        ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.pages.dashboard')),
                ]);

                if ($user->role === 'Admin') {
                    $groups[] = NavigationGroup::make('Data Parkir')->items([
                        NavigationItem::make('Jenis Kendaraan')
                            ->icon('heroicon-o-tag')
                            ->url(route('filament.admin.resources.jenis.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.jenis.*')),

                        NavigationItem::make('Kampus')
                            ->icon('heroicon-o-building-office')
                            ->url(route('filament.admin.resources.kampuses.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kampuses.*')),

                        NavigationItem::make('Kendaraan')
                            ->icon('heroicon-o-truck')
                            ->url(route('filament.admin.resources.kendaraans.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kendaraans.*')),

                        NavigationItem::make('Area Parkir')
                            ->icon('heroicon-o-map-pin')
                            ->url(route('filament.admin.resources.parkirs.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.parkirs.*')),
                    ]);

                    $groups[] = NavigationGroup::make('Transaksi')->items([
                        NavigationItem::make('Transaksi Parkir')
                            ->icon('heroicon-o-currency-dollar')
                            ->url(route('filament.admin.resources.transaksis.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.transaksis.*')),
                    ]);

                    $groups[] = NavigationGroup::make('Manajemen User')->items([
                        NavigationItem::make('Users')
                            ->icon('heroicon-o-users')
                            ->url(route('filament.admin.resources.users.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.users.*')),
                    ]);
                }

                elseif ($user->role === 'Pegawai') {
                    $groups[] = NavigationGroup::make('Data Parkir')->items([
                        NavigationItem::make('Kendaraan')
                            ->icon('heroicon-o-truck')
                            ->url(route('filament.admin.resources.kendaraans.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kendaraans.*')),

                        NavigationItem::make('Transaksi Parkir')
                            ->icon('heroicon-o-currency-dollar')
                            ->url(route('filament.admin.resources.transaksis.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.transaksis.*')),
                    ]);

                    $groups[] = NavigationGroup::make('Master Terbatas')->items([
                        NavigationItem::make('Kampus')
                            ->icon('heroicon-o-building-office')
                            ->url(route('filament.admin.resources.kampuses.index'))
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.kampuses.*')),
                    ]);
                }

                return $builder->groups($groups);
            });
    }
}
