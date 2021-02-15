<div class="relative bg-gray-100 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-3xl">
                Latest News
            </h2>
        </div>
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
            @if ($posts->count())
                @include('components.article', ['posts' => $posts])
            @else
            
                <p>THERE ARE NO POSTS</p>
            
            @endif
        </div>
    </div>
</div>
