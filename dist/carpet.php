<?php
    // Define page titles
    $page_titles = "Service: Carpet Cleaning";

    ?>
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

          </p> <p>Carpet Cleaning</p>

        </div>
      </div>
    </div>
 
  <section class="services bg-slate-100 md:p-20 p-10">


        <div class="content container mx-auto flex flex-col justify-center md:flex-row p-5 md:p-20 gap-7 relative">
            
            <div class="bg-local p-5 bg-cover block md:h-auto h-60 w-full md:w-1/2 " style="background-image: url('images/carpet.jpg')" >
            <?php include 'includes/stars.php'; ?>
            </div>
            <div class=" flex flex-col mt-2 md:mt-0 gap-5 md:w-1/2">
               
                <h1 class="text-4xl font-semibold">Carpet Cleaning</h1>
                <p class=" ">Revitalize your carpets with RSL's professional carpet cleaning service. Over time, carpets can accumulate dirt, stains, and odors that regular vacuuming simply can't eliminate. That's where we come in. Our expert carpet cleaners are equipped with state-of-the-art equipment and eco-friendly cleaning solutions to restore your carpets to their original freshness and fluffiness.</p>
                <p>
                Using a proven combination of hot water extraction and advanced cleaning techniques, we penetrate deep into the fibers of your carpets to remove embedded dirt, dust, allergens, and stubborn stains. Our thorough process not only cleans your carpets but also helps prolong their lifespan, leaving them looking and feeling like new.</p>
                <p>
                At RSL, we understand that every carpet is unique, which is why we tailor our cleaning approach to suit the specific needs of your carpets. Whether you have synthetic or natural fibers, high-traffic areas, or delicate rugs, our experienced technicians will assess the condition of your carpets and recommend the most effective cleaning method.</p>

                Customer satisfaction is our top priority, which is why we go above and beyond to deliver exceptional results with every carpet cleaning service. From residential homes to commercial spaces, no job is too big or too small for RSL.
                <p>
                Experience the difference with RSL Carpet Cleaning Services – where expertise meets excellence. Contact us today to schedule your carpet cleaning appointment and give your carpets the care they deserve.</p>
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