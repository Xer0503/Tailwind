<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gadget Store</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="h-screen w-screen bg-gray-100 flex items-center justify-center">
        <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-6 text-center">Welcome to Online Gadget Store</h2>
            <p class="text-gray-700 mb-4">Discover the latest gadgets and electronics at unbeatable prices.</p>
            <a href="products.php" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Shop Now</a>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>