<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <section class="min-h-screen flex justify-center items-center bg-color">

        <!-- LOGIN SECTION -->

        <div class="rounded h-auto p-8 max-w-md w-full color-2 my-auto text-white" id="loginForm">
            <form action="get">
                <div class="grid gap-8">
                    <h1 class="text-2xl text-center uppercase">login to your account</h1>
                    <div class="relative ">
                        <input type="email" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " name="email" placeholder="Email" required>
                    </div>

                    <div class="relative ">
                        <input type="password" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " name="password" placeholder="Password" required>
                    </div>

                    <div class="flex flex-col justify-between sm:flex-row">
                        <button type="submit" class="relative py-1 px-11 rounded tracking-widest owner-button">Login</button>

                        <a class="relative py-1 px-11 rounded tracking-widest block renter-button text-center cursor-pointer mt-4 sm:mt-0" id="openRegister">Register?</a>
                    </div>
                </div>
            </form>
        </div>

        <!-- REGISTER SECTION -->

        <div class="rounded p-8 max-w-md w-full color-2 my-auto text-white hidden" id="registerForm">
            <form action="get">
                <div class="grid gap-6">
                    <h1 class="text-2xl text-center uppercase">Create an account</h1>

                    <div class="relative">
                        <input type="text" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " name="regname" placeholder="Name" required>

                    </div>
                    <div class="relative">
                        <input type="email" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " name="regemail" placeholder="Email" required>

                    </div>
                    <div class="relative flex gap-1 justify-between">
                        <span>
                            <select name="b-month" id="month" class="select border rounded focus:outline-none py-1 pl-2 cursor-pointer" required>
                                <option class="option uppercase font-extrabold" value="">Birth Month</option>
                            </select>
                        </span>
                        <span>
                            <select name="b-day" id="day" class="select border rounded focus:outline-none py-1 pl-2 cursor-pointer" required>
                                <option class="option uppercase font-extrabold" value="">Birth Day</option>
                            </select>
                        </span>
                        <span>
                            <select name="b-year" id="year" class="select border rounded focus:outline-none py-1 pl-2 cursor-pointer" placeholder="Year" required>
                                <option class="option uppercase font-extrabold" value="">Birth Year</option>
                            </select>
                        </span>

                    </div>
                    <div class="relative">
                        <input type="text" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " required="required" name="address" placeholder="Address">
                    </div>
                    <div class="relative  flex gap-4">
                        <input type="password" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " name="password" placeholder="Password" required>

                        <input type="password" class="border rounded focus:outline-none w-full py-1 pl-2 bg-input " name="cpassword" placeholder="Confirm Password" required>

                    </div>
                    <div class="relative  text-xs">
                        <input type="checkbox" id="checkbox" value="agree">
                        <label for="checkbox">By signing up, you agree to Arkilla's <a href="#" class="underline hover:text-blue-500"> Terms and Conditions </a> and <a href="#" class="underline hover:text-blue-500">Privacy Policy.</a></label>
                    </div>

                    <div class="flex flex-col justify-between sm:flex-row">
                        <button type="submit" class="relative py-1 px-11 rounded tracking-widest owner-button">Register</button>

                        <a class="relative py-1 px-11 rounded tracking-widest block renter-button text-center cursor-pointer mt-4 sm:mt-0" id="openLogin">Login?</a>
                    </div>
                </div>
        </div>

    </section>


    <script src="{{ asset('js/login-register.js') }}"></script>

</body>

</html>