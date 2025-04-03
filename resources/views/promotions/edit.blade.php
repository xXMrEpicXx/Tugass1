<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Promo: Winter Discount</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Edit Promo: Winter Discount</h1>
    
    <form action="/promotions/1" method="POST" enctype="multipart/form-data" class="max-w-lg">
        <input type="hidden" name="_token" value="[CSRF_TOKEN]">
        <input type="hidden" name="_method" value="PUT">

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Judul Promo:</label>
            <input type="text" name="title" id="title" 
                   class="w-full px-3 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="Winter Discount"
                   required>
            <!-- Error message would appear here if there was one -->
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
            <textarea name="description" id="description" rows="5"
                      class="w-full px-3 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>Enjoy a cozy winter with special discounts!</textarea>
            <!-- Error message would appear here if there was one -->
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Gambar Saat Ini:</label>
            <img src="/storage/promotions/winter-discount.jpg" 
                 alt="Current Image"
                 class="h-32 mb-2">
            
            <label for="image" class="block text-gray-700 font-bold mb-2">Gambar Baru (opsional):</label>
            <input type="file" name="image" id="image" 
                   class="w-full px-3 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
                   accept="image/*">
            <!-- Error message would appear here if there was one -->
        </div>

        <div class="flex items-center justify-between">
            <a href="/promotions" 
               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Batal
            </a>
            <button type="submit" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Update Promo
            </button>
        </div>
    </form>
</div>
</body>
</html>