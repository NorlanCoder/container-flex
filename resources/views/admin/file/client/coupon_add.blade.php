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
            <a href="{{ route('admincoupon') }}" class="bg-[#444] text-white py-4 px-8">Liste coupons</a>
        </div>
        <!-- New Table -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Créer un coupon
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <form action="{{ route('admincouponajoutpost') }}" class="w-full" method="post">
                    @csrf
                    <div class="flex flex-col w-1/2">
                        <label for="reference" class="text-black dark:text-white mb-2">Reference</label>
                        <input type="text"
                            class="w-full border border-[#444] bg-transparent text-black dark:text-white p-2"
                            placeholder="Saisir une réference" name="reference" id="reference">
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
