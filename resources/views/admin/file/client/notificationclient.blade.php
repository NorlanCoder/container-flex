@extends('admin.template')

@section('title', 'Notification')

@section('notifications', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex flex-row justify-between items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Notifications
            </h2>
            {{-- <a href="{{route('adminclientajout')}}" class="bg-[#444] text-white py-4 px-8">Créer une ville</a> --}}
        </div>
        <!-- New Table -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Envoi de notifications
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{route('adminnotificationstore')}}" method="post">
                    @csrf
                    <textarea
                        name="message"
                        id="message"
                        class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2"
                        required
                        rows="10"
                        placeholder="Entrer votre message"
                    ></textarea>

                    <button type="submit" class="bg-[#444] text-white p-2 px-4">Envoyer</button>

                </form>
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
