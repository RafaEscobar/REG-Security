<x-guest-layout>
    <img src="{{ asset('storage/images/home.jpg') }}" alt="" class="object-cover h-full w-full absolute left-0 top-0 blur-sm">
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="h-3/6 w-8/12 bg-white-500 rounded-md bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-30">
            <div class="w-full h-full flex flex-col justify-center items-center border-2">
                <img src="{{ asset('storage/images/logo.png') }}" alt="" class="w-5/12 xs:w-4/12 sm:w-3/12 md:w-2/12">
                @if (Route::has('login'))
                    @auth
                        <div class="w-4/12 2xl:w-3/12 mt-8 flex justify-center">
                            <x-btn-basic url="/dashboard" label="Ir al inicio" />
                        </div>
                    @else
                        <div class="w-6/12 md:w-4/12 md:lg:w-4/12 mt-6 flex flex-col gap-2 lg:flex-row lg:justify-between ">
                            <x-btn-basic url="login" label="Iniciar sesión" />
                            @if (Route::has('register'))
                                <x-btn-basic url="register" label="Registrarme" />
                            @endif
                        </div>
                    @endauth
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>