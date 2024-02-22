@extends('layouts.secondary-layout')

@section('content2')


    
    <div class="mx-auto mt-10 overflow-x-auto shadow-none  w-3/5 sm:rounded-lg">
        <div class="flex flex-row justify-between">
            <h2 class="text-lg font-medium">Gestion de usuario</h2>
            <form action="{{ route('usuarios-create') }}">
                <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800">
                    Agregar
                </button>
            </form>
        </div>
        <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400 mx-auto sm:rounded-lg">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($usuario as $uno )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$uno->nombre}} {{{$uno->apellido}}}
                    </th>
                    <td class="px-6 py-4">
                        {{$uno->email}}
                    </td>
                    
                </tr>
                @endforeach

                
            </tbody>
        </table>
    </div>
