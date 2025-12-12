<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="css/output.css">
    <link rel="icon" href="../images/CCE-LOGO.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Background Image -->
    <img src="../images/CCE-BACKGROUND.png" alt="Background Image" class="w-full h-full object-cover fixed -z-10">
    
    <!-- Dark Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-60 -z-5"></div>
    
    <!-- Main Content -->
    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-center gap-12 h-screen px-4">
        
        <div class="text-center lg:text-left transform translate-x-[-90px]">
            <h1 class="text-[68px] text-white font-bold leading-tight font-inria">COLLEGE OF COMPUTING</h1>
            <h1 class="text-[68px] text-white font-bold leading-tight font-inria">EDUCATION</h1>
        </div>
        
        <!-- Login Form -->
        <div class="bg-black bg-opacity-40 rounded-lg shadow-lg p-8 w-full max-w-md h-130">
            <form action="process_register.php" method="POST" class="flex flex-col">
                <img src="../images/CCE-LOGO.svg" alt="CCE LOGO" class="items-center mx-auto mb-6 w-24 h-24">
                <h1 class="text-white text-3xl font-semibold mb-6 text-center">Create an Account</h1>

                <label for="username" class="mb-2 font-semibold text-gray-200">Username</label>
                <input type="text" id="username" name="username" required class="mb-4 p-2 bg-black bg-opacity-30 text-white border border-gray-500 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400">
                
                <label for="password" class="mb-2 font-semibold text-gray-200">Password</label>
                <input type="password" id="password" name="password" required class="mb-6 p-2 bg-black bg-opacity-30 text-white border border-gray-500 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                
                <button type="submit" class="bg-[#FFB600] text-black font-bold py-2 rounded">LOGIN</button>
            </form>
        </div>
    </div>
</html>