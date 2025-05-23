@extends('admin.template')

@section('title', 'Details')

@section('dashboard', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')

@endsection

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex flex-row justify-between items-center">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Conteneurs
        </h2>
    </div>

    <!-- New Table -->
    <div class="w-full flex justify-between">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Liste des conteneurs
        </h4>
        <a href="{{route('admin.conteneur.create')}}" class="text-gray-700 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajouter un conteneur</a>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Libellé</th>
                        <th class="px-4 py-3">Etat</th>
                        <th class="px-4 py-3">Prix</th>
                        <th class="px-4 py-3">Quick_description</th>
                        <th class="px-4 py-3">Surface</th>
                        <th class="px-4 py-3">capacité</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @if (count($conteneurs))
                    @foreach ($conteneurs as $key=>$conteneur)
                    <tr>
                        <td class="dark:text-white text-black p-4">{{$conteneur->id}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->label}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->etat}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->prix}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->quick_description}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->surface}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->capacity}}</td>
                        <td class="dark:text-white flex text-black p-4">
                            <a class=" text-green-700 mr-2" href="{{route('admin.conteneur.edit',$conteneur->id)}}">Editer</a>
                            <form id="deleteForm" action="{{ route('admin.conteneur.delete',$conteneur->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>



</div>
@endsection

@section('script')

@endsection