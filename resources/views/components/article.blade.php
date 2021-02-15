@foreach ($posts as $post)
    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <a href="/" class="block mt-2">
                <p class="text-xl font-semibold text-gray-900">
                    {{ $post->title }}
                </p>
                <p class="mt-3 text-base text-gray-500">
                    {{ $post->body }}
                </p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="">
                <div class="flex space-x-1 text-sm text-gray-500">
                    <time dateTime="2020-03-16">
                        {{ date_format($post->created_at,"d M Y") }}
                    </time>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach