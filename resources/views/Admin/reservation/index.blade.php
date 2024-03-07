@extends('Admin.Layouts.Master')
@section('content')
    @session('success')
    <div id="alert-border-3"
         class=" w-3/4 z-50 mx-auto flex items-end p-4 mb-4 text-green-800 border-2 border-b-4 border-l-4 float-right px-3 fixed shadow border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
         role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <div class="ms-3 text-sm font-medium">
            {{$value}}
        </div>
        <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
    @endsession
    @if ($errors->any())
        <div id="alert-additional-content-2"
             class="p-4 md:w-2/3 lg:w-1/3 w-full fixed  z-50 top-100 left-10 right-0 mx-auto mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
             role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">This is a danger alert</h3>
            </div>
            <div class="mt-2 mb-4 text-sm">
                <ul class="mt-1.5 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="flex justify-center">

                <button type="button"
                        class="text-red-800 px-9 mt-5 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800"
                        data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                    Dismiss
                </button>
            </div>
        </div>
    @endif
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">

                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All reservation</h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="  reservations-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" name="search" id="  reservations-search"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="Search for   reservation">
                        </div>
                    </form>

                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">

                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col pb-20">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600 ">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                           class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                #Id
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Event
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Event Owner
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                User
                            </th>
                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Status
                            </th>


                            <th scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                actions
                            </th>

                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @forelse(  $reservations as   $reservation)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox" aria-describedby="checkbox-1" type="checkbox"
                                               class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-" class="sr-only">checkbox</label>
                                    </div>
                                </td>

                                <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">{{  $reservation->id}}</td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{  $reservation->event?->title}}</td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{   $reservation->event?->organisator?->name }}
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{   $reservation->user?->name }}
                                </td>


                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                    <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded
            {{ $reservation->status ? 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300' : 'bg-red-100 text-yellow-800 dark:bg-yellow-900 dark:text-red-300' }}">
    {{ $reservation->status ? 'Approved' : 'Not Approved' }}
</span>
                                </td>


                                <td class="p-4 space-x-2 whitespace-nowrap">
                                    <button type="button"
                                            data-modal-target="{{ ($reservation->status == 0) ? 'accept' : 'refuse' }}-reservation-modal{{ $reservation->id }}"
                                            data-modal-toggle="{{ ($reservation->status == 0) ? 'accept' : 'refuse' }}-reservation-modal{{ $reservation->id }}"
                                            class="inline-flex items-center text-sm font-medium text-center {{ ($reservation->status == 0) ? '' : 'text-white rounded-lg' }}">
                                        <svg class="w-8 h-8 mr-2 {{ ($reservation->status == 0) ? 'text-green-500' : 'text-red-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ ($reservation->status == 0) ? 'M5 13l4 4L19 7' : 'M6 18L18 6M6 6l12 12' }}"></path>
                                        </svg>
                                    </button>
                                </td>


                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                     id="{{ ($reservation->status == 0) ? 'accept' : 'refuse' }}-reservation-modal{{  $reservation->id}}">
                                    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                            <!-- Modal header -->
                                            <div class="flex justify-end p-2">
                                                <button type="button"
                                                        class="text-gray-400  bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                                        data-modal-hide="{{ ($reservation->status == 0) ? 'accept' : 'refuse' }}-reservation-modal{{  $reservation->id}}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 pt-0 text-center">
                                                <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to delete this reservation?
                                                </h3>
                                                <form method="post" action="{{ route('reservations.update', $reservation->id) }}">
                                                    @csrf
                                                    @method('patch')
                                                    <button type="submit"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                                                        Yes, I'm sure {{ ($reservation->status == 0) ? 'A' : 'R' }}
                                                    </button>
                                                </form>
                                                <a href="#"
                                                   class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                                                   data-modal-hide="{{ ($reservation->status == 0) ? 'accept' : 'refuse' }}-reservation-modal{{  $reservation->id}}">
                                                    No, cancel
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </tr>
                        @empty
                            <tr>
                                <td rowspan="3" colspan="4" class="mx-auto text-xl-center"> no reservation</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{   $reservations->links() }}
                </div>
            </div>

        </div>

    </div>



    <!-- Add   reservation Modal -->

@endsection
