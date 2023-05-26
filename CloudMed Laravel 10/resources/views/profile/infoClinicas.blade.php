@section('title', 'info')

<x-app-layout>
    
    <section class="login session-allow h-[80vh]">
        
        <section class="profile my-5 w-full flex justify-center items-center ">
            <div class="filter drop-shadow-md md:w-4/5 flex justify-center">
                
                <x-sidebar />
                @if ($infoClinica->isEmpty())
                    @include('profile.partials.cadastrar-info-clinica')
                @else
                    @include('profile.partials.update-info-clinica')
                @endif
            </div>
        </section>

    </section>

</x-app-layout>
