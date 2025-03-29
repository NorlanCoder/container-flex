@extends('admin.template')

@section('title', 'coupon')

@section('coupon', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex flex-row justify-between items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Coupons
            </h2>
            <a href="{{ route('admincoupon') }}" class="bg-[#444] text-white py-4 px-8">Liste coupon</a>
        </div>
        <!-- New Table -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des clients du coupon ({{ $coupon->reference }})
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Nom</th>
                            <th class="px-4 py-3">Identifiant</th>
                            <th class="px-4 py-3">Solde</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if (count($clients))
                            @foreach ($clients as $client)
                                <tr>
                                    <td class="dark:text-white text-black p-4">{{ $client->id }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $client->name }}</td>
                                    <td class="dark:text-white text-black p-4">{{ $client->identifiant }}</td>
                                    <td class="dark:text-white text-black p-4">${{ $client->solde }}</td>
                                    <td class="dark:text-white text-black p-4"></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- @if (count($notifications) <= 0)
                <div class="p-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800 text-center">
                    Aucune Informations
                </div>
            @endif
            {{$notifications->links()}} --}}

        </div>
    </div>
@endsection

@section('script')

@endsection
