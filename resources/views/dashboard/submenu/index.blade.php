<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sub Menu') }}
        </h2>
        <h4>Sub Menu Manage</h4>
    </x-slot>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('submenu.create') }}"><button class="btn btn-primary mb-2">Add New</button></a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container flex justify-center mx-auto mt-3 ">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Kategori Title
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Name
                                        </th>
                                        
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Slug
                                        </th>

                                        
                                     
                                        
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Menu
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Artikel
                                        </th>

                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                  @foreach ($submenu as $menu)
                                      
                                  
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                           {{ $menu->kategori_title }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $menu->sub }}
                                         </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $menu->slug }}
                                         </td>

                                         <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $menu->menu->nama }}
                                         </td>

                                         <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $menu->artikel->judul }}
                                         </td>
                                        
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="submenu/edit/{{$menu->id }}">                                           
                                            <button class="btn btn-primary px-4 py-1 text-sm">Edit</button>
                                            </a>
                                        </td>

                                         <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="submenu/destroy/{{$menu->id }}">                                           
                                            <button class="btn btn-danger  px-4 py-1 text-sm ">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                            
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </div>  
</x-app-layout>