<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>RedBus</title>
   
    
</head>
<body>

    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <!--Login container-->
        <div class="bg-purple-100 flex rounded-2x1 shadow-lg max-w-3x1 p-5 items-center">
            <!-- From -->
            <div class="md:w-1/2 px-16">
              <h6 class="font-blod text-2x1 text-[#002D74]">Login</h6>
              <p class="text-sm mt-4 text-[#002D74]">Silahkan login terlebih dahulu</p>

              <form action="<?php echo base_url('auth/aksi_login')?>" class="flex flex-col gap-4">
                <input class="p-2 mt-8 rounded-x1 border" type="email" name="email" placeholder="Email">
                <div class="assword-input-containe">
                    <input class="p-2 rounded-x1 border w-full" type="password" name="password" placeholder="Password">
                    <i class="password-toggle-login fa fa-eye-slash absolute top-1/2 right-3-translate-y-1/2" onclick="togglePassword()"></i>
                </div>
                <button class="bg-[#002D74] rounded-x1 text-white py-2 hover:scale-110 duration-300">Login</button>
              </form>

              <div class="at-10 grid grid-cols-3 items-center text-gray-400">
                <hr class="border-gray-400">
                <p class="text-center">OR</p>
                <hr class="border-gray-400">
              </div>

              <button class="bg-white border py-2 w-full rounded-x1 mt-5 flex justify-center items-center text-sm hover:scale-110 duration-300">
                <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="25px"viewBox="0 0 48 48">
                    <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>Login with Google
              </button>

              <p class="mt-5 text-xs border-b border-gray-400 py-4"> 
                Forgot your password
              </p>

              <div class="mt-3 text-xs flex justify-between items-center">
                <p>If you don't have an account..</p>
                <button class="py-2 px-5 bg-white border rounded-x1 hover:scale-110 duration-300"><a href="register">Register</button></a>
              </div>
            </div>
            <!-- Images -->
            <div class="md:block hidden w-1/2">
                <img class="sm:block hidden rounded-2x1" src="<?php echo base_url('image/jj.png') ?>" alt="">
            </div>

        </div>

    </section>
    <script type="text/javascript">
    function togglePassword() {
        var passwordField = document.getElementById('password');
        var passwordToggle = document.querySelector('.password-toggle-login');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        } else {
            passwordField.type = "password";
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        }
    }
</script>
</body>
</html>