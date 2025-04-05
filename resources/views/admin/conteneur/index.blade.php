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
                        <th class="px-4 py-3">Nombre de palette</th>
                        <th class="px-4 py-3">Longueur exterieur</th>
                        <th class="px-4 py-3">Largeur exterieur</th>
                        <th class="px-4 py-3">Hauteur exterieur</th>
                        <th class="px-4 py-3">longueur interieur</th>
                        <th class="px-4 py-3">Largeur interieur</th>
                        <th class="px-4 py-3">Largeur porte</th>
                        <th class="px-4 py-3">Hauteur porte</th>
                        <th class="px-4 py-3">Structure</th>
                        <th class="px-4 py-3">Plancher</th>
                        <th class="px-4 py-3">Passage de fourche</th>
                        <th class="px-4 py-3">Image 1</th>
                        <th class="px-4 py-3">Image 2</th>
                        <th class="px-4 py-3">Image 3</th>
                        <th class="px-4 py-3">Image 4</th>
                        <th class="px-4 py-3">Image 5</th>
                        <th class="px-4 py-3">Image 6</th>
                        <th class="px-4 py-3">Image 7</th>
                        <th class="px-4 py-3">Image 8</th>
                        <th class="px-4 py-3">Image 9</th>
                        <th class="px-4 py-3">Image 10</th>
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
                        <td class="dark:text-white text-black p-4">{{$conteneur->surface." m²"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->capacity." m³"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->longueur_exterieur." m²" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->largeur_exterieur." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->hauteur_exterieur." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->longueur_interieur." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->largeur_interieur." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->hauteur_interieur." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->largeur_porte." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->hauteur_porte." m" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->structure ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->plancher ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4">{{$conteneur->passage_de_fourche." mm" ?? "_"}}</td>
                        <td class="dark:text-white text-black p-4"> <a href=""> <img src="{{asset($conteneur->img1)}}" alt="" srcset="" width="100" height="100" /> </a> </td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img2}}"> <img src="{{asset($conteneur->img2)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img3}}"> <img src="{{asset($conteneur->img3)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img4}}"> <img src="{{asset($conteneur->img4)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img5}}"> <img src="{{asset($conteneur->img5)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img6}}"> <img src="{{asset($conteneur->img6)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img7}}"> <img src="{{asset($conteneur->img7)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img8}}"> <img src="{{asset($conteneur->img8)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img9}}"> <img src="{{asset($conteneur->img9)}}" alt="" srcset=""> </a></td>
                        <td class="dark:text-white text-black p-4"><a href="{{$conteneur->img10}}"> <img src="{{asset($conteneur->img10)}}" alt="" srcset=""> </a></td>
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