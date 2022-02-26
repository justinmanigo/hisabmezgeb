<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Reports') }}
        </h2>
        
        <!-- Customers Related Report-->
        <div class="ml-3 relative">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ 'Customers' }}

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

                            <x-jet-dropdown-link href="">
                                {{ __('Aged Receivable') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Cash Receipts Journal') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Customer Ledgers') }}
                            </x-jet-dropdown-link>

                        </x-slot>
                    </x-jet-dropdown>
        </div>

        <!-- Vendor Related Report-->
        <div class="ml-3 relative">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ 'Vendor' }}

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

                            <x-jet-dropdown-link href="">
                                {{ __('Aged Payables') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Cash Disbursements Journal') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Vender Ledgers') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Cash Requirements') }}
                            </x-jet-dropdown-link>
                            
                        </x-slot>
                    </x-jet-dropdown>
        </div>

        <!-- Sales Related Report-->
        <div class="ml-3 relative">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ 'Sales' }}

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

                            <x-jet-dropdown-link href="">
                                {{ __('Sales') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Grouped by Customer') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Grouped by Item') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Grouped by Sales Person') }}
                            </x-jet-dropdown-link>
                            
                        </x-slot>
                    </x-jet-dropdown>
        

        <!-- Records Related Report-->
        
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ 'Entries' }}

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

                            <x-jet-dropdown-link href="">
                                {{ __('General Ledger') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('General Journal') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Receipt') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Bill') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Payment') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('JV') }}
                            </x-jet-dropdown-link>
                            
                        </x-slot>
                    </x-jet-dropdown>
        

        <!-- Financial Statement Related Report-->
        
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ 'Financial Statement' }}

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

                            <x-jet-dropdown-link href="">
                                {{ __('Balance Sheet') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Balance Sheet with Zero Accounts') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Income Statement - Single Step') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="">
                                {{ __('Income Statement - Multiple Step') }}
                            </x-jet-dropdown-link>
                            
                        </x-slot>
                    </x-jet-dropdown>
        </div>

        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hmreportsc />
            </div>
        </div>
    </div>
</x-app-layout>