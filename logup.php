<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<section class="h-full gradient-form bg-gray-200 md:h-screen">
  <div class="max-w-[50%]">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="xl:w-96">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-full px-4 md:px-0">
              <div class="md:p-12 md:mx-6">
                
                <form action="index.php" method="post">
                  <p class="mb-4"><b>USER REGISTER</b></p>
                  <div class="mb-4">
                    <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="adminuser" name="username" value="" placeholder="Username" required/>
                  </div>
                  <div class="mb-4">
                    <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="adminpass" name="password" value="" placeholder="Password" required/>
                  </div>
                  <div class="text-center pt-1 mb-12 pb-1">
                    <input class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded bg-red-500 shadow-md hover:bg-red-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3" type="submit" value="Inscription" name="logup">
                  </div>
                  <p class="text-red-500">Vous avez déjà un compte ? </p>
                  <a class="text-red-500" href="index.php">Connectez vous</a>
                </form>
              </div>
            </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>