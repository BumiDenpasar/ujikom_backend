<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __($news->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="pb-10 overflow-hidden bg-white shadow-xl sm:rounded-2xl">
                <div class="p-6 text-gray-900">
                    <a class="secondary-button" href="{{ route('dashboard.news') }}">
                        <x-heroicon-o-arrow-left class="w-5" />
                        Back
                    </a>
                    <img src="{{ $news->img }}"
                        class="w-full relative aspect-[16/9] bg-center object-cover rounded-[3rem] drop-shadow-2xl mt-5 overflow-hidden text-white" />

                    <div class="flex flex-wrap w-full px-5 mt-8 space-x-1">
                        @foreach ($news->categories as $category)
                            <form
                                action="{{ route('dashboard.news.category.destroy', ['news' => $news->id, 'category' => $category->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="relative h-10 px-4 overflow-hidden text-sm font-bold text-white transition-all duration-300 bg-blue-600 bg-center bg-cover shadow-lg hover:bg-red-600 group hover:shadow-2xl rounded-2xl hover:scale-90"
                                    alt="">
                                    <span
                                        class="duration-300 opacity-100 animation-all group-hover:opacity-0">{{ $category->title }}</span>
                                    <x-heroicon-s-x-mark
                                        class="absolute top-0 bottom-0 left-0 right-0 w-6 mx-auto my-auto text-white duration-300 opacity-0 animation-all group-hover:opacity-100" />
                                </button>
                            </form>
                        @endforeach
                        <button onclick="add_category_modal.showModal()"
                            class="flex items-center justify-center h-10 px-4 text-sm transition-colors duration-300 bg-white border border-dashed hover:border rounded-2xl border-neutral-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white text-neutral-600">
                            <x-heroicon-c-plus class="w-4" />
                        </button>
                    </div>



                    <div class="px-5 mt-3">
                        <h1 class="text-[2rem] font-bold">{{ $news->title }}</h1>
                        <p class="mt-2 text-justify text-neutral-700">{{ $news->body }}</p>
                    </div>

                    <div class="px-5 mt-10">
                        <h1 class="text-[2rem] font-bold">News Performance</h1>
                        <p class="text-justify text-neutral-700">Monitor your news performance here</p>

                        <div class="flex mt-4 space-x-3">
                            <div class="space-y-1 main-card group">
                                <h1>Views</h1>
                                <p>{{$news->views}}</p>
                                <x-heroicon-c-eye class="stats-decoration group-hover:right-[-10px] group-hover:bottom-[-25px]" />

                            </div>

                            <div class="space-y-1 main-card group">
                                <h1>Likes</h1>
                                <p>{{$news->loves->count()}}</p>
                                <x-heroicon-c-hand-thumb-up class="stats-decoration group-hover:right-[-10px] group-hover:bottom-[-25px]" />
                            </div>

                            <div class="space-y-1 main-card group">
                                <h1>Comments</h1>
                                <p>{{$news->comments->count()}}</p>
                                <x-heroicon-s-chat-bubble-bottom-center-text class="stats-decoration group-hover:right-[-10px] group-hover:bottom-[-25px]" />
                            </div>
                            
                        </div>
                    </div>

                    <div class="px-5 mt-10">
                        @if ($news->comments->isNotEmpty())
                            <h1 class="text-[2rem] font-bold mb-5">Comments</h1>
                        @endif

                        @foreach ($news->comments as $comment)
                          
                            <div class="relative group chat chat-start">
                                <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img
                                    alt="Tailwind CSS chat bubble component"
                                    src="/assets/images/profile_placeholder.webp" />
                                </div>
                                </div>
                                <div class="chat-header">
                                {{$comment->name}}
                                <time class="text-xs opacity-50">{{ \Carbon\Carbon::parse($comment->created_at)->format('H:i') }}</time>
                                </div>
                                <div class="chat-bubble">{{$comment->text}}</div>
                                <form action="{{ route('dashboard.news.comment.destroy', ['news' => $news->id, 'comment' => $comment->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="absolute delete-button-rounded bottom-3 hidden group-hover:block transition-all h-max left-[9.5rem]">
                                        <div class="w-3">
                                            @svg('heroicon-s-trash')
                                        </div>
                                    </button>
                                </form>
                            </div>
                        @endforeach

                         
                    </div>



                </div>
            </div>
        </div>
    </div>


</x-app-layout>




<dialog id="add_category_modal" class="modal modal-bottom sm:modal-middle">
    <div class="flex flex-col items-center px-5 modal-box w-max">
        <h3 class="text-lg font-bold">Add New Category</h3>
        <form action={{ route('dashboard.news.category.store', $news) }} method="POST" enctype="multipart/form-data"
            class="flex flex-col items-center w-full">
            @csrf

            <label class="w-full max-w-xs form-control">
                <div class="label">
                    <span class="label-text">Categories</span>
                </div>
                <select name="category_id" required class="select select-bordered">
                    <option disabled selected>Pick one</option>
                    @foreach ($all_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category')
                    <div class="label error">
                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                    </div>
                @enderror
            </label>


            <button class="w-full mt-8 main-button" type="submit">Add Category</button>
        </form>

        <div class="w-full mt-3 modal-action">
            <form method="dialog" class="flex flex-col items-center w-full">
                <button class="w-full shadow-inner btn bg-neutral-200 rounded-2xl">Close</button>
            </form>
        </div>
    </div>
</dialog>
