<!--x-testmenu /-->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bank Accounts') }}
        </h2>
    </x-slot>

<center>
    <a href="new_bank_account">New Bank Account</a>&emsp;&emsp;|&emsp;&emsp;
    <a href=""><em>Import</em></a>&emsp;&emsp;|&emsp;&emsp;
    <a href=""><em>Export</em></a>
</center>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hmbankaccountsc />
            </div>
        </div>
    </div>
</x-app-layout>