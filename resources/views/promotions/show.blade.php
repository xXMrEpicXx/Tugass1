<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winter Discount</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <img src="/storage/promotions/winter-discount.jpg" 
             alt="Winter Discount"
             class="w-full h-64 object-cover">
        
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-2">Winter Discount</h1>
            <p class="text-gray-500 mb-4">
                Diperbarui: 03 Apr 2025 14:30
            </p>
            
            <div class="prose max-w-none">
                Enjoy a cozy winter with special discounts!<br>
                Get 30% off on all winter collections.<br>
                Valid until December 31st.
            </div>
            
            <div class="mt-6 flex space-x-4">
                <a href="/promotions/1/edit" 
                   class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <form action="/promotions/1" method="POST">
                    <input type="hidden" name="_token" value="[CSRF_TOKEN]">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" 
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                            onclick="return confirm('Yakin ingin menghapus promo ini?')">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>