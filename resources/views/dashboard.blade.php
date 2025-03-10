<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">             
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if (auth()->user()->role == 'admin')
                    <div class="p-6 text-gray-900">
                        <?php return view('admin-dashboard'); ?>
                    </div>
                        @else 
                        <div class="p-6 text-gray-900">
                            {{ __("You're logged in!") }}
                        </div>
                    @endif
                </div>

                <button class="p-6 font-semibold btn-blue text-white" style="background-color: #4CAF50; padding: 15px 20px; margin: 20px 0; border-radius: 10px;">
                    <a href="{{ route('orders.create') }}">Order Item</a>
                </button>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
