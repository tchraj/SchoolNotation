<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #6b46c1;">
        <div style="background-color: #ffffff; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.375rem; padding: 2rem; max-width: 24rem;">
            <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; text-align: center; color: #6b46c1;">Connexion</h2>
    
            <form method="POST" action="{{ route('login') }}" style="margin-bottom: 1rem;">
                @csrf
    
                <!-- Email Address -->
                <div style="margin-bottom: 1rem;">
                    <label for="email" style="color: #6b46c1; font-weight: bold;">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        style="display: block; width: 100%; padding: 0.5rem; border: 1px solid #e5e7eb; border-radius: 0.375rem; margin-top: 0.25rem; font-size: 1rem;"
                        required autofocus autocomplete="username" placeholder="Votre email">
                    @error('email')
                        <span style="color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <!-- Password -->
                <div style="margin-bottom: 1rem;">
                    <label for="password" style="color: #6b46c1; font-weight: bold;">Mot de passe</label>
                    <input id="password" type="password" name="password"
                        style="display: block; width: 100%; padding: 0.5rem; border: 1px solid #e5e7eb; border-radius: 0.375rem; margin-top: 0.25rem; font-size: 1rem;"
                        required autocomplete="current-password" placeholder="Votre mot de passe">
                    @error('password')
                        <span style="color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <!-- Remember Me -->
                <div style="margin-bottom: 1rem; display: flex; justify-content: space-between; align-items: center;">
                    <label for="remember_me" style="display: inline-flex; align-items: center;">
                        <input id="remember_me" type="checkbox" name="remember"
                            style="border: 1px solid #d1d5db; border-radius: 0.375rem; margin-right: 0.375rem;">
                        <span style="color: #6b46c1; font-size: 0.875rem;">Se souvenir de moi</span>
                    </label>
    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            style="color: #6b46c1; font-size: 0.875rem; text-decoration: none; border-bottom: 1px solid transparent; transition: border-color 0.2s;">
                            Mot de passe oublié?
                        </a>
                    @endif
                </div>
    
                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit"
                        style="background-color: #6b46c1; color: #ffffff; border: none; border-radius: 0.375rem; padding: 0.5rem 1rem; font-size: 1rem; cursor: pointer; transition: background-color 0.2s;">Se
                        connecter</button>
                </div>
            </form>
        </div>
    </div>
    
</x-guest-layout>
