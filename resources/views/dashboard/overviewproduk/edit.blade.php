<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('overview Produk') }}
        </h2>
        <h4>Create overview Produk</h4>
    </x-slot>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="alert alert-error mb-8">
                <div class="flex-1">
                    @foreach ($errors->all() as $error)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <label>{{ $error }}</label>
                    @endforeach
                </div>
            </div>
            @endif
            <form class="w-full" method="POST" action="{{ route('overviewProduk.update',$model->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nama">
                            Produk
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="produk_id">
                            <option value="" disabled>-Pilih-</option>
                            @foreach ($modelProduk as $val)
                                <option value="{{ $val->id }}"
                                    {{ $val->id == $model->produk_id ? 'selected' : '' }}
                               >
                                    {{ $val->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nama">
                            Judul
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="title" name="title" type="text" value="{{ $model->title }}">
                    </div>
                </div>
            
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Image/Video
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="landing" type="file" accept="image/*,video/*">
                        <div class="mt-2">
                            <p>Preview:</p>
                            <img id="preview" class="rounded max-w-sm max-h-24" src="/landing/{{ $model->landing }}"  alt="Image Preview">
                        </div>
                    </div>
                </div>
                

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"  for="inline-full-name">
                        diskipsi
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <textarea name="diskipsi" id="description" cols="30" rows="10"></textarea>
                    {{ $model->diskipsi }}
                    </div>
                </div>
            
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="btn btn-outline btn-primary w-full" type="submit">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</x-app-layout>
<script>
    function generateSlug() {
        const nama = document.getElementById('judul').value;
        const slug = nama.toLowerCase()
                         .replace(/[^a-z0-9\s-]/g, '')  // Remove all non-alphanumeric characters except spaces and hyphens
                         .trim()                       // Trim leading/trailing spaces
                         .replace(/\s+/g, '-')         // Replace spaces with hyphens
                         .replace(/-+/g, '-');         // Replace multiple hyphens with a single hyphen
        document.getElementById('slug').value = slug;
    }
</script>
<script>
    
    CKEDITOR.replace('description');
</script>