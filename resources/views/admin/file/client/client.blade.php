@extends('admin.template')

@section('title', 'client')

@section('client', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex flex-row justify-between items-center">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Client
        </h2>
        {{-- <a href="{{route('adminclientajout')}}" class="bg-[#444] text-white py-4 px-8">Créer une ville</a> --}}
    </div>
    <!-- New Table -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Liste des clients
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Nom</th>
                        <th class="px-4 py-3">E-mail</th>
                        <th class="px-4 py-3">Identifiant</th>
                        <th class="px-4 py-3">Solde</th>
                        <th class="px-4 py-3">Statut</th>
                        <th class="px-4 py-3">Action</th>
                        <th class="px-4 py-3">Action2</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @if (count($clients))
                    @foreach ($clients as $client)
                    <tr>
                        <td class="dark:text-white text-black p-4">{{ $client->id }}</td>
                        <td class="dark:text-white text-black p-4">{{ $client->name }}</td>
                        <td class="dark:text-white text-black p-4">{{ $client->email }}</td>
                        <td class="dark:text-white text-black p-4">{{ $client->identifiant }}</td>
                        <td class="dark:text-white text-black p-4">${{ $client->solde }}</td>
                        <td>@if ($client->status) <span style="color: green">Compte actif</span> @else <span style="color: red">Compte inactif</span> @endif</td>
                        <td class="dark:text-white text-black p-4">
                            <form action="{{ route('adminclientaddsolde', $client->id) }}" method="post">
                                @csrf
                                <input type="number"
                                    class="w-1/2 border border-[#444] bg-transparent text-black dark:text-white p-2"
                                    name="montant" placeholder="Montant à recharger" id="">
                                <button type="submit" class="bg-[#444] text-white p-2 px-4">Envoyer</button>

                            </form>
                        </td>
                        <td><a href="" class="">Désactiver/Activer</a></td>
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
            @endif
            {{$transactions->links()}} --}}



    </div>
</div>
@endsection

@section('script')

@endsection