<body x-data="{openMenu: false}" :class="openMenu ? overflow-hidden : overflow-visible">

  <header class="bg-inherit">
    <!-- wrapper -->
    <div class="flex justify-between container mx-auto py-3 px-6 items-center">

      <!-- logo -->
      <a href="index.php">
        <img src="images/logo.png" alt="logo" srcset="" width="150">
      </a>
      <!-- Mobile menu Toogle -->
      <button class="md:hidden" @click="openMenu = !openMenu" :aria-expanded="openMenu"
        :aria-controls="mobile-navigation" aria-label="Navigation Menu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
      </button>
      <!-- desktop Menu -->
      <nav class="hidden md:flex">
        <ul class="flex space-x-8 text-lg items-center">
          <li><a class="hover:border-b py-3" href="index.php">Home</a></li>
          <li><a class="hover:border-b py-3" href="about.php">About us</a></li>
          <li><a class="hover:border-b py-3" href="services.php">Services</a></li>
          <li><a class="hover:border-b py-3" href="contact.php">Contact</a></li>
          <li><button class="bg-teal-400 py-2 px-4  text-white text-xl font-semibold">+442088541211</button></li>
        </ul>
      </nav>
    </div>
  </header>

  <nav id="mobile-navigation" class="fixed top-0 right-0 left-0 bottom-0 backdrop-blur-sm  z-10 "
    :class="openMenu ? 'visible':'invisible'" x-cloak>

    <ul
      class="absolute top-0 right-0 bottom-0 w-10/12 py-4 bg-white drop-shadow-2xl text-xl z-10 transition-all ease-in-out"
      :class="openMenu ? 'translate-x-0' : 'translate-x-full'">
      <li class="border-b border-inherit"><a href="index.php" class="block p-4">Home</a></li>
      <li class="border-b border-inherit"><a href="about.php" class="block p-4">About Us</a></li>
      <li class="border-b border-inherit"><a href="services.php" class="block p-4">Services</a></li>
      <li class="border-b border-inherit"><a href="contact.php" class="block p-4">Contact</a></li>
    </ul>

    <button class="absolute top-0 bottom-0 right-0 left-0" @click="openMenu = !openMenu" :aria-expanded="openMenu"
      aria-controls="mobile-navigation" aria-label="Close Navigation Menu">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-8 h-8 absolute top-2 left-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>

    </button>
  </nav>