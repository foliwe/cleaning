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
          
          <p>At <strong>Ryan Services Limited</strong>, we're dedicated to more than just cleanliness; we're committed to your <span class="text-teal-500 font-bold">satisfaction.</span> Our team understands that a clean environment contributes to your overall happiness and well-being, which is why we go above and beyond to deliver exceptional service tailored to your exact needs.</p>

          <p>With our <span class="text-teal-500 font-bold">Comprehensive Insurance</span> coverage, you can trust that your property is in safe hands. We take every precaution to ensure that our services are carried out with the utmost care and attention to detail, giving you peace of mind knowing that you're fully protected.</p>

          <p>Furthermore, our <span class="text-teal-500 font-bold">Lowest Price Guarantee</span> ensures that you receive the best value for your money. We believe that quality cleaning shouldn't come at a premium, which is why we strive to offer competitive rates without compromising on the standard of service.</p>

          <p>And of course, our <span class="text-teal-500 font-bold">Happiness Guarantee</span> is at the heart of everything we do. We're not satisfied until you're delighted with the results. Whether it's a one-time deep clean or regular maintenance, we're here to ensure that your experience with us leaves you with a smile on your face and a spotless space to enjoy.</p>

          <p>Choose <strong>Ryan Services Limited</strong> for all your cleaning needs, and experience the difference that our dedication to excellence can make.</p>  
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

        <div class="specs bg-teal-500 p-10 shadow-xl grid place-content-center text-center" data-delay="0s">
          <h1 class="text-2xl text-white font-bold bg-teal-600 py-1 px-6 rounded-xl">100%</h1>
            <p class="py-2 text-yellow-400 font-bold text-xl">Satisfaction</p>
        </div>

        <div class="specs bg-teal-500 p-10 shadow-xl grid place-content-center text-center" data-delay=".2s">
            <p class="py-2 text-yellow-400 font-bold text-xl"> Comprehensive Insurance </p>
        </div>

        <div class="specs bg-teal-500 p-10 shadow-xl grid place-content-center text-center" data-delay=".4s">
            <p class="py-2 text-yellow-400 font-bold text-xl">Happiness Guarantee </p>
        </div>

        <div class="specs bg-teal-500 p-10 shadow-xl grid place-content-center text-center" data-delay=".6s">
            <p class="text-yellow-400 font-bold text-xl">Lowest Price Guarantee</p>
        </div>
        

      </div>
    </div>
  </div>
  </section>
  <?php include 'footer.php'; ?>

  <script>

      const boxes = document.querySelectorAll('.specs')
      observer4 = new IntersectionObserver((entries) =>{

    entries.forEach(entry => {
        if (entry.intersectionRatio > 0){
        entry.target.style.animation = `boxanimation 1s ${entry.target.dataset.delay} forwards ease-out`;
    }
    else {
        entry.target.style.animation = 'none'
    }
    }) 
   
    
})


boxes.forEach(box => {
    observer4.observe(box)

})

</script>
</body>
</html>