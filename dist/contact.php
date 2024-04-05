
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

$errors = [];
$responseMessage = '';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!verifyCsrfToken($_POST['csrf_token'])) {
        $errors[] = 'CSRF token validation failed or token has expired.';
    }

    // Sanitize and validate input
    $name = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $message = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'));

    // Validate fields
    if (!$name) {
        $errors[] = 'The name field is required.';
    }
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email address is required.';
    }
    if (!$message) {
        $errors[] = 'The message field is required.';
    }

    // If there are no errors, send the email
    if (count($errors) === 0) {
        $to = 'info@ryanhealthandcleaningltd.co.uk';
        $subject = 'New Contact Form Message';
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $emailBody = "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Message:\n$message\n";

        if (mail($to, $subject, $emailBody, $headers)) {
            $responseMessage = 'Your message was sent successfully!';
        } else {
            $errors[] = 'There was a problem sending your message.';
        }
    }
    
    // Prevent resubmission on refresh and clear the token as it's been used
    unset($_SESSION['csrf_token']);
    unset($_SESSION['csrf_token_time']);
}
?>

<!doctype html>
<html>
<?php require_once 'head.php'; ?>'
<body>
  <body x-data="{openMenu: false}" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">

  <?php include 'header.php'; ?>
<div class="hidden md:block bg-stone-100 py-5">
      <h1 class="text-4xl text-center py-4 font-bold">
        Contact Us
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

          </p> <p>Contact Us</p>

        </div>
      </div>
    </div>
  <section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-5 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.1582006893404!2d0.1282443769973244!3d51.491964311830365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8af0d12774f11%3A0x2b2c805dc1d85aa8!2s32%20Holstein%20Way%2C%20Erith%20DA18%204DJ!5e0!3m2!1sen!2suk!4v1712270638155!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="800" height="600" style="filter: grayscale(1) contrast(1.2) opacity(0.4);" border:0; allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

     
      <div class="w-full bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">32 Holstein Way, Erith DA18 4DJ</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-teal-500 leading-relaxed">info@ryanhealthandcleaningltd.co.uk</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">+442088541211</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Tell Us what you think about us </p>
       <?php if (!empty($errors)): ?>
            <div class="errors">
                <?php foreach ($errors as $error): ?>
                    <p class="py-3 bg-red-500 text-white pl-3"><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php elseif ($responseMessage): ?>
            <p class="py-3 bg-emerald-500 text-white pl-3"><?php echo $responseMessage; ?></p>
        <?php endif; ?>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="relative mb-4">
         <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8'); ?>">
          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"required>
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
        </div>
        <button type="submit" class="text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded text-lg shadow-xl">Send Message</button>
      </form>
      <p class="text-xs text-gray-500 mt-3 text-center">Ryan Health and Cleaning Limited © Copright 2023 PSL —.</p>
    </div>
  </div>
</section>

  <?php include 'footer.php'; ?>
</body>
</html>