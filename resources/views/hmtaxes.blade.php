<!--x-testmenu /-->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Settings') }}
        </h2>
        <a href="companyinfo">&emsp;Company Info</a>
        <a href="chart_of_accounts">&emsp;|&emsp;Chart of Accounts</a>
        <a href="items">&emsp;|&emsp;Items</a>
        &emsp;|&emsp;<u><b>Taxes</b></u>
        <a href="withholding">&emsp;|&emsp;Withholding</a>
        <a href="default">&emsp;|&emsp;Default</a>
        <a href="theme">&emsp;|&emsp;Theme</a>
        <a href="staffs">&emsp;|&emsp;Staffs</a>
        <a href="users">&emsp;|&emsp;Users</a>
    </x-slot>

    <center>
        <a href="new_tax">New</a>&emsp;&emsp;|&emsp;&emsp;
        <a href=""><em>Import</em></a>&emsp;&emsp;|&emsp;&emsp;
        <a href=""><em>Export</em></a>
    </center>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hmtaxesc />
            </div>
        </div>
    </div>
</x-app-layout>