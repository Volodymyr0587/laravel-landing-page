<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen bg-indigo-300">
    <div class="m-auto max-w-sm p-4 bg-sky-700 border-2 border-white text-white rounded-md text-center space-y-3">
        <div class="flex justify-center">
            <img src="/avatar.png" alt="avatar" class="w-24 h-24 rounded-full border-4 border-violet-400 bg-cover">
        </div>
        <h1 class="text-2xl text-yellow-300 font-bold">Volodymyr Honcharov</h1>
        <p class="text-lg font-bold">Web Development (Laravel)</p>
        <p class="text-sm">My social media</p>
        <div class="space-y-3 pb-4">
            <a href="#" target="_blank"
                class="bg-emerald-600 shadow-md flex flex-nowrap justify-center items-center py-2 px-4 rounded-md hover:bg-emerald-300 hover:text-gray-800
                transition-colors duration-200"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
                GitHub</a>
            <a href="#" target="_blank"
                class="bg-emerald-600 shadow-md flex flex-nowrap justify-center items-center py-2 px-4 rounded-md hover:bg-emerald-300 hover:text-gray-800
                transition-colors duration-200"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 0h-20v24h14l6-6v-18zm-7 23h-12v-22h18v16h-6v6zm1-5h4.586l-4.586 4.586v-4.586zm-3 1h-8v1h8v-1zm0-3h-8v1h8v-1zm6-2v-1h-14v1h14zm0-4h-4v1h4v-1zm-6.006 1h-7.991l-.003-.789c-.003-.72-.006-1.615 1.314-1.92 1.483-.341 1.236-.418 1.158-.563-1.078-1.988-.71-3.173-.395-3.703.388-.651 1.089-1.025 1.923-1.025.827 0 1.523.368 1.91 1.011.545.904.409 2.222-.379 3.713-.105.196-.195.255 1.119.559 1.355.312 1.352 1.212 1.35 1.936l-.006.781zm-6.994-1h6c-.007-.547-.07-.626-.54-.734-.855-.198-1.629-.376-1.901-.972-.142-.311-.113-.66.087-1.039.61-1.151.758-2.146.407-2.729-.276-.458-.778-.526-1.053-.526-.48 0-.857.19-1.063.537-.352.59-.201 1.58.414 2.714.204.377.236.727.095 1.039-.269.598-1.036.774-1.847.962-.525.121-.593.202-.599.748zm13-2v-1h-4v1h4zm0-4h-4v1h4v-1z"/>
                </svg>
                Resume</a>
        </div>
        <p class="text-sm">My contacts</p>
        <div>
            <a href="tel:+1111111111"
                class="text-lg hover:text-green-400 font-bold"
            >+1 (111) 111-11-11</a>
            <a href="mailto:qwerty@gmail.com"
                class="text-lg hover:text-green-400"
            >qwerty@gmail.com</a>
        </div>
    </div>
</body>
</html>

