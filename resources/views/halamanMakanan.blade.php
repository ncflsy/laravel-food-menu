<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section id="makanan" class="w-[100%] border flex flex-col text-center justify-center py-[50px] px-[300px]">
        <h1 class="text-3xl font-bold">Daftar Menu Makanan</h1>

        <div class="flex gap-[35px] justify-center mt-[20px]">
            <form action="{{ url('makanan') }}" method="GET" id="kategoriForm">
                <label for="kategori" class="sr-only">Kategori</label>
                <select name="kategori" id="kategori" class="w-[150 px] border px-4 py-2 bg-slate-100" onchange="submitForm()">
                    <option value="makanan" {{ isset($kategori) && $kategori === 'makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="minuman" {{ isset($kategori) && $kategori === 'minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
            </form>

            <form action="{{ url('makanan') }}" method="GET" id="searchForm" class="ml-4">
                <label for="search" class="sr-only">Cari Menu</label>
                <input type="text" name="search" id="search" class="w-[200px] border px-4 py-2" placeholder="Cari Menu" value="{{ isset($search) ? $search : '' }}">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-full">Cari</button>
            </form>
        </div>

        <div id="kumpulan-card-makanan" class="mt-[50px] px-4 flex flex-wrap gap-[35px] justify-center">   
            @foreach ($data as $item)
                <div class="card border w-[190px] px-4 py-2 rounded-2xl">
                    <img src="/img/makann.png" alt="" class="w-[80px] mx-auto mb-4">
                    <h1 class="font-bold">{{ $item->nama }}</h1>
                    <p class="text-justify text-gray-500">{{ $item->keterangan }}</p>
                    <p class="font-bold text-xl mt-4">{{ $item->harga }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <script>
        function submitForm() {
            document.getElementById('kategoriForm').submit();
        }
    </script>
</body>
</html>
