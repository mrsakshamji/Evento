<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Evento
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link rel="shortcut icon" href="Images/online-event-registration.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-sm">
        <div class="bg-green-500 rounded-full p-6 inline-block mb-6">
            <img alt="Payment success icon with a credit card and check mark" class="w-24 h-24" src="Images/printer.png" />
        </div>
        <h1 class="text-3xl font-bold text-green-500 mb-2">Thank You!</h1>
        <p class="text-gray-700 mb-4">Payment done Successfully</p>
        <p class="text-gray-500 mb-6">Please click the button below to navigate back to the home page for a seamless experience.</p>
        <button onclick="window.top.location.href='index.html'" class="bg-green-500 text-white py-2 px-8 rounded-full hover:bg-green-600 transition duration-300">Home</button>
    </div>
</body>
</html>