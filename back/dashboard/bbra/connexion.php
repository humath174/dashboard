<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>sing-in</title>
   
</head>
<body>
<form method="POST" action="login.php">
<div class="register d-flex justify-content-center align-items-center">
    <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
        <div>
            <h2 class=" sign-in text-uppercase">sign up</h2>
        </div>
        <form method="POST" id="signup" action="createaccout.php">
            <div class="mb-3 mt-3 text-start">
                <label class="label-signup" for="username">username: <span class="valid"></span></label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3 text-start">
                <label class="label-signup" for="email">Email: <span class="valid"></span></label>
                <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="email">
            </div>
            <div class="mb-3 text-start">
                <label class="label-signup" for="pwd">Create Password: <span class="valid"></span></label>
                <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="pass" autocomplete="on">
            </div>
            <div class="mb-3 text-start">
                <label class="label-signup" for="conPwd">Confirm Password: <span class="valid"></span></label>
                <input type="password" class="form-control" id="conPwd" placeholder="Confirm password" name="conPass" autocomplete="on">
            </div>
            <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign up</button>
            <p class="mt-4">you have account? <a href="index.php">sign-in</a></p>
        </form>
    </div>
</div>


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="pass" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
    </p>
  </div>
</div>
</form>


</body>
</html>