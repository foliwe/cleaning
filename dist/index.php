<?php
session_start();

// Function to generate a CSRF token with an expiration time
function generateCsrfToken() {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    $_SESSION['csrf_token_time'] = time(); // Store the current time
}

// Function to verify the CSRF token and its expiration time
function verifyCsrfToken($token) {
    $max_time = 2 * 60; // 2 minutes in seconds
    if (isset($_SESSION['csrf_token_time']) && (time() - $_SESSION['csrf_token_time'] < $max_time)) {
        return hash_equals($_SESSION['csrf_token'], $token);
    }
    return false; // Token is invalid if expired
}

// Generate a new CSRF token for the form if one hasn't been generated or is expired
if (empty($_SESSION['csrf_token']) || empty($_SESSION['csrf_token_time']) || time() - $_SESSION['csrf_token_time'] >= (2 * 60)) {
    generateCsrfToken();
}

$csrfToken = $_SESSION['csrf_token']; // Ensure the CSRF token is available for the form

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Diagnostic output
    //echo "Session token: " . $_SESSION['csrf_token'] . "<br>";
    //echo "Posted token: " . $_POST['csrf_token'] . "<br>";
    //echo "Session token time: " . $_SESSION['csrf_token_time'] . "<br>";
    //echo "Current time: " . time() . "<br>";
    //echo "Time difference: " . (time() - $_SESSION['csrf_token_time']) . "<br>";

    // Validate CSRF token
    if (!verifyCsrfToken($_POST['csrf_token'])) {
        die('CSRF token validation failed or token has expired.');
    }

    // Sanitize and validate input
   $name = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'));
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);

    // Send email
    $to = 'info@preciousservicesltd.co.uk';
    $subject = 'New Form Submission';
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $emailBody = "Name: $name\n";
    $emailBody .= "Number: $number\n";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo '<p class="py-3 bg-emerald-500 text-white pl-3">Your message was sent successfully!</p>';
    } else {
        echo '<p class="py-3 bg-red-600 text-white pl-3">There was a problem sending your message.</p>';
    }
    // Prevent resubmission on refresh and clear the token as it's been used
    unset($_SESSION['csrf_token']);
    unset($_SESSION['csrf_token_time']);
}
?>
<?php
    // Define page titles
    $page_titles = "Ryan Services Limited";

    ?>

<!doctype html>
<html>
 <?php require_once 'head.php'; ?>
  <body x-data="{openMenu: false}" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">


    <section class="bg-stone-100">
    <?php include 'header.php'; ?>

    </section>

    <section class="hero bg-stone-100 md:h-[600px] relative ">
        <video class="bg-video__content absolute" autoplay muted loop>
             <source src="clips/ryan1.mp4" type="video/mp4">
        </video>

        <div class="container mx-auto">
            <div class=" absolute top-10 md:top-60 flex flex-col gap-6  p-6 md:bg-transparent md:p-0">
               
                <h1 class=" text-2xl text-teal-500 font-bold wordItem  md:text-8xl"  data-delay=".3s"> Ryan Health &</h1>
                <h1 class=" text-2xl text-white font-bold wordItem  md:text-7xl"  data-delay=".5s">Cleaning </h1>
                <h1 class=" text-2xl text-teal-500 font-bold wordItem  md:text-6xl"  data-delay=".7s"> Limited</h1>
                
            </div>
        </div>
        
       
    </section>
    
           
     

    <section class="diff bg-white mt-60 md:mt-10 md:p-20">
        <div class="content container mx-auto flex flex-col justify-center md:flex-row p-5 md:p-20 relative">
            
            <div class="bg-local p-5 bg-cover block md:h-auto h-60 w-full md:w-1/2 " style="background-image: url('images/clean.jpg')" >
            <?php include 'includes/stars.php'; ?> 
            </div>
            <div class=" flex flex-col mt-2 md:mt-0 gap-5 bg-white md:px-10 md:w-1/2">
               
                <h1 class="text-teal-500 text-4xl font-semibold pt-10">About US</h1>
                <p class=" md:w-[500px] leading-6">At RHCL, we pride ourselves on providing reliable and professional cleaning services tailored to meet the unique needs of our clients. Whether you need residential or commercial cleaning, our experienced team is dedicated to delivering exceptional results with every service.</p>

                <p>In addition to our cleaning services, we also offer efficient and affordable van removal services to assist with your transportation needs. Whether you're moving to a new home, transporting furniture, or need help with deliveries, our reliable team is here to make the process as smooth and stress-free as possible.</p>

                <p>With RHCL, you can trust that your cleaning and removal needs are in good hands. Our team of skilled professionals is committed to delivering high-quality service, using top-of-the-line equipment and environmentally friendly cleaning products to ensure the best results every time.</p>

                <p>Customer satisfaction is our top priority, and we strive to exceed expectations with every job we undertake. Whether you're looking for regular cleaning maintenance or a one-time removal service, RHCL is here to provide you with personalized solutions that fit your schedule and budget.</p>

                <p>Experience the difference with RHCL – where professionalism, reliability, and excellence meet in every cleaning and removal service we provide. Contact us today to learn more about our services and discover how we can help you achieve a cleaner, more organized space.</p>

                <div class="">
                    <button class="text-xs py-2 px-3 rounded-sm bg-teal-500 text-white shadow-xl"> <a href="about.php">Read More</a> </button>
                </div>
            </div>
           
        </div>
    </section>



    <section class="services bg-slate-100 md:p-20 p-10">
        <?php include 'service_grid.php'; ?>
    </section>

    
<?php include 'footer.php'; ?>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('modalOpen', false);
    });
    
    

const words = document.querySelectorAll('.wordItem')
observer = new IntersectionObserver((entries) =>{

    entries.forEach(entry => {
        if (entry.intersectionRatio > 0){
        entry.target.style.animation = `wordanimation 2s ${entry.target.dataset.delay} forwards ease-out`;
    }
   
    console.log(entry);
    }) 
   
    
})

words.forEach(word => {
    observer.observe(word)

})

</script>
</body>
</html>
