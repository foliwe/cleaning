<?php
    // Define page titles
    $page_titles = "About Us";

    ?>
<!doctype html>
<html>
<?php require_once 'head.php'; ?>'

<body>
  <body x-data="{openMenu: false}" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">

  <?php include 'header.php'; ?>

  <section>

    <div class="hidden md:block bg-stone-100 py-5">
      <h1 class="text-4xl text-center py-4 font-bold">
        About Us
      </h1>
      <div class="flex justify-center items-center space-x-5 "> 
        <div class="flex items-center space-x-2">
          <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg></p> <p>Home</p>

        </div>
        <div class="flex items-center space-x-2">
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
            </svg>

          </p> <p>About us</p>

        </div>
      </div>
    </div>
  <div class="max-w-screen-lg mx-auto pt-20 bg-white">

    
    <div class="flex flex-col md:flex-row items-center pt-3 md:pt-20">
      <div class="md:w-1/2 p-4">
        <div class="">
          <h1 class="text-4xl py-4 text-teal-500 font-bold">
            Why choose Us
          </h1>
          <p class="pb-3">
            We stand for excellence and commitment in an ever-changing world. Our unparalleled expertise, customer-centric approach, and relentless pursuit of perfection set us apart. We don't just offer services; we offer experiences tailored to your exact needs. Our team is not just skilled—they're passionate about providing solutions that make a tangible difference in your life. With state-of-the-art technology, innovative practices, and a track record of outstanding results, we go the extra mile to ensure your satisfaction. Our dedication to your success is unwavering, and our reputation as industry leaders is well-earned. Partner with us, and experience the highest standard of excellence.
          </p>
          <div class="inline-flex pb-3 space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              <p class="font-semibold">
                Reliable Service
              </p>
          </div>
           <div class="inline-flex pb-3 space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              <p class="font-semibold">
                Cost Effective
              </p>
          </div>
           <div class="inline-flex pb-3 space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              <p class="font-semibold">
                Professionals
              </p>
          </div>
           <div class="inline-flex pb-3 space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>
              <p class="font-semibold">
                100% Satisfaction
              </p>
          </div>
        </div>
        <div class=""></div>
      </div>

      <div class="md:w-1/2 grid grid-cols-2 gap-4">

        <div class="bg-teal-500 p-10 shadow-xl grid place-content-center text-center">
          <h1 class="text-2xl text-white font-bold bg-teal-600 py-1 px-6 rounded-xl">100+</h1>
            <p class="py-2 text-white">Services Done</p>
        </div>

        <div class="bg-teal-500 p-10 shadow-xl grid place-content-center text-center">
          <h1 class="text-2xl text-white font-bold bg-teal-600 py-1 px-6 rounded-xl">200+</h1>
            <p class="py-2 text-white">Total Clients</p>
        </div>

        <div class="bg-teal-500 p-10 shadow-xl grid place-content-center text-center">
          <h1 class="text-2xl text-white font-bold bg-teal-600 py-1 px-6 rounded-xl">150+</h1>
            <p class="py-2 text-white">Projects Done</p>
        </div>

        <div class="bg-teal-500 p-10 shadow-xl grid place-content-center text-center">
          <h1 class="text-2xl text-white font-bold bg-teal-600 py-1 px-6 rounded-xl">10+</h1>
            <p class="py-2 text-white">Years Of Experience</p>
        </div>
        

      </div>
    </div>
  </div>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>xl