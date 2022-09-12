@extends('layouts.app')

@section('content')
          @include('components.header') 
      
          @include('components.sidebar')
        
          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

            <!-- Client Table -->
            <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-44 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>                                
                <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Surat Keluar</h3>
            </div>
            <div class="mt-10 mx-4">
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto bg-blue-700 dark:bg-gray-900">
                    <div class="relative m-2 p-2 text-left">
                        <button class="inline-flex bg-blue-500 hover:bg-white hover:text-gray-900 dark:bg-gray-50 dark:hover:bg-blue-700 dark:hover:text-white dark:active:bg-blue-800 text-white active:bg-blue-800 active:text-white dark:active:text-white dark:text-gray-800 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" data-modal-toggle="default-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <span class="py-1">Tambah Data</span>
                        </button>
                    </div>
                    <!-- Main modal -->
                    <div id="default-modal" data-modal-show="true" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                      <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                          <!-- Modal content -->
                          <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                              <!-- Modal header -->
                              <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                                  <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                                      Tambah Data Surat Masuk
                                  </h3>
                                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                  </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-6 space-y-6 text-gray-700 uppercase text-left font-semibold dark:text-white">
                                <span>Nomor Surat</span>
                                <input type="text" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none dark:bg-gray-900" />
                                <span>Judul Surat</span>
                                <input type="text" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none dark:bg-gray-900" />
                                <span>Indeks Surat</span>
                                <input type="text" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none dark:bg-gray-900" />
                                <span>Tujuan Surat</span>
                                <input type="text" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none dark:bg-gray-900" />
                              </div>
                              <!-- Modal footer -->
                              <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                                  <button data-modal-toggle="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                  <button data-modal-toggle="default-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
                              </div>
                          </div>
                      </div>
                      </div>
                  <table class="w-full">
                    <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nomor Surat</th>
                        <th class="px-4 py-3">Judul Surat</th>
                        <th class="px-4 py-3">Indeks Surat</th>
                        <th class="px-4 py-3">Tujuan Surat</th>
                        <th class="px-4 py-3">Tanggal Keluar</th>
                        <th class="px-4 py-3">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">1</td>
                        <td class="px-4 py-3 text-sm">$855.85</td>
                        <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                        </td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">
                          <div class="items-center">
                              <ul class="inline-flex">
                                <li class="flex rounded-full p-1 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                      
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>                                                                          
                                  </button>
                                </li>
                              </ul>
                          </div>  
                        </td>  
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3 text-sm">$369.75</td>
                        <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full"> Pending </span>
                        </td>
                        <td class="px-4 py-3 text-sm">23-03-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">
                          <div class="items-center">
                              <ul class="inline-flex">
                                <li class="flex rounded-full p-1 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                      
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>                                                                          
                                  </button>
                                </li>
                              </ul>
                          </div>  
                        </td> 
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3 text-sm">$775.45</td>
                        <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> Expired </span>
                        </td>
                        <td class="px-4 py-3 text-sm">09-02-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">
                          <div class="items-center">
                              <ul class="inline-flex">
                                <li class="flex rounded-full p-1 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                      
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>                                                                          
                                  </button>
                                </li>
                              </ul>
                          </div>  
                        </td> 
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">4</td>
                        <td class="px-4 py-3 text-sm">$1276.75</td>
                        <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                        </td>
                        <td class="px-4 py-3 text-sm">17-04-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">
                          <div class="items-center">
                              <ul class="inline-flex">
                                <li class="flex rounded-full p-1 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                      
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>                                                                          
                                  </button>
                                </li>
                              </ul>
                          </div>  
                        </td> 
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">5</td>
                        <td class="px-4 py-3 text-sm">$863.45</td>
                        <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Denied </span>
                        </td>
                        <td class="px-4 py-3 text-sm">11-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                        <td class="px-4 py-3 text-sm">
                          <div class="items-center">
                              <ul class="inline-flex">
                                <li class="flex rounded-full p-1 mx-1 bg-yellow-400 text-gray-100 active:bg-yellow-600">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-red-600 text-gray-100 active:bg-red-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                      
                                  </button>
                                </li>
                                <li class="flex rounded-full p-1 mx-1 bg-blue-600 text-gray-100 active:bg-blue-800">
                                  <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>                                                                          
                                  </button>
                                </li>
                              </ul>
                          </div>  
                        </td> 
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                  <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                  <span class="col-span-2"></span>
                  <!-- Pagination -->
                  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                      <ul class="inline-flex items-center">
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                              <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                        </li>
                        <li>
                          <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                      </ul>
                    </nav>
                  </span>
                </div>
              </div>
            </div>
            <!-- ./Client Table -->
        </div>
@endsection