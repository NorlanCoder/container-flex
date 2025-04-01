@extends('admin.template')

@section('title', 'evenement')

@section('evenement', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex flex-row justify-between items-center">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Conteneurs
        </h2>
        <a href="{{ route('admin.conteneur.index') }}" class="bg-[#444] text-white py-4 px-8">Liste conteneurs</a>
    </div>
    <!-- New Table -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Créer conteneur
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <form action="{{ route('category.store') }}" enctype="multipart/form-data" class="w-full"
                method="post">
                @csrf
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="libelle" class="text-black dark:text-white mb-2">Libellé</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir Libellé" name="label" id="libelle">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Etat</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Prix</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Description Rapide</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Description</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">surface</label>
                    <input type="decimal"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Capacité</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Nombre de palettes</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Longueur Exterieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Largeur Exterieur</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Hauteur Exterieur</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Longueur interieur</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Largeur interieur</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Hauteur interieur</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Largeur de porte</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Hauteur porte</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Structure</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Plancher</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">passage_de_fourche</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Images</label>
                    <input type="file"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description" accept="image/png, image/jpeg" multiple>
                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-[#444] text-gray-600 p-2 px-4">Envoyer</button>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection

@section('script')

@endsection