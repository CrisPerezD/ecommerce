<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),      
    ],
]">
    
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 ">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        
            <div class="ml-4 flex-1">
                <h2 class="text-lg font-semibold">
                    ¡Bienvenido, {{ Auth::user()->name }}!
                </h2>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-sm text-red-600 hover:underline hover:font-bold">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 flex justify-center items-center">
        <h2 class="text-xl font-semibold">
            Panel de Administración
        </h2>
    </div>

</div>

</x-admin-layout>