@extends('layouts.base');
@section('content')
    @php

    @endphp
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid py-6 " style="background-color: #0ea5e9">
            <form action="{{ route('univs.update', $univ->id) }}" method="POST" class="mt-6">
                @method('PUT')
                @csrf
                <h4 class="mb-4 font-semibold text-white">
                    Modifier l'université {{ $univ->univ_name }}
                </h4>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    
                    <div style="display:flex;">
                        <label class="block text-sm" for="univ_name" style="margin-right: 20px;">
                            <span class="text-gray-700 dark:text-gray-400 text-base">
                                Designation
                            </span> 
                            <input required value="{{ $univ->univ_name }}"
                                class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Université de Lomé" name="univ_name" id="univ_name" />
                        </label>
                    
                        <label class="block text-sm" for="description">
                            <span class="text-gray-700 dark:text-gray-400 text-base">
                                Description
                            </span> 
                            <textarea name="description" cols="50" rows="5" required value="{{ $univ->description }}"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                 ></textarea>
                        </label>
                    </div>
                    
                    <label class="block text-sm" for="logo">
                        <span class="text-gray-700 dark:text-gray-400 text-base">
                            Logo
                        </span>
                        <input accept="image/*" type="file" value="{{ $univ->logo }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="logo" id="logo" />
                    </label>
                    <div class="mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400 text-base">
                            Type d'université
                        </span>
                        <div class="mt-2">
                            <label for="type" class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                <input type="radio" value="{{ $univ->type }}"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="type" {{ $univ->type === 'Publique' ? 'checked' : '' }} />
                                <span class="ml-2">Publique</span>
                            </label>
                            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                <input type="radio" value="{{ $univ->type }}"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="type" {{ $univ->type === 'Privée' ? 'checked' : '' }} />
                                <span class="ml-2">Privée</span>
                            </label>


                            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                <input type="radio" value="{{ $univ->type }}"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="type" {{ $univ->type === 'Mixte' ? 'checked' : '' }} />
                                <span class="ml-2">Mixte</span>
                            </label>
                        </div>
                    </div>

                    <label class="block mt-4 text-sm" for="city">
                        <span class="text-gray-700 dark:text-gray-400 text-base">
                            Ville de résidence
                        </span>
                        <select name="city"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}" {{ $univ->city_id === $city->id ? 'selected' : '' }}>
                                    {{ $city->city_name }}
                                </option>
                            @endforeach
                        </select>
                    </label>

                    <form id="contact_form" method="POST">
                        @csrf
                        <span class="text-gray-700 dark:text-gray-400 text-sm">
                            Contacts
                        </span>
                        <div id="contacts-container">
                            @foreach ($cont_decode as $contact)
                                <div class="contact">
                                    <select name="country_code"
                                        class="mr-2 bg-gray-200 border border-gray-200 rounded px-3 py-2 focus:outline-none focus:bg-white focus:border-purple-500 text-sm">
                                        <option value="+228">+228 (Togo)</option>
                                        <!-- Ajoutez d'autres codes de pays si nécessaire -->
                                    </select>

                                    <input type="text" name="contacts[]" value="{{ $contact }}" class="text-sm"
                                        placeholder="Numéro de téléphone">
                                    <button class="text-sm" type="button" onclick="removeContact(this)">Supprimer</button>

                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="text-sm" onclick="addContact()">Ajouter</button>
                        {{-- <button type="submit" class="text-sm">Enregistrer</button> --}}
                    </form>
                    <label class="block text-sm" for="address">
                        <span class="text-gray-700 dark:text-gray-400">Adresse</span>
                        <input value="{{ $univ->address }}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Agoe Telessou, derriere usine beau caillou" name="address" id="address" />
                    </label>
                    <div id="mails-container">
                        <label for="mails">Mails</label>
                        @if (is_array($univ->mails))
                            @foreach ($univ->mails as $mail)
                                <div class="mail">
                                    <input type="text" value="{{ $mail }}" class="text-sm" name="mails[]"
                                        placeholder="iai-togo.tg">
                                    <button type="button" class="text-sm" onclick="removeMail(this)">Supprimer</button>
                                </div>
                            @endforeach
                        @else
                            <input type="text" name="mails[]" value="{{ $mail_dec }}">
                        @endif
                    </div>
                    <button type="button" onclick="addMail()">Ajouter</button>
                    <div id="formations-container">
                        <label for="formations">Formations</label>
                        @foreach ($univ->formations as $formation)
                            <div class="formation">
                                <input class="text-sm" type="text" value="{{ $formation }}" name="formations[]"
                                    placeholder="Licence en Télécommunications">
                                <button class="text-sm" type="button" onclick="removeFormation(this)">Supprimer</button>
                            </div>
                        @endforeach

                    </div>
                    <button type="button" onclick="addFormation()">Ajouter</button>

                    <div id="sites-container">
                        <label for="websites">Sites</label>
                        @if (is_array($univ->websites))
                            @foreach ($univ->websites as $site)
                                <div class="site">
                                    <input class="text-sm" type="text" value="{{ $site }}" name="websites[]"
                                        placeholder="example@gmailcom">
                                    <button class="text-sm" type="button"
                                        onclick="removeWebsite(this)">Supprimer</button>
                                </div>
                            @endforeach
                        @else
                            <input type="text" name="websites[]" value="{{ $web_dec }}">
                        @endif


                    </div>
                    <button type="button" onclick="addWebsite()">Ajouter</button>

                    <br>
                    <div class="flex justify-center items-center">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-6 rounded">
                            Modifier
                        </button>
                    </div>
                </div>

                {{-- <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Mail</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                placeholder="iai-togo.com" />
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Icon right</span>
                        <!-- focus-within sets the color for the icon when input is focused -->
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input
                                class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                placeholder="Jane Doe" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </label>
                </div>

                <!-- Inputs with buttons -->
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Buttons
                </h4>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            Button left
                        </span>
                        <div class="relative">
                            <input
                                class="block w-full pl-20 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                placeholder="Jane Doe" />
                            <button
                                class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-l-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                Click
                            </button>
                        </div>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            Button right
                        </span>
                        <div class="relative text-gray-500 focus-within:text-purple-600">
                            <input
                                class="block w-full pr-20 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                placeholder="Jane Doe" />
                            <button
                                class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Click
                            </button>
                        </div>
                    </label>
                </div> --}}
            </form>
        </div>
    </main>
    <script>
        function addContact() {
            const container = document.getElementById('contacts-container');
            const newContact = document.createElement('div');
            newContact.classList.add('contact');
            newContact.innerHTML = `
            <select name="country_code" class="mr-2 bg-gray-200 border border-gray-200 rounded px-3 py-2 focus:outline-none focus:bg-white focus:border-purple-500 text-sm">
                                    <option value="+228">+228 (Togo)</option>
                                    <!-- Ajoutez d'autres codes de pays si nécessaire -->
                                </select>
          <input type="text" class="text-sm" name="contacts[]" placeholder="Numéro de téléphone">
          <button class="text-sm" type="button" onclick="removeContact(this)">Supprimer</button>
          `;
            container.appendChild(newContact);
        }

        function removeContact(button) {
            button.parentNode.remove();
        }
    </script>

    <script>
        function addMail() {
            const container = document.getElementById('mails-container');
            const newMail = document.createElement('div');
            newMail.classList.add('mail');
            newMail.innerHTML = `
            <input type="text" name="mails[]" placeholder="Mail">
            <button type="button" onclick="removeMail(this)">Supprimer</button>`;
            container.appendChild(newMail);
        }

        function removeMail(button) {
            button.parentNode.remove();
        }
    </script>


    <script>
        function addFormation() {
            const container = document.getElementById('formations-container');
            const newFormation = document.createElement('div');
            newFormation.classList.add('formation');
            newFormation.innerHTML = `
            <input type="text" name="formations[]" placeholder="Licence en Télécommunications">
            <button type="button" onclick="removeFormation(this)">Supprimer</button>
        `;
            container.appendChild(newFormation);
        }

        function removeFormation(button) {
            button.parentNode.remove();
        }
    </script>



    <script>
        function addWebsite() {
            const container = document.getElementById('sites-container');
            const newSite = document.createElement('div');
            newSite.classList.add('site');
            newSite.innerHTML = `
            <input type="text" name="websites[]" placeholder="example@gmailcom">
            <button type="button" onclick="removeWebsite(this)">Supprimer</button>`;
            container.appendChild(newSite);
        }

        function removeWebsite(button) {
            button.parentNode.remove();
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact_form');
            const phoneInput = form.querySelector('input[name="contacts"]');

            form.addEventListener('submit', function(event) {
                const phoneNumber = phoneInput.value.trim();
                const phoneRegex =
                    /^\+228\d{8}$/; // Expression régulière pour les numéros de téléphone du Togo

                if (!phoneRegex.test(phoneNumber)) {
                    alert("Veuillez saisir un numéro de téléphone valide du Togo.");
                    event.preventDefault(); // Empêcher l'envoi du formulaire
                }
            });
        });
    </script>
@endsection
