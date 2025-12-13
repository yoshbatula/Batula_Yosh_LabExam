<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit();
}

$fullname = $_SESSION['fullname'] ?? 'User';
$username = $_SESSION['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="src/css/output.css">
    <link rel="icon" href="images/CCE-LOGO.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body class="relative min-h-screen">
    <!-- Background Image -->
    <img src="images/CCE-BACKGROUND.png" alt="Background Image" class="w-full h-full object-cover fixed -z-10">
    
    <!-- Dark Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-70 -z-5"></div>

    <!-- Navigation Bar -->
    <nav class="relative z-10 bg-black bg-opacity-60 shadow-lg border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="images/CCE-LOGO.svg" alt="Logo" class="h-10 w-10">
                    <span class="ml-3 text-xl font-bold text-white font-inria">Dashboard</span>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <div class="h-10 w-10 rounded-full bg-[#FFB600] flex items-center justify-center text-black font-bold">
                            <?php echo strtoupper(substr($fullname, 0, 1)); ?>
                        </div>
                        <div class="hidden md:block">
                            <p class="text-sm font-medium text-white"><?php echo htmlspecialchars($fullname); ?></p>
                            <p class="text-xs text-gray-300">@<?php echo htmlspecialchars($username); ?></p>
                        </div>
                    </div>
                    <a href="index.php?logout=true" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Section -->
        <div class="bg-black bg-opacity-50 rounded-lg shadow-lg p-6 mb-6 border border-gray-700">
            <h1 class="text-3xl font-bold text-white mb-2 font-inria">
                Welcome back, <span class="text-[#FFB600]"><?php echo htmlspecialchars($fullname); ?></span>!
            </h1>
            <p class="text-gray-300">Here's what's happening with your account today.</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-black bg-opacity-50 rounded-lg shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Username</p>
                        <p class="text-2xl font-bold text-white">@<?php echo htmlspecialchars($username); ?></p>
                    </div>
                    <div class="h-12 w-12 bg-[#FFB600] bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="h-6 w-6 text-[#FFB600]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-black bg-opacity-50 rounded-lg shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Account Status</p>
                        <p class="text-2xl font-bold text-green-400">Active</p>
                    </div>
                    <div class="h-12 w-12 bg-green-500 bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="h-6 w-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-black bg-opacity-50 rounded-lg shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Last Login</p>
                        <p class="text-2xl font-bold text-white">Just Now</p>
                    </div>
                    <div class="h-12 w-12 bg-[#FFB600] bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="h-6 w-6 text-[#FFB600]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Card -->
        <div class="bg-black bg-opacity-50 rounded-lg shadow-lg p-6 border border-gray-700">
            <h2 class="text-xl font-bold text-white mb-4 font-inria">Profile Information</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-12 w-12 bg-[#FFB600] bg-opacity-20 rounded-lg flex items-center justify-center">
                        <svg class="h-6 w-6 text-[#FFB600]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-400">Full Name</p>
                        <p class="text-lg font-semibold text-white"><?php echo htmlspecialchars($fullname); ?></p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-12 w-12 bg-[#FFB600] bg-opacity-20 rounded-lg flex items-center justify-center">
                        <svg class="h-6 w-6 text-[#FFB600]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-400">Username</p>
                        <p class="text-lg font-semibold text-white">@<?php echo htmlspecialchars($username); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>