<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Invoice Geneartor</title>
</head>
<body>
<header class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 dark:bg-gray-800 dark:border-gray-700">
    <nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">InvoiceX</a>
        <div class="sm:hidden">
          <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
            <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
          </button>
        </div>
      </div>
      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
          <a class="font-medium text-blue-600 sm:py-6 dark:text-blue-500" href="#" aria-current="page">Landing</a>
          <a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-gray-400 dark:hover:text-gray-500" href="#">Account</a>
          <a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-gray-400 dark:hover:text-gray-500" href="#">Work</a>
          <a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-gray-400 dark:hover:text-gray-500" href="#">Blog</a>

          <div class="hs-mega-menu sm:py-6" data-hs-mega-menu-trigger="hover">
            <button id="hs-mega-menu-basic-dr" type="button" class="hs-mega-menu-toggle hs-mega-menu-open:text-gray-500 hover:hs-mega-menu-open:text-gray-500 flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
              Company
              <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
              </svg>
            </button>

            <div class="hs-mega-menu-content hs-mega-menu-open:opacity-100 hs-mega-menu-open:mt-0 opacity-0 top-full hidden z-10 mt-2 rounded-md before:absolute before:-top-5 before:left-0 before:w-full before:h-5 w-full bg-white p-2 sm:w-48 sm:transition-all sm:absolute sm:shadow-md sm:duration-300 dark:bg-gray-800" aria-labelledby="hs-mega-menu-basic-dr">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                About
              </a>
              <div class="hs-mega-menu relative sm:flex sm:items-center sm:gap-x-3.5 rounded-md" data-hs-mega-menu-trigger="hover">
                <a id="hs-mega-menu-basic-sub-dr" class="hs-mega-menu-toggle flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:;">
                  Sub menu
                  <svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                  </svg>
                </a>

                <div class="hs-mega-menu-content hs-mega-menu-open:opacity-100 sm:hs-mega-menu-open:mt-0 opacity-0 sm:mt-2 sm:mx-2.5 top-0 right-full hidden z-10 sm:rounded-md before:absolute before:top-0 before:-left-5 before:w-5 before:h-full after:absolute after:top-0 after:-right-5 after:w-5 after:h-full w-full bg-white p-2 sm:w-48 sm:transition-all sm:absolute sm:shadow-md sm:duration-300 dark:bg-gray-800" aria-labelledby="hs-mega-menu-basic-sub-dr">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                    Newsletter
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                    Purchases
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                    Downloads
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                    Team Account
                  </a>
                </div>
              </div>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                Services
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                Customer Story
              </a>
            </div>
          </div>

          <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 sm:border-l sm:border-gray-300 sm:my-6 sm:pl-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500" href="#">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
            </svg>
            Log in
          </a>
        </div>
      </div>
    </nav>
  </header>
  <form method="post" action="preview.php">
  <div class="items-center" style="width:80%; margin:0 auto; margin-top:24px; margin-bottom:24px;">
<div class="flex justify-between items-center  py-4 grid gap-8 grid-cols-2" style="margin:0 auto;">
  <!-- Content of Landing Page -->

                <!-- Company information box -->
    <div class="bg-white rounded-lg border-solid border-2 border-indigo-500 p-8 md:ml-auto  mt-10 md:mt-0 shadow-md mx-8 my-8 items-center px-4 py-4 w-full" style="margin:0 auto; margin-top:24px;">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Company Info</h2>
      <hr class="my-3" >
      <!-- <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p> -->
      <div class="relative mb-4">
        <label for="c-name" class="leading-7 text-sm text-gray-600">Company Name</label>
        <input type="text" id="c-name" name="c-name" placeholder="Ex. Plus Infotech" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="c-mobile" class="leading-7 text-sm text-gray-600">Mobile No.</label>
        <input type="text" id="c-mobile" name="c-mobile" placeholder="Ex. 1234567890 " class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="c-pan" class="leading-7 text-sm text-gray-600">PAN no. (optional) </label>
        <input type="text" id="c-pan" name="c-pan" placeholder="Ex. ALWPG5809L" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="c-gst" class="leading-7 text-sm text-gray-600">GST no. (optional) </label>
        <input type="text" id="c-gst" name="c-gst" placeholder="Ex. 24ALWPG5809L1Z" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      
    </div>
            <!-- customer information box -->
    <div class="bg-white rounded-lg border-solid border-2 border-indigo-500 p-8 md:ml-auto  mt-10 md:mt-0 shadow-md mx-8 my-8 items-center px-4 py-4 w-full" style=" margin:0 auto; margin-top:24px;">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Customer Info</h2>
      <hr class="my-3" >
      <div class="relative mb-4">
        <label for="cu-name" class="leading-7 text-sm text-gray-600">Company Name</label>
        <input type="text" id="cu-name" name="cu-name" placeholder="Ex. Plus Infotech" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="cu-mobile" class="leading-7 text-sm text-gray-600">Mobile No.</label>
        <input type="text" id="cu-mobile" name="cu-mobile" placeholder="Ex. 1234567890 " class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="pan" class="leading-7 text-sm text-gray-600">PAN no. (optional) </label>
        <input type="text" id="cu-pan" name="cu-pan" placeholder="Ex. ALWPG5809L" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="cu-gst" class="leading-7 text-sm text-gray-600">GST no. (optional)</label>
        <input type="text" id="cu-gst" name="cu-gst" placeholder="Ex. 24ALWPG5809L1Z" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div> 
    </div>
    </div>
    </div>
            <!-- Product information box -->
    <div class="bg-white rounded-lg border-solid border-2 border-indigo-500 p-8 md:ml-auto  mt-10 md:mt-0 shadow-md mx-8 my-8 items-center" style="width:80%; margin:0 auto; margin-top:24px; margin-bottom:24px;">
    <div class="flex justify-between items-center">
    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Product info</h2>
    <button onclick="addCode()" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
  Add New Item
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
</svg>
    </button>
    </div>
      <hr class="my-3" >
      <div id="product-data">
      <div class="flex place-content-around my-6" >
      <input type="text" id="pd-1" name="pd-gst" placeholder="Product name" class=" bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      <input type="text" id="qp-1" name="qp-1" placeholder="Qty" class=" bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      <input type="text" id="rp-1" name="rp-1" placeholder="Rate" class=" bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      
    </div>
      </div>
      <input type="text" id="hidden" name="hidden" hidden></input>
    </div>


    <div class="items-end" style="width:80%; margin:0 auto;">
    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
  Preview
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
</svg>
    </button>
    </div>
</form>
    <script>
        document.getElementById("hidden").value = 1;
        var x =2;
        function addCode() {
            document.getElementById("product-data").append += 
      "<div class=\"flex place-content-around my-6\"> \
      <input type=\"text\" id=\"pd-"+x+"\" name=\"pd-"+x+"\" placeholder=\"Product name\" class=\" bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out\"> \
      <input type=\"text\" id=\"qp-"+x+"\" name=\"qp-"+x+"\" placeholder=\"Qty\" class=\" bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out\"> \
      <input type=\"text\" id=\"rp-"+x+"\" name=\"rp-"+x+"\" placeholder=\"Rate\" class=\" bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out\"> \
      </div>" ;
      document.getElementById("hidden").value = x;
      x += 1
      
        }
    </script>
</body>
</html>