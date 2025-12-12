<?php session_start(); ?>
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
        
        <div class="text-center lg:text-left transform translate-x-[-85px]">
            <h1 class="text-[68px] text-white font-bold leading-tight font-inria">COLLEGE OF COMPUTING</h1>
            <h1 class="text-[68px] text-white font-bold leading-tight font-inria">EDUCATION</h1>
        </div>
        
        <!-- Login Form -->
        <div class="bg-black bg-opacity-40 rounded-lg shadow-lg p-8 w-full max-w-md h-130">
            <form action="../Controllers/login-process.php" method="POST" class="flex flex-col">
                <img src="../images/CCE-LOGO.svg" alt="CCE LOGO" class="items-center mx-auto mb-6 w-24 h-24">
                <h1 class="text-white text-3xl font-semibold mb-6 text-center">Welcome Back Trojans</h1>
                <?php if(isset($_GET['success']) && $_GET['success'] == 'registered'): ?>
                    <div id="successMessage" class="bg-green-500 bg-opacity-80 text-white p-3 rounded mb-4 text-center font-semibold transition-opacity duration-500">
                        Registration successful! Please login.
                    </div>
                    <script>
                        setTimeout(function() {
                            const msg = document.getElementById('successMessage');
                            msg.style.opacity = '0';
                            setTimeout(function() {
                                msg.style.display = 'none';
                            }, 500);
                        }, 3000);
                    </script>
                <?php endif; ?>
                <div class="flex flex-row gap-2 justify-center mb-4">
                    <span class="text-white">Don’t have account yet?</span>
                    <a href="register.php" class="underline text-white font-bold">Sign-up</a>
                </div>
                <label for="username" class="mb-2 font-semibold text-gray-200">Username</label>
                <input type="text" id="username" name="username" required class="mb-4 p-2 bg-black bg-opacity-30 text-white border border-gray-500 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400">
                
                <label for="password" class="mb-2 font-semibold text-gray-200">Password</label>
                <input type="password" id="password" name="password" required class="mb-4 p-2 bg-black bg-opacity-30 text-white border border-gray-500 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                
                <?php if(isset($_GET['error'])): ?>
                    <div id="errorMessage" class="bg-red-500 bg-opacity-80 text-white p-3 rounded mb-4 text-center transition-opacity duration-500">
                        <?php 
                            if($_GET['error'] == 'empty_fields') echo 'Please fill all fields!';
                            elseif($_GET['error'] == 'invalid_credentials') echo 'Invalid username or password!';
                            else echo 'Login failed!';
                        ?>
                    </div>
                    <script>
                        setTimeout(function() {
                            const msg = document.getElementById('errorMessage');
                            msg.style.opacity = '0';
                            setTimeout(function() {
                                msg.style.display = 'none';
                            }, 500);
                        }, 3000);
                    </script>
                <?php endif; ?>
                
                <button type="submit" class="bg-[#FFB600] text-black font-bold py-2 rounded">LOGIN</button>
            </form>
        </div>
    </div>
</html>