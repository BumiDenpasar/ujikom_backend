<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Landing Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-2xl">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a class="secondary-button" href="{{ route('dashboard') }}">
                        <x-heroicon-o-arrow-left class="w-5" />
                        Back
                    </a>
                    <form action={{ route('hero.update', $hero) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1 class="w-full mt-10 font-semibold text-center">Update Hero Section</h1>

                        <input type="hidden" name="placement" value="{{ old('placement', $hero->placement) }}" />

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Hero's Title</span>
                                </div>
                                <input type="text" name="title" class="w-full input input-bordered"
                                    value="{{ old('title', $hero->title) }}" />
                                @error('title')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Hero's Subtitle</span>
                                </div>
                                <input type="text" name="subtitle" class="w-full input input-bordered"
                                    value="{{ old('subtitle', $hero->subtitle) }}" />
                                @error('subtitle')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Hero's CTA Button Placeholder</span>
                                </div>
                                <input type="text" name="cta" class="w-full input input-bordered"
                                    value="{{ old('cta', $hero->cta) }}" />
                                @error('cta')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                        </div>




                        <label class="form-control">
                            <div class="label">
                                <span class="label-text">Hero's Description</span>
                            </div>
                            <textarea name="desc" class="text-base h-80 textarea textarea-bordered">{{ old('desc', $hero->desc) }}</textarea>
                            @error('desc')
                                <div class="label error">
                                    <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>

                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update Hero Section</button>
                    </form>

                    <form action={{ route('majors.update', $news) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1 class="w-full font-semibold text-center mt-28">Update Majors Section</h1>

                        <input type="hidden" name="placement" value="{{ old('placement', $majors->placement) }}" />

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Major's Title</span>
                                </div>
                                <input type="text" name="title" class="w-full input input-bordered"
                                    value="{{ old('title', $majors->title) }}" />
                                @error('title')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Major's Subtitle</span>
                                </div>
                                <input type="text" name="subtitle" class="w-full input input-bordered"
                                    value="{{ old('subtitle', $majors->subtitle) }}" />
                                @error('subtitle')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                        </div>

                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update Majors Section</button>
                    </form>


                    <form action={{ route('gallery.update', $gallery) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1 class="w-full font-semibold text-center mt-28">Update Gallery Section</h1>

                        <input type="hidden" name="placement" value="{{ old('placement', $gallery->placement) }}" />

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Gallery's Title</span>
                                </div>
                                <input type="text" name="title" class="w-full input input-bordered"
                                    value="{{ old('title', $gallery->title) }}" />
                                @error('title')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Gallery's Subtitle</span>
                                </div>
                                <input type="text" name="subtitle" class="w-full input input-bordered"
                                    value="{{ old('subtitle', $gallery->subtitle) }}" />
                                @error('subtitle')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Gallery's CTA Button Placeholder</span>
                                </div>
                                <input type="text" name="cta" class="w-full input input-bordered"
                                    value="{{ old('cta', $gallery->cta) }}" />
                                @error('cta')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                        </div>




                        <label class="form-control">
                            <div class="label">
                                <span class="label-text">Gallery's Description</span>
                            </div>
                            <textarea name="desc" class="text-base h-80 textarea textarea-bordered">{{ old('desc', $gallery->desc) }}</textarea>
                            @error('desc')
                                <div class="label error">
                                    <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>

                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update Gallery Section</button>
                    </form>

                    <form action={{ route('news.update', $news) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1 class="w-full font-semibold text-center mt-28">Update News Section</h1>

                        <input type="hidden" name="placement" value="{{ old('placement', $news->placement) }}" />

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">News's Title</span>
                                </div>
                                <input type="text" name="title" class="w-full input input-bordered"
                                    value="{{ old('title', $news->title) }}" />
                                @error('title')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">News's Subtitle</span>
                                </div>
                                <input type="text" name="subtitle" class="w-full input input-bordered"
                                    value="{{ old('subtitle', $news->subtitle) }}" />
                                @error('subtitle')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                        </div>

                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update News Section</button>
                    </form>

                    <form action={{ route('event.update', $event) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1 class="w-full font-semibold text-center mt-28">Update Event Section</h1>

                        <input type="hidden" name="placement" value="{{ old('placement', $event->placement) }}" />

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Hero's Title</span>
                                </div>
                                <input type="text" name="title" class="w-full input input-bordered"
                                    value="{{ old('title', $event->title) }}" />
                                @error('title')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Hero's Subtitle</span>
                                </div>
                                <input type="text" name="subtitle" class="w-full input input-bordered"
                                    value="{{ old('subtitle', $event->subtitle) }}" />
                                @error('subtitle')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                        </div>

                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update Event Section</button>
                    </form>

                    <h1 class="w-full font-semibold text-center mt-28">Update Statistic Section</h1>
                  
                    @foreach ($statistics as $stats)
                    <form action={{ route('stats.update', $stats) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">{{$stats->name}} Name</span>
                                </div>
                                <input type="text" name="name" class="w-full input input-bordered"
                                    value="{{ old('name', $stats->name) }}" />
                                @error('name')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">{{$stats->name}} Amount</span>
                                </div>
                                <input type="number" name="amount" class="w-full input input-bordered"
                                    value="{{ old('amount', $stats->amount) }}" />
                                @error('amount')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                        </div>

                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update {{$stats->name}}</button>
                    </form>
                    @endforeach

                    <h1 class="w-full font-semibold text-center mt-28">Update Majors Details</h1>

                    @foreach ($majorDetails as $major)
                    <form action={{ route('major-detail.update', $major) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="input-cluster">
                            {{-- name --}}
                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Name</span>
                                </div>
                                <input type="text" name="name" class="w-full input input-bordered"
                                    value="{{ old('name', $major->name) }}" />
                                @error('name')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>

                            <label class="w-full form-control">
                                <div class="label">
                                    <span class="label-text">Social Media Link</span>
                                </div>
                                <input type="text" name="link" class="w-full input input-bordered"
                                    value="{{ old('link', $major->link) }}" />
                                @error('link')
                                    <div class="label error">
                                        <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>


                                {{-- img --}}
                                <label class="w-full form-control">
                                    <div class="label">
                                        <span class="label-text">Logo</span>
                                    </div>
                                    <input type="file" name="img" class="w-full file-input file-input-bordered"
                                        accept="image/*" />
                                    @error('img')
                                        <div class="label error">
                                            <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </label>
                        </div>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text">Description</span>
                            </div>
                            <textarea name="desc" class="text-base h-80 textarea textarea-bordered">{{ old('desc', $major->desc) }}</textarea>
                            @error('desc')
                                <div class="label error">
                                    <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>


                        <button class="w-full mt-8 min-w-lg main-button" type="submit">Update {{$major->name}}</button>
                    </form>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
