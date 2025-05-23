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
        Modifier conteneur
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <form action="{{ route('admin.conteneur.update',$conteneur->id) }}" enctype="multipart/form-data" class="w-full"
                method="post">
                @csrf
                @method('PUT')
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="libelle" class="text-black dark:text-white mb-2">Libellé</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir Libellé" name="label" id="libelle" value="{{$conteneur->label}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="img2" class="text-black dark:text-white mb-2">Sous Categorie</label>
                    <select name="conteneur_sous_category_id" id="category_id"
                        class="w-full border border-[#444] bg-transparent text-black p-2">
                        <option value="">Sélectionner une categorie</option>
                        @if (count($souscategories))
                        @foreach ($souscategories as $souscategory)
                        <option class=" text-black" value="{{ $souscategory->id }}">{{ $souscategory->label }}
                        </option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Etat</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir etat" name="etat" id="etat" value="{{$conteneur->etat}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Prix</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir prix" name="prix" id="prix" value="{{$conteneur->prix}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Description Rapide</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description rapide" name="quick_description" id="quick_description" value="{{$conteneur->quick_description}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Description</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description" value="{{$conteneur->description}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">surface</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir surface" name="surface" id="surface" value="{{$conteneur->surface}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Capacité</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir capacite" name="capacity" id="capacity" value="{{$conteneur->capacity}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Nombre de palettes</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir nombre de palette" name="nbr_palette" id="nbr_palette" value="{{$conteneur->nbr_palette}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Longueur Exterieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir longueur exterieur" name="longueur_exterieur" id="longueur_exterieur" value="{{$conteneur->longueur_exterieur}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Largeur Exterieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir largeur exterieur" name="largeur_exterieur" id="largeur_exterieur" value="{{$conteneur->largeur_exterieur}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Hauteur Exterieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir hauteur exterieur" name="hauteur_exterieur" id="hauteur_exterieur" value="{{$conteneur->hauteur_exterieur}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Longueur interieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir longueur interieur" name="longueur_interieur" id="longueur_interieur" value="{{$conteneur->longueur_interieur}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Largeur interieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir largeur interieur" name="largeur_interieur" id="largeur_interieur" value="{{$conteneur->largeur_interieur}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Hauteur interieur</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir hauteur interieur" name="hauteur_interieur" id="hauteur_interieur" value="{{$conteneur->hauteur_interieur}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Largeur de porte</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir largeur porte" name="largeur_porte" id="largeur_porte" value="{{$conteneur->largeur_porte}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Hauteur porte</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir hauteur porte" name="hauteur_porte" id="hauteur_porte" value="{{$conteneur->hauteur_porte}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Structure</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir structure" name="structure" id="structure" value="{{$conteneur->structure}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Plancher</label>
                    <input type="text"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir plancher" name="plancher" id="plancher" value="{{$conteneur->plancher}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">passage_de_fourche</label>
                    <input type="number"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir passage de  fourche" name="passage_de_fourche" id="passage_de_fourche" value="{{$conteneur->passage_de_fourche}}">
                </div>
                <div class="flex flex-col w-1/2 mt-4">
                    <label for="equipe1" class="text-black dark:text-white mb-2">Images</label>
                    <input type="file"
                        class="w-full border border-[#444] bg-transparent text-black  p-2"
                        placeholder="Saisir description" name="description" id="description" accept="image/png, image/jpeg" multiple>
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
                    <button type="submit" class="bg-[#444] text-gray-600 p-2 px-4">Envoyer</button>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection

@section('script')

@endsection