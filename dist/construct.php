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

          </p> <p>Contruction site cleaning</p>

        </div>
      </div>
    </div>
 
  <section class="services bg-slate-100 md:p-20 p-10">


        <div class="content container mx-auto flex flex-col justify-center md:flex-row p-5 md:p-20 gap-7 relative">
            
            <div class="bg-local p-5 bg-cover block md:h-auto h-60 w-full md:w-1/2 " style="background-image: url('images/cont.jpg')" >
            <?php include 'includes/stars.php'; ?>
            </div>
            <div class=" flex flex-col mt-2 md:mt-0 gap-5 md:w-1/2">
              <h1 class="text-4xl font-semibold">Construction site cleaning</h1>
              <p>Construction sites can quickly accumulate debris, dust, and waste, making it essential to have a reliable cleaning service to maintain a safe and organized workspace. At RHCL, we specialize in providing comprehensive construction site cleaning services to ensure that your site remains clean, tidy, and compliant with safety regulations.</p>

              <p>Our experienced team is equipped with the necessary tools, equipment, and expertise to handle all aspects of construction site cleanup. From removing debris and trash to sweeping and vacuuming, we'll leave your site looking spotless and ready for the next phase of construction.</p>

              <p>We understand the importance of efficiency and timeliness in the construction industry, which is why we work quickly and diligently to complete our cleaning tasks on schedule. Whether you need daily, weekly, or one-time cleaning services, we'll work with you to develop a cleaning plan that meets your project's requirements.</p>

              <p>Safety is our top priority, and our team adheres to strict safety protocols to ensure a secure working environment for everyone on-site. We also prioritize environmentally friendly practices, disposing of waste responsibly and recycling whenever possible.</p>

              <p>Partner with RHCL Construction Site Cleaning Service and experience the difference that our professionalism and dedication can make for your construction project. Contact us today to schedule your cleaning service and ensure that your construction site remains clean, safe, and productive.</p>
                

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