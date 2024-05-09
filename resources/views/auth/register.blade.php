<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" style="margin: 8rem;">
        @csrf

        <!-- Name -->
        <div style="margin-bottom: 1rem;">
            <label for="name" style="color: #374151; font-weight: bold;">Nom d'utilisateur</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}"
                style="display: block; width: 100%; padding: 0.5rem; border: 1px solid #e5e7eb; border-radius: 0.375rem; margin-top: 0.25rem; font-size: 1rem;"
                required autofocus autocomplete="name" placeholder="Votre nom d'utilisateur">
            @error('name')
                <span style="color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem;" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Email Address -->
        <div style="margin-bottom: 1rem;">
            <label for="email" style="color: #374151; font-weight: bold;">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                style="display: block; width: 100%; padding: 0.5rem; border: 1px solid #e5e7eb; border-radius: 0.375rem; margin-top: 0.25rem; font-size: 1rem;"
                required autocomplete="username" placeholder="Votre email">
            @error('email')
                <span style="color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem;" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div style="margin-bottom: 1rem;">
            <label for="password" style="color: #374151; font-weight: bold;">Mot de passe</label>
            <input id="password" type="password" name="password"
                style="display: block; width: 100%; padding: 0.5rem; border: 1px solid #e5e7eb; border-radius: 0.375rem; margin-top: 0.25rem; font-size: 1rem;"
                required autocomplete="new-password" placeholder="Votre mot de passe">
            @error('password')
                <span style="color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem;" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div style="margin-bottom: 1rem;">
            <label for="password_confirmation" style="color: #374151; font-weight: bold;">Confirmer le mot de
                passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                style="display: block; width: 100%; padding: 0.5rem; border: 1px solid #e5e7eb; border-radius: 0.375rem; margin-top: 0.25rem; font-size: 1rem;"
                required autocomplete="new-password" placeholder="Confirmer votre mot de passe">
            @error('password_confirmation')
                <span style="color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem;" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
            <a href="{{ route('login') }}"
                style="color: #6366f1; font-size: 0.875rem; text-decoration: none; border-bottom: 1px solid transparent; transition: border-color 0.2s;">
                Déjà inscrit ?
            </a>
            <button type="submit"
                style="background-color: #6366f1; color: #ffffff; border: none; border-radius: 0.375rem; padding: 0.5rem 1rem; font-size: 1rem; cursor: pointer; transition: background-color 0.2s;">S'inscrire</button>
        </div>
    </form>

</x-guest-layout>
