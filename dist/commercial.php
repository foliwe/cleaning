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

          </p> <p>Commercial Removals</p>

        </div>
      </div>
    </div>
 
  <section class="services bg-slate-100 md:p-20 p-10">


        <div class="content container mx-auto flex flex-col justify-center md:flex-row p-5 md:p-20 gap-7 relative">
            
            <div class="bg-local p-5 bg-cover block md:h-auto h-60 w-full md:w-1/2 " style="background-image: url('images/van.jpg')" >
            <?php include 'includes/stars.php'; ?>
            </div>
            <div class=" flex flex-col mt-2 md:mt-0 gap-5 md:w-1/2">
               
                <h1 class="text-4xl font-semibold">Commercial Removals</h1>
                <p class="">Maintaining a clean and hygienic work environment is essential for the success of any business. At RSL, we specialize in providing top-notch commercial cleaning services tailored to meet the unique needs of your workplace. Whether you operate a small office, a large corporate building, or a retail space, our experienced team is here to ensure that your premises are always sparkling clean and inviting.</p>
                <p>
                Our comprehensive commercial cleaning services cover everything from dusting and vacuuming to sanitizing surfaces, emptying trash bins, and beyond. We understand that every business has its own set of cleaning requirements, which is why we work closely with you to develop a customized cleaning plan that fits your schedule and budget.</p>

                <p>
                At RSL, we pride ourselves on our attention to detail and commitment to excellence. Our skilled cleaners are meticulously trained to deliver consistent and reliable results, using industry-leading cleaning products and equipment to ensure the highest standard of cleanliness in your workplace.</p>
                <p>
                We understand the importance of professionalism and discretion in commercial environments, which is why our team members are uniformed, background-checked, and trained to respect your privacy and security protocols.</p>

                <p>Partner with RSL Commercial Cleaning Services and experience the difference that a clean and hygienic workplace can make for your business. Contact us today to schedule a consultation and discover how we can help you maintain a pristine work environment that reflects the professionalism of your brand..</p>
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