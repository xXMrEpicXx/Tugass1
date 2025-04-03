<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromoKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <span class="text-xl font-bold text-blue-600">PromoKu</span>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Our Special Promotions</h1>
            <a href="/promotions/create" 
               class="inline-block bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg font-medium">
                + Create New Promotion
            </a>
        </div>

        <!-- Promotions Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Promotion Card 1 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Winter Discount</h2>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                            WINTER
                        </span>
                    </div>
                    <p class="text-gray-600 mb-8">Enjoy a cozy winter with special discounts!</p>
                    <div class="flex space-x-4">
                        <a href="/promotions/1/edit" 
                           class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white text-center py-3 rounded-lg font-medium">
                            EDIT
                        </a>
                        <a href="/promotions/1" 
                           class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-center py-3 rounded-lg font-medium">
                            DETAIL
                        </a>
                    </div>
                </div>
            </div>

            <!-- Promotion Card 2 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Black Friday Deals</h2>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">
                            SALE
                        </span>
                    </div>
                    <p class="text-gray-600 mb-8">Limited-time offers for Black Friday!</p>
                    <div class="flex space-x-4">
                        <a href="/promotions/2/edit" 
                           class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white text-center py-3 rounded-lg font-medium">
                            EDIT
                        </a>
                        <a href="/promotions/2" 
                           class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-center py-3 rounded-lg font-medium">
                            DETAIL
                        </a>
                    </div>
                </div>
            </div>

            <!-- Promotion Card 3 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Summer Time Sales</h2>
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                            SUMMER
                        </span>
                    </div>
                    <p class="text-gray-600 mb-8">Get up to 50% off on all items!</p>
                    <div class="flex space-x-4">
                        <a href="/promotions/3/edit" 
                           class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white text-center py-3 rounded-lg font-medium">
                            EDIT
                        </a>
                        <a href="/promotions/3" 
                           class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-center py-3 rounded-lg font-medium">
                            DETAIL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-6">
        <div class="container mx-auto px-4 text-center text-gray-500">
            &copy; 2025 Promo Website. All rights reserved.
        </div>
    </footer>
</body>
</html>