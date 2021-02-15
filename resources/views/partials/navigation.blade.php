<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    @include('partials.logo')
                </div>
                <div class="ml-10">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="{{ route('secure') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Secure Page</a>
                        @auth
                        <a href="{{ route('logout') }}" class="float-right text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
