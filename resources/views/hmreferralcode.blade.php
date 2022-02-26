<!--x-testmenu /-->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Referral Code') }}
        </h2>
    </x-slot>

<center>
    <select>
        <option>1</option>
        <option>5</option>
        <option>10</option>
        <option>20</option>
    </select>
    <input type="button" value="Generate Code">
    &emsp;&emsp;|&emsp;&emsp;
    <a href="user/profile">Update Payment Detail</a>
</center>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-hmreferralcodec />
            </div>
        </div>
    </div>
</x-app-layout>