<x-app-layout>
    <!-- Define a slot named "header" -->
    <x-slot name="header">
        <!-- Flex container with space between elements -->
        <div class="flex justify-between">
            <!-- Title for the page -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Productos' }} <!-- Static title -->
            </h2>
            <!-- Link to add a new task -->
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <!-- Title for uncompleted tasks -->
                    <h3 class="font-semibold text-lg text-gray-800 leading-tight mb-4">Productos</h3>
                    <!-- Table to display uncompleted tasks -->
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <!-- Table header for task and action -->
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Productos</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- Loop through uncompleted tasks --}}
                            @forelse ($products as $product)
                            <tr>
                                <!-- Display task content -->
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                    <!-- Checkbox to mark task as completed -->
                                  
                                    <span>
                                        {{ $product->name ." - ". $product->brand->name  ." - ". $product->type->name}}
                                    </span>
                                 
                                    <!-- Display last update time -->
                                    <span>
                                        <small>{{ ' | ' . $product->created_at->diffForHumans() }}</small>
                                    </span>
                                </td>
                              
                            </tr>
                            @empty
                            <!-- Display message if no uncompleted tasks -->
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" colspan="2">
                                    No data can be shown.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>