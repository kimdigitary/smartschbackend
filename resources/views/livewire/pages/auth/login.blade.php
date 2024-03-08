<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: true);
};

?>

{{-- <div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div> --}}

<div class="row justify-content-center h-100 align-items-center">
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <div class="text-center mb-3" style="display: flex; justify-content: center; align-items: center;">
                            <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form wire:submit="login">
                            <div class="mb-3">
                                <label class="mb-1"><strong>Email</strong></label>
                                <input type="email" wire:model="form.email" id="email" name="email" class="form-control" placeholder="hello@example.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label class="mb-1"><strong>Password</strong></label>
                                <input type="password" class="form-control" wire:model="form.password" id="password" name="password" placeholder="Password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="row d-flex justify-content-between mt-4 mb-2">
                                <div class="mb-3">
                                   <div class="form-check custom-checkbox ms-1">
                                        <input wire:model="form.remember" id="remember" type="checkbox" class="form-check-input">
                                        <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                <div class="mb-3">
                                    <a href="{{ route('password.request') }}" wire:navigate>Forgot Password?</a>
                                </div>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
