<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/custom.css">
    <title>Login</title>
</head>
<body>
    
    <!-- component -->
<div class="min-h-screen bg-gradient-to-b from-cyan-500 to-blue-700 flex justify-center items-center">
	<div class="absolute w-60 h-60 rounded-xl bg-blue-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
	</div>
	
	<div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
		<div>
			<h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Digital Arsip</h1>
		</div>
		<div class="space-y-4">
			<input type="text" placeholder="Email Addres" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
			<input type="text" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
    	</div>
			<div class="text-center mt-6">
				<button href="/dashboard" class="py-3 w-64 text-xl text-white bg-blue-400 rounded-2xl">Login</button>
				<p class="mt-4 text-sm">Don't have an account? <a class="underline cursor-pointer" href="/registration"> Create Account</a>
				</p>
			</div>
	</div>
		<div class="w-40 h-40 absolute bg-blue-300 rounded-full top-0 right-12 hidden md:block"></div>
		<div
			class="w-20 h-40 absolute bg-blue-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
		</div>
	</div>

</body>
</html>