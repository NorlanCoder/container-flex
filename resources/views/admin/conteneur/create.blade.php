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
            <form action="{{ route('admin.conteneur.store') }}" enctype="multipart/form-data" class="w-full"
                method="post">
                @csrf
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="libelle" class="text-black dark:text-white mb-2">Libellé</label>
                    <input type="text" class="w-full border border-[#444] bg-transparent text-black p-2"
                        placeholder="Saisir Libellé" name="label" id="libelle" value="{{ old('label') }}">
                </div>
                
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="category_id" class="text-black dark:text-white mb-2">Sous Categorie</label>
                    <select name="conteneur_sous_category_id" id="category_id"
                        class="w-full border border-[#444] bg-transparent text-black p-2">
                        <option value="">Sélectionner une categorie</option>
                        @if (count($souscategories))
                            @foreach ($souscategories as $souscategory)
                                <option class="text-black" value="{{ $souscategory->id }}"
                                    {{ old('conteneur_sous_category_id') == $souscategory->id ? 'selected' : '' }}>
                                    {{ $souscategory->label }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                
                @php
                    $fields = [
                        ['name' => 'etat', 'type' => 'text', 'label' => 'Etat'],
                        ['name' => 'prix', 'type' => 'number', 'label' => 'Prix'],
                        ['name' => 'quick_description', 'type' => 'text', 'label' => 'Description Rapide'],
                        ['name' => 'description', 'type' => 'text', 'label' => 'Description'],
                        ['name' => 'surface', 'type' => 'number', 'label' => 'Surface'],
                        ['name' => 'capacity', 'type' => 'number', 'label' => 'Capacité'],
                        ['name' => 'nbr_palette', 'type' => 'number', 'label' => 'Nombre de palettes'],
                        ['name' => 'longueur_exterieur', 'type' => 'number', 'label' => 'Longueur Exterieur'],
                        ['name' => 'largeur_exterieur', 'type' => 'number', 'label' => 'Largeur Exterieur'],
                        ['name' => 'hauteur_exterieur', 'type' => 'number', 'label' => 'Hauteur Exterieur'],
                        ['name' => 'longueur_interieur', 'type' => 'number', 'label' => 'Longueur interieur'],
                        ['name' => 'largeur_interieur', 'type' => 'number', 'label' => 'Largeur interieur'],
                        ['name' => 'hauteur_interieur', 'type' => 'number', 'label' => 'Hauteur interieur'],
                        ['name' => 'largeur_porte', 'type' => 'number', 'label' => 'Largeur de porte'],
                        ['name' => 'hauteur_porte', 'type' => 'number', 'label' => 'Hauteur porte'],
                        ['name' => 'structure', 'type' => 'text', 'label' => 'Structure'],
                        ['name' => 'plancher', 'type' => 'text', 'label' => 'Plancher'],
                        ['name' => 'passage_de_fourche', 'type' => 'number', 'label' => 'Passage de fourche'],
                    ];
                @endphp
                
                @foreach ($fields as $field)
                    <div class="flex flex-col w-1/2 mt-4">
                        <label for="{{ $field['name'] }}" class="text-black dark:text-white mb-2">{{ $field['label'] }}</label>
                        <input type="{{ $field['type'] }}"
                            class="w-full border border-[#444] bg-transparent text-black p-2"
                            placeholder="Saisir {{ strtolower($field['label']) }}" name="{{ $field['name'] }}"
                            id="{{ $field['name'] }}"
                            {{ $field['type'] === 'number' ? 'step=0.01' : '' }}
                            value="{{ old($field['name']) }}">
                    </div>
                @endforeach
                
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="images" class="text-black dark:text-white mb-2">Images</label>
                    <input type="file"
                        class="w-full border border-[#444] bg-transparent text-black p-2"
                        name="images[]" id="images" accept="image/png, image/jpeg" multiple>
                </div>
                
                @if ($errors->any())
                    <div class=" bg-amber-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mt-4">
                    <button type="submit" class="bg-[#444] text-white p-2 px-4">Envoyer</button>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection

@section('script')

@endsection