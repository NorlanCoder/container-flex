@extends('admin.template')

@section('title', 'Dashboard')

@section('dashboard', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-4 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Clients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{count($clients)}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Gains
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$gains}} €
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Bonus</p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$bonus}} €
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Investissement</p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$invests}} €
                    </p>
                </div>
            </div>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Nom</th>
                            <th class="px-4 py-3">E-mail</th>
                            <th class="px-4 py-3">Code</th>
                            <th class="px-4 py-3">Solde</th>
                            <th class="px-4 py-3">Statut</th>
                            <th class="px-4 py-3">Action</th>
                            <th class="px-4 py-3">Details</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($clients))
                            @foreach ($clients as $client)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{$client->id}}</td>
                                    <td class="dark:text-white text-black p-4">{{$client->fullname}}</td>
                                    <td class="dark:text-white text-black p-4">{{$client->email}}</td>
                                    <td class="dark:text-white text-black p-4">{{$client->code}}</td>
                                    <td class="dark:text-white text-black p-4">{{$client->solde}} €</td>
                                    <td>@if ($client->status) <span style="color: green">Compte actif</span> @else <span style="color: red">Compte inactif</span> @endif</td>
                                    <td class="dark:text-white text-black p-4">
                                        <form action="{{route('adminstoresolde',$client->id)}}" method="post">
                                            @csrf
                                            <input type="number"
                                                class="w-1/2 border border-[#444] bg-transparent text-black dark:text-white p-2"
                                                name="montant" placeholder="Montant à recharger" id="">
                                            <button type="submit" class="bg-[#444] text-white p-2 px-4">Envoyer</button>

                                        </form>
                                    </td>
                                    <td class="dark:text-white text-black p-4"><a href="{{route('admindetailspage',$client->id)}}">Détails</a></td>
                                    <td class="dark:text-white text-black p-4"><a href="{{route('admintoggleuser',$client->id)}}" class="">@if ($client->status) Désactiver @else Activer @endif</a></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- @if (count($transactions) <= 0)
                <div class="p-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800 text-center">
                    Aucune Informations
                </div>
            @endif --}}
        </div>
    </div>
@endsection

@section('script')

@endsection
