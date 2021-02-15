<section class="flex items-center justify-center bg-gray-50 md:py-36 sm:py-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        @auth
        <div>
            <h2 class="text-center text-3xl font-extrabold text-gray-900">
                Hi {{ auth()->user()->name }}, you are signed in.
            </h2>
        </div>
        @endauth
        @guest
        <div>
            <h2 class="text-center text-3xl font-extrabold text-gray-900">
                Sign in to access secure page
            </h2>

            @if (session('status'))
                <div class="mt-5 bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div> 
            @endif
        </div>
        <form class="mt-8 space-y-6" action="{{ route('home') }}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true"/>
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('email') border-red-500 @enderror" placeholder="Email address" value="{{ old('email') }}"/>

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('password') border-red-500 @enderror" placeholder="Password"/>

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign in
                </button>
            </div>
        </form>
        @endguest
    </div>
</section>
