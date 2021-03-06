<div class="rounded-lg w-full shadow-md shadow-slate-200 bg-white overflow-hidden">
    <div>
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}'
    s image">
    </div>

    <div class="p-7">

        <small class="text-indigo-600 font-bold mb-3 block"><a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></small>

        <h2 class="font-bold text-xl mb-3 block"><a href="/posts/{{ $post->slug }}" class="text-gray-900 hover:text-indigo-700">{{ $post->title }}</a></h2>

        <p class="text-gray-500 text-base mb-5 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo nemo, ipsa expedita aspernatur sit eius. Ipsam ab hic cumque obcaecati magni sequi sit libero, sed, reprehenderit assumenda iusto excepturi.</p>

        <div>
            <span class="mb-1 text-gray-900 hover:text-indigo-600 font-semibold block"><a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></span>
            <span class="text-gray-500 block text-sm">{{ $post->created_at->format('M, d Y h:i A') }}</span>
        </div>
    </div>
</div>