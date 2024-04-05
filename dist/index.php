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

<!doctype html>
<html>
 <?php require_once 'head.php'; ?>
  <body x-data="{openMenu: false}" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">


    <section class="bg-stone-100">
        <?php include 'header.php'; ?>

    </section>

   

    <section class=" bg-white ">
        <div class="container mx-auto grid grid-cols-2">
            
            <div class=" p-5 bg-cover h-56 " style="background-image: url('images/clean.jpg')" >
                    <h1 class="text-5xl"> 
                    Hello</h1>
            </div>  


            <div class=" p-5 bg-cover h-56 " style="background-image: url('images/clean.jpg')" >
                    <h1 class="text-5xl"> 
                    Hello</h1>
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
