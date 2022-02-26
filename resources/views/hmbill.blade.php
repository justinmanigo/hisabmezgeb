<!--x-testmenu /-->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bill') }}
        </h2>
        <!-- To test Submenu -->
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ 'New' }}

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management --><!--
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>  -->

                            <x-jet-dropdown-link href="new_bill">
                                {{ __('Bill') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="purchase_order">
                                {{ __('Purchase Order') }}
                            </x-jet-dropdown-link>
                            
                        </x-slot>
                    </x-jet-dropdown>

                        <a href=""><em>Import</em></a>&emsp;&emsp;|&emsp;&emsp;
                        <a href=""><em>Export</em></a>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hmbillc />
            </div>
        </div>
    </div>
</x-app-layout>