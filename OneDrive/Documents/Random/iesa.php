<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Letter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .letter-container {
            perspective: 1000px;
        }

        .letter {
            transform-style: preserve-3d;
            transition: transform 1s;
        }

        .letter.opened {
            transform: rotateX(180deg);
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen bg-pink-100">
    <div class="letter-container relative w-64 h-40">
        <div id="letter" class="letter bg-pink-300 w-full h-full flex items-center justify-center rounded-xl shadow-xl text-center text-white text-lg font-bold">
            Click Open ❤️
        </div>
        <div id="message" class="hidden absolute top-0 left-0 w-full h-full bg-pink-500 flex items-center justify-center rounded-xl shadow-xl text-white text-lg p-4">
            "My love for you is like a journey, starting at forever and ending at never."
        </div>
    </div>
    <div class="mt-6 flex space-x-4">
        <button onclick="openLetter()" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md">Open</button>
        <button onclick="resetLetter()" class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow-md">Reset</button>
    </div>

    <script>
        function openLetter() {
            document.getElementById('letter').classList.add('opened', 'hidden');
            document.getElementById('message').classList.remove('hidden');
        }

        function resetLetter() {
            document.getElementById('letter').classList.remove('opened', 'hidden');
            document.getElementById('message').classList.add('hidden');
        }
    </script>
</body>

</html>