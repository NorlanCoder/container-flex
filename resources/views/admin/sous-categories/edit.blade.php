@extends('admin.template')

@section('title', 'evenement')

@section('evenement', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex flex-row justify-between items-center">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Sous Categories
        </h2>
        <a href="{{ route('souscategories.index') }}" class="bg-[#444] text-white py-4 px-8">Liste sous-categories</a>
    </div>
    <!-- New Table -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Modier sous-categorie
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <form action="{{ route('souscategory.update',$souscategory->id) }}" enctype="multipart/form-data" class="w-full"
                method="post">
                @csrf
                @method('put')
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="libelle" class="text-black dark:text-white mb-2">Libellé</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir Libellé" name="label" id="label" value="{{ $souscategory->label }}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Description</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" value="{{ $souscategory->description }}" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="img2" class="text-black dark:text-white mb-2">Categorie</label>
                    <select name="category_id" id="category_id"
                        class="w-full border border-[#444] bg-transparent text-black p-2">
                        <option value="">Sélectionner une categorie</option>
                        @if (count($categories))
                        @foreach ($categories as $category)
                        <option class=" text-black" value="{{ $category->id }}">{{ $category->label }}
                        </option>
                        @endforeach
                        @endif
                    </select>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class=" text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="mt-4">
                    <button type="submit" class="bg-[#444] text-gray-800 p-2 px-4">Envoyer</button>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection

@section('script')

@endsection