<div>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konditorei Fritzenkötter</title>
  
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
  <!-- AOS (Animate On Scroll) CSS -->
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
  
  <style>
    h1, h2 {
      font-family: 'Playfair Display', serif;
    }

    p {
      font-family: 'Lato', sans-serif;
      color: #333;
    }

    button {
      background-color: #C85A7B;
      color: white;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #A0465C;
    }
    #menu-btn, #close-menu {
    background-color: transparent; /* Hintergrund transparent */
}
  </style>
</head>

<body class="antialiased">

  <!-- Header -->
<header class="bg-white shadow-md p-4 flex justify-between items-center">
  <img src="/img/logo.jpg" alt="Fritzenkötter Logo" class="h-16">
  <nav class="hidden md:flex space-x-6">
    <a href="#about" class="text-gray-700 hover:text-pink-500">Über uns</a>
    <a href="#products" class="text-gray-700 hover:text-pink-500">Produkte</a>
    <a href="#cafe" class="text-gray-700 hover:text-pink-500">Café</a>
    <a href="#contact" class="text-gray-700 hover:text-pink-500">Kontakt</a>
  </nav>
  
  <!-- Hamburger-Icon -->
  <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16" />
    </svg>
</button>

</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-white z-50 hidden transition-all ease-in-out duration-300">
  <div class="flex justify-between items-center p-4">
    <img src="/img/logo.jpg" alt="Fritzenkötter Logo" class="h-12">
    <button id="close-menu" class="text-gray-700 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <nav class="flex flex-col items-center space-y-6 mt-10">
    <a href="#about" class="text-gray-700 text-lg hover:text-pink-500">Über uns</a>
    <a href="#products" class="text-gray-700 text-lg hover:text-pink-500">Produkte</a>
    <a href="#cafe" class="text-gray-700 text-lg hover:text-pink-500">Café</a>
    <a href="#contact" class="text-gray-700 text-lg hover:text-pink-500">Kontakt</a>
  </nav>
</div>

  <!-- Hero Section (100vh) -->
<section class="relative bg-cover bg-center h-screen flex flex-col justify-center items-center" style="background-image: url('/img/hero.jpeg'); filter: brightness(80%);">
  <div class="bg-black bg-opacity-50 p-6 rounded-md">
    <h1 class="text-white text-5xl font-serif text-center text-shadow-lg">Tradition trifft auf Genuss seit 1877</h1>
  </div>
  <button class="mt-8 bg-pink-600 text-white py-2 px-6 rounded-md hover:bg-pink-500">Unsere Spezialitäten entdecken</button>
</section>

  <!-- Über uns (mit Fade-In Effekt) -->
  <section id="about" class="py-16 bg-gray-100" data-aos="fade-up">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-serif text-gray-700 mb-4">Unsere Geschichte</h2>
      <p class="max-w-3xl mx-auto text-gray-600">
        Seit 1877 verwöhnen wir unsere Gäste mit handgemachten Köstlichkeiten. Was einst als kleine Bäckerei begann, ist heute eine Institution für Genießer geworden. Wir legen Wert auf Tradition, Handwerkskunst und hochwertige Zutaten, um Ihnen täglich das Beste aus unserer Backstube zu bieten. Ob unsere berühmten Pralinen, die zarten Torten oder die saisonale Eiscreme – bei uns wird alles mit Liebe und nach altbewährten Rezepten hergestellt.
      </p>
    </div>
  </section>

  <!-- Highlight-Produkte (mit Fade-In Effekt) -->
  <section id="products" class="py-16" data-aos="fade-up">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-serif text-gray-700 mb-8">Unsere Spezialitäten</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 shadow-lg">
          <img src="/img/pralinen.jpg" alt="Pralinen" class="mx-auto">
          <p class="mt-4 text-gray-600">Handgemachte Pralinen – kleine Meisterwerke der Konditoreikunst.</p>
        </div>
        <div class="bg-white p-4 shadow-lg">
          <img src="/img/quiche.jpg" alt="Quiche" class="mx-auto">
          <p class="mt-4 text-gray-600">Herzhafte Quiche – perfekt für den herzhaften Appetit.</p>
        </div>
        <div class="bg-white p-4 shadow-lg">
          <img src="/img/icecream.jpg" alt="Eiscreme" class="mx-auto">
          <p class="mt-4 text-gray-600">Saisonale Eiscreme – erfrischender Genuss im Sommer.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Café-Bereich -->
  <section id="cafe" class="py-16 bg-pink-50" data-aos="fade-up">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-serif text-gray-700 mb-4">Unser Café</h2>
      <p class="max-w-3xl mx-auto text-gray-600">
        Unser Café lädt Sie ein, den Alltag hinter sich zu lassen. Genießen Sie eine Tasse Kaffee oder ein leckeres Stück Kuchen in gemütlicher Atmosphäre. Ob für den kleinen Snack zwischendurch oder den ausgedehnten Nachmittagskaffee – wir freuen uns auf Ihren Besuch.
      </p>
    </div>
  </section>

  <!-- Kontaktformular & Footer -->
  <footer id="contact" class="bg-gray-800 text-white py-16" data-aos="fade-up">
    <div class="container mx-auto">
      <h2 class="text-3xl font-serif text-center mb-8">Kontaktieren Sie uns</h2>
      <form class="max-w-xl mx-auto space-y-4">
        <input type="text" placeholder="Name" class="w-full p-2 rounded-md bg-gray-100">
        <input type="email" placeholder="E-Mail" class="w-full p-2 rounded-md bg-gray-100">
        <textarea placeholder="Nachricht" class="w-full p-2 rounded-md bg-gray-100"></textarea>
        <button type="submit" class="w-full bg-pink-600 py-2 text-white rounded-md hover:bg-pink-500">Absenden</button>
      </form>
      <div class="mt-8 text-center">
        <p>Öffnungszeiten: Dienstag bis Freitag: 7:30 – 17:30 Uhr, Samstag: 7:30 – 17:00 Uhr, Sonntag und Montag: Geschlossen</p>
        <div class="mt-4">
          <iframe src="https://maps.google.com" class="w-full h-64"></iframe>
        </div>
      </div>
      <div class="text-center mt-12 text-gray-500">
        <p>&copy; 2024 Konditorei Fritzenkötter</p>
        <p><a href="/impressum" class="hover:text-pink-500">Impressum</a> | <a href="/datenschutz" class="hover:text-pink-500">Datenschutz</a></p>
      </div>
    </div>
  </footer>

  <!-- AOS (Animate on Scroll) Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000, // Dauer der Animation
      easing: 'ease-in-out',
    });
  // Mobile Menu Toggle
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeMenu = document.getElementById('close-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden'); // Menü einblenden
  });

  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden'); // Menü ausblenden
  });
</script>
</body>

</html>


</div>
