@extends('admin.template')

@section('title', 'evenement')

@section('evenement', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex flex-row justify-between items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Evènements
            </h2>
            <a href="{{ route('adminevenement') }}" class="bg-[#444] text-white py-4 px-8">Liste évènements</a>
        </div>
        <!-- New Table -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Créer évènements
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <form action="{{ route('adminevenementajoutpost') }}" enctype="multipart/form-data" class="w-full"
                    method="post">
                    @csrf
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="libelle" class="text-black dark:text-white mb-2">Libellé</label>
                        <input type="text"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2"
                            placeholder="Saisir Libellé" name="libelle" id="libelle">
                    </div>
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="equipe1" class="text-black dark:text-white mb-2">Equipe 1</label>
                        <input type="text"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2"
                            placeholder="Saisir Equipe 1" name="equipe1" id="equipe1">
                    </div>
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="equipe2" class="text-black dark:text-white mb-2">Equipe 2</label>
                        <input type="text"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2"
                            placeholder="Saisir Equipe 2" name="equipe2" id="equipe2">
                    </div>
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="cote" class="text-black dark:text-white mb-2">Côte</label>
                        <input type="text"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2"
                            placeholder="Saisir Cote" name="cote" id="cote">
                    </div>
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="img1" class="text-black dark:text-white mb-2">Image Equipe 1</label>
                        <input type="file"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2" name="img1"
                            id="img1">
                    </div>
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="img2" class="text-black dark:text-white mb-2">Image Equipe 2</label>
                        <input type="file"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2" name="img2"
                            id="img2">
                    </div>
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="img2" class="text-black dark:text-white mb-2">Coupon</label>
                        <select name="coupon_id" id="coupon_id"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2">
                            <option value="">Sélectionner un coupon</option>
                            @if (count($coupons))
                                @foreach ($coupons as $coupon)
                                    <option class=" text-black" value="{{ $coupon->id }}">{{ $coupon->reference }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-[#444] text-white p-2 px-4">Envoyer</button>
                    </div>
                </form>
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
