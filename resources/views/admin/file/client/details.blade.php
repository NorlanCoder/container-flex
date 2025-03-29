@extends('admin.template')

@section('title', 'Details')

@section('dashboard', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex flex-row justify-between items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Clients Détails
            </h2>
        </div>

        <!-- New Table -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des Gains
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Montant</th>
                            <th class="px-4 py-3">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($gains))
                            @foreach ($gains as $key=>$gain)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{ $key + 1 }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $gain->montant }} €</td>
                                    <td class="dark:text-white text-black p-4">@if ($gain->status) Non recharger @else Recharger @endif</td>
                                    {{-- <td class="dark:text-white text-black p-4"><a
                                            href="{{ route('adminevenementedit', $evenement->id) }}"
                                            class="dark:text-[#444] text-dark">Modifier</a></td> --}}
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Table -->
        <h4 class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des Bonus
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Montant</th>
                            <th class="px-4 py-3">Type</th>
                            <th class="px-4 py-3">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($bonus))
                            @foreach ($bonus as $key=>$bonu)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{ $key + 1 }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $bonu->montant }} €</td>
                                    <td class="dark:text-white text-black p-4">{{ $bonu->type }}</td>
                                    <td class="dark:text-white text-black p-4">@if ($bonu->status) Non recharger @else Recharger @endif</td>
                                    {{-- <td class="dark:text-white text-black p-4"><a
                                            href="{{ route('adminevenementedit', $evenement->id) }}"
                                            class="dark:text-[#444] text-dark">Modifier</a></td> --}}
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Table -->
        <h4 class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des Dépôts
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Montant</th>
                            <th class="px-4 py-3">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($depots))
                            @foreach ($depots as $key=>$depot)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{ $key + 1 }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $depot->montant }} €</td>
                                    <td class="dark:text-white text-black p-4">@if ($depot->status) Succès @else Echec @endif</td>
                                    {{-- <td class="dark:text-white text-black p-4"><a
                                            href="{{ route('adminevenementedit', $evenement->id) }}"
                                            class="dark:text-[#444] text-dark">Modifier</a></td> --}}
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Table -->
        <h4 class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des Investissements
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Montant</th>
                            <th class="px-4 py-3">Gain total</th>
                            <th class="px-4 py-3">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($invests))
                            @foreach ($invests as $key=>$invest)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{ $key + 1 }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $invest->montant }} €</td>
                                    <td class="dark:text-white text-black p-4">{{ $invest->gain_total }} €</td>
                                    <td class="dark:text-white text-black p-4">@if ($invest->status) En cours @else Terminer @endif</td>
                                    {{-- <td class="dark:text-white text-black p-4"><a
                                            href="{{ route('adminevenementedit', $evenement->id) }}"
                                            class="dark:text-[#444] text-dark">Modifier</a></td> --}}
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Table -->
        <h4 class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des Retraits
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Montant</th>
                            <th class="px-4 py-3">Statut</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($retraits))
                            @foreach ($retraits as $key=>$retrait)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{ $key + 1 }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $retrait->montant }} €</td>
                                    <td class="dark:text-white text-black p-4">@if ($retrait->status) Effectué @else En cours @endif</td>
                                    <td class="dark:text-white text-black p-4">
                                        @if(!$retrait->status) <a href="{{route('adminmarkretrait',$retrait->id)}}" class="dark:text-[#444] text-dark bg-blue-500 rounded-xl px-4 py-2">Valider</a>  @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <a href="{{route('admindeleteuser',$user->id)}}" style="background-color: red; width: 250px; border-radius: 10px;" class="text-white text-center px-4 py-2 mt-5">Supprimer cet utilisateur</a>
    </div>
@endsection

@section('script')

@endsection
