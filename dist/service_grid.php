<div class="container mx-auto flex flex-col justify-center items-center gap-4 md:px-20">
           
            <h1 class="text-2xl md:text-5xl text-teal-500 font-bold pb-5 ">
                Our Services For You
            </h1>

            <div class="grid grid-cols md:grid-cols-4 gap-4">

                <div class="bg-white flex flex-col mytext justify-center items-center gap-2 shadow-lg py-5 hover:bg-teal-500 hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay="0s">
                    <div class="bg-slate-100 p-3 rounded-full">
                        <a href="house_cleaning.php">
                        <img src="images/home.jpg" alt="" srcset="" class="">
                        </a>
                    

                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base">House Cleaning</h1>
                    <p class="text-sm md:px-10  text-center">
                        Transform your home into a sanctuary of cleanliness with our professional house cleaning services.
                    </p>
                    <p class="">------</p>
                </div>

                 <div class="bg-white flex mytext flex-col p-2 justify-center items-center gap-2 shadow-lg py-5  hover:bg-teal-500  hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".1s">
                    <div class=" bg-slate-100 p-3 rounded-full">
                        <a href="office_clean.php">
                    <img src="images/office.jpg" alt="" srcset="">
                    </a>

                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base">Office Cleaning</h1>
                    <p class="text-sm md:px-10  text-center">
                        We understand the importance of a clean, organized office for productivity and employee satisfaction.
                    </p>
                    <p class="">------</p>
                </div>

                
                 <div class="bg-white flex mytext flex-col p-2 justify-center items-center gap-2 shadow-lg py-5  hover:bg-teal-500  hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".28s">
                    <div class="img bg-slate-100 p-3 rounded-full">
                        <a href="carpet.php">
                        <img src="images/carpet.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base">Carpet Cleaning</h1>
                    <p class="text-sm md:px-10  text-center">
                        Our after-party cleaning service is here to restore order and cleanliness to your space after any gathering, no matter the size
                    </p>
                    <p>------</p>
                </div>

                <div class="bg-white flex mytext flex-col p-2 justify-center items-center gap-2 shadow-lg  hover:bg-teal-500 hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".36s">
                    <div class="img bg-slate-100 p-3 rounded-full">
                        <a href="windows.php">
                        <img src="images/windows.jpg" alt="" srcset="">
                        </a>
                    </div>
                    <h1 class=" text-teal-500 text-lg font-bold text-center md:text-base">Windows Cleaning</h1>
                    <p class="text-sm md:px-10  text-center">
                        Whether you're handing over the keys to the next resident or stepping into your new home, we ensure that every nook and cranny is polished to perfection.
                    </p>

                    <p>------</p>
                </div>

                <div class="bg-white btrow flex flex-col p-2 justify-center items-center gap-2 shadow-lg  hover:bg-teal-500  hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".4s">
                    <div class="bg-slate-100 p-3 rounded-full">
                        <img src="images/van.jpg" alt="" srcset="">
                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base">Commercial Removals</h1>
                    <p class="text-sm md:px-10  text-center">
                        Navigate the academic year with a clean and conducive living environment through our student accommodation cleaning services
                    </p>

                    <p>------</p>
                </div>

                <div class="bg-white btrow flex flex-col p-2 justify-center items-center gap-2 shadow-lg  hover:bg-teal-500 hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".5s">
                    <div class="img bg-slate-100 p-3 rounded-full">
                        <img src="images/van2.jpg" alt="" srcset="">
                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base">Home Moves</h1>
                    <p class="text-sm md:px-10  text-center">
                        Bid farewell to the remnants of winter with our Off Spring Cleaning service, a deep cleaning solution to invigorate your home for the year ahead
                    </p>

                    <p>------</p>
                </div>

                <div class="bg-white btrow flex flex-col p-2 justify-center items-center gap-2 shadow-lg  hover:bg-teal-500 hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".7s">
                    <div class="bg-slate-100 p-3 rounded-full">
                        <img src="images/van3.jpg" alt="" srcset="">
                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base">Man and Van</h1>
                    <p class="text-sm md:px-10  text-center">
                        Experience the world outside with crystal-clear clarity through our professional window cleaning services.
                    </p>

                    <p>------</p>
                </div>

                <div class="bg-white btrow flex flex-col p-2 justify-center items-center gap-2 shadow-lg   hover:cursor-pointer transition duration-250 ease-out hover:ease-in" data-delay=".7s">
                    <div class="img bg-slate-100 p-3 rounded-full">
                        <img src="images/cont.jpg" alt="" srcset="">
                    </div>
                    <h1 class="text-teal-500 text-lg font-bold text-center md:text-base ">Contruction site cleaning</h1>
                    <p class="text-sm md:px-10  text-center">
                        We specialize in delivering top-tier protection for both individuals and businesses
                    </p>

                    <p>------</p>
                </div> 
                
            </div>
        </div>

        <script>

            const houses = document.querySelectorAll('.mytext')
            const row2 = document.querySelectorAll('.btrow')
            observer = new IntersectionObserver((entries) =>{

                entries.forEach(entry => {
                    if (entry.intersectionRatio > 0){
                    entry.target.style.animation = `house1 2s ${entry.target.dataset.delay} forwards ease-out`;
                }
                else {
                    entry.target.style.animation = 'none'
                }
                }) 
               
                
            })

            observer2 = new IntersectionObserver((entries) =>{

            entries.forEach(entry => {
                if (entry.intersectionRatio > 0){
                entry.target.style.animation = `row2animation 2s ${entry.target.dataset.delay} forwards ease-out`;
            }
            else {
                entry.target.style.animation = 'none'
            }
            }) 


            },{
                threshold: 0,
            })
            houses.forEach(house => {
                observer.observe(house)

            })
            row2.forEach(row => {
                observer2.observe(row)

            })
        </script>