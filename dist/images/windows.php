<!doctype html>
<html>
<?php require_once 'head.php'; ?>'
<body>
  <body x-data="{openMenu: false}" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">

  <?php include 'header.php'; ?>
   <div class="hidden md:block bg-stone-100 py-5">
      <h1 class="text-4xl text-center py-4 font-bold">
        Services
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

          </p> <p>Windows Cleaning</p>

        </div>
      </div>
    </div>
 
  <section class="services bg-slate-100 md:p-20 p-10">


        <div class="content container mx-auto flex flex-col justify-center md:flex-row p-5 md:p-20 gap-7 relative">
            
            <div class="bg-local p-5 bg-cover block md:h-auto h-60 w-full md:w-1/2 " style="background-image: url('images/windows.jpg')" >
            <?php include 'includes/stars.php'; ?>
            </div>
            <div class=" flex flex-col mt-2 md:mt-0 gap-5 md:w-1/2">
               
                <h1 class="text-4xl font-semibold">Windows Cleaning</h1>
                <p>Sparkling clean windows can significantly enhance the appearance of your home or business, allowing natural light to flood in and providing clear views of the outside world. At RSL, we specialize in providing professional window cleaning services to ensure that your windows remain streak-free and gleaming.</p>

              <p>Our experienced team of window cleaners is equipped with the latest tools and techniques to tackle windows of all shapes, sizes, and heights. Whether you have single or multi-story windows, we have the expertise to deliver outstanding results.</p>

              <p>We understand that dirty windows can detract from the overall aesthetic of your property, which is why we pay meticulous attention to detail with every window cleaning service. From removing dirt, grime, and water spots to wiping down frames and sills, we leave no corner untouched.</p>

              <p>At RSL, we prioritize safety and professionalism. Our window cleaners are trained to adhere to strict safety protocols and use eco-friendly cleaning solutions to protect both your windows and the environment.</p>

            <p>Experience the difference with RSL Windows Cleaning Service and enjoy the clarity and brightness that sparkling clean windows can bring to your home or business. Contact us today to schedule your window cleaning service and let us help you achieve crystal-clear views.</p>
                <div class="flex gap-11">
                    <div class="flex flex-col">
                        <div class="flex gap-1 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"         viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <h1 class="text-xs">Cost Effective</h1>
                        </div>

                        <div class="flex gap-1 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"         viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <h1 class="text-xs">100% Satisfaction</h1>
                        </div>
                    
                    </div>

                    <div class="flex flex-col">
                        <div class="flex gap-1 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"         viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <h1 class="text-xs">Insured</h1>
                        </div>

                        <div class="flex gap-1 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"         viewBox="0 0 24 24" stroke-width="1.5" stroke="#10b981" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <h1 class="text-xs">Quality services</h1>
                        </div>
                    
                    </div>
                    
                </div>

               
            </div>
        </div>

       



    </section>
  <?php include 'footer.php'; ?>
</body>
</html>