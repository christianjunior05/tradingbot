<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class=" text-left text-2xl font-bold leading-9 tracking-tight text-indigo-600">Inscription</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required 
            class=" w-full rounded-md border-2 border-brown-300 px-3 py-2 text-black bg-brown-300 placeholder-gray-400 shadow-sm ring-1 ring-inset ring-gray-300    sm:text-sm sm:leading-6 
            hover:bg-brown-200 hover:border-brown-400" 
            placeholder="   Entrez votre mail">
     
     
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900" >Mot de passe </label>
           
          </div>
          <div class="mt-2">
            <input class=" w-full rounded-md border-2 border-brown-300 px-3 py-2 pr-8 text-black bg-brown-300 placeholder-gray-400 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 
            hover:bg-brown-200 hover:border-brown-400" 
            id="password" name="password" type="password" autocomplete="current-password" required 
            placeholder="Entrez votre mot de passe">
     
          </div>
          
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Mot de passe oublié ?</a>
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">S'inscrire</button>
          <h4 class="text-center text-gray-400">Ou continuer avec</h4>
          <button class="flex items-center justify-center bg-white border py-2 w-full rounded-md">
            <img src="g.png" alt="Google" style="width: 20px; height: 20px;" class="mr-2">
            <span class="text-lg">Google</span>
        </button>
        
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>