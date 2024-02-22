@extends('layouts.main-layout')

@section('content')
    <section class="bg-white dark:bg-gray-900 h-screen">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Agregar Usuario</h2>
            <form action="{{ route('usuarios-store') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-6">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                        <div class="w-full">
                            <label for="nombre"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                            <input type="text" name="nombre" id="nombre"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Nombre" required="">
                                
                        </div>
                        <div class="w-full">
                            <label for="apellido"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                            <input type="text" name="apellido" id="apellido"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Apellido" required="">
                        </div>

                    </div>
                    <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                        <div class="w-full">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                            <input type="text" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Apellido" required="">
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="contrasena"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                            <input type="password" name="contrasena" id="contrasena"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Contraseña" required="">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Guardar
                    </button>
                    </div>

                </div>

            </form>
        </div>

    </section>
@endsection
