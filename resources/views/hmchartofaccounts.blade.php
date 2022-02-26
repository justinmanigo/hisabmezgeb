<!--x-testmenu /-->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Settings') }}
        </h2>
        <a href="companyinfo">&emsp;Company Info</a>
        &emsp;|&emsp;<b><u>Chart of Accounts</u></b>
        <a href="items">&emsp;|&emsp;Items</a>
        <a href="taxes">&emsp;|&emsp;Taxes</a>
        <a href="withholding">&emsp;|&emsp;Withholding</a>
        <a href="default">&emsp;|&emsp;Default</a>
        <a href="theme">&emsp;|&emsp;Theme</a>
        <a href="staffs">&emsp;|&emsp;Staffs</a>
        <a href="users">&emsp;|&emsp;Users</a>
    </x-slot>

    <center>
        <a href="new_coa">New</a>&emsp;&emsp;|&emsp;&emsp;
        <a href=""><em>Import</em></a>&emsp;&emsp;|&emsp;&emsp;
        <a href=""><em>Export</em></a>&emsp;&emsp;|&emsp;&emsp;
        <a href="begining_balance"><em>Begining Balance</em></a>
    </center>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hmchartofaccountsc />
            </div>
        </div>
    </div>
</x-app-layout>