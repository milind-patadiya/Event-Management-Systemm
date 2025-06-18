<?= template_header('Contact Us!') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
</head>

<body>
    <div class="max-w-lg mx-auto">
        <h2 class="text-3xl font-bold mb-4 text-white">Contact Us</h2>
        <form class="space-y-4" action="" method="post">
            <div>
                <label class="block mb-1 font-bold" for="name">Name</label>
                <input class="w-full border-2 border-gray-300 p-2 rounded-lg" type="text" id="name" name="name"
                    required>
            </div>
            <div>
                <label class="block mb-1 font-bold" for="email">Email</label>
                <input class="w-full border-2 border-gray-300 p-2 rounded-lg" type="email" id="email" name="email"
                    required>
            </div>
            <div>
                <label class="block mb-1 font-bold" for="message">Message</label>
                <textarea class="w-full border-2 border-gray-300 p-2 rounded-lg" id="message" name="message" rows="5"
                    required></textarea>
            </div>
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit"
                onclick="window.alert('Thanks for reaching out to us!')">Send</button>
        </form>
    </div>
</body>

</html>

<?= template_footer() ?>