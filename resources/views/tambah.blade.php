<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Makanan</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="w-[100% h-[100vh] flex flex-col justify-center">
        <h1 class="text-center text-3xl font-semibold">Tambah Makanan</h1>
        <form action="{{ url('makanan')}}" method="post" class="flex flex-col justify-center text-center gap-[30px] mt-4">
            @csrf
            <div class="flex flex-col justify-center gap-2">
                <label for="">Nama Makanan</label>
                <input type="text" name="nama" placeholder="masukan nama makanan" class="border px-4 py-2 w-[300px] mx-auto rounded-full">
            </div>
            <div class="flex flex-col justify-center gap-2">
                <label for="">Kategori Makanan</label>
                <input type="text" name="kategori" placeholder="masukan nama makanan" class="border px-4 py-2 w-[300px] mx-auto rounded-full">
            </div>
            <div class="flex flex-col justify-center gap-2">
                <label for="">Harga Makanan</label>
                <input type="text"  name="harga" placeholder="masukan nama makanan" class="border px-4 py-2 w-[300px] mx-auto rounded-full">
            </div>
            <button type="submit" class="px-4 py-2 bg-green-400 w-[200px] rounded-full mx-auto">Tambah</button>
        </form>
    </section>
</body>
</html>