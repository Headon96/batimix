<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                
                    Lista de productos
                    <br>
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        
                    </thead>
                    <tbody>
                        @forelse ($producto as  $item)
                        <td>{{$loop->iteration }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->precio}}</td>
                        <td>{{$item->cantidad}}</td>
                        @empty
                        @endforelse
                    </tbody>    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
