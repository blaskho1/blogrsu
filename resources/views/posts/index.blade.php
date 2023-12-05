<x-app-layout>

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">
        
        <div class="grid grid-cols-3 gap-6">

            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) col-span-2 @endif" style="background-image: url({{Storage::url($post->image->url)}})">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1>
                            <a href="">

                            </a>

                        </h1>                              
                    </div>
                </article>
            @endforeach

        </div>

    </div>

</x-app-layout>