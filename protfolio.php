<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
/* Hide default scroll bar but allow scroll */
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;     /* Firefox */
}
.text_tailwind{
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
<body class="">


  <section class="relative h-screen w-full overflow-hidden video_page">
<!-- 🎥 Background Video -->
<video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
  <source src="video/video.mp4" type="video/mp4" />
  Your browser does not support the video tag.
</video>

<!-- 🌓 Overlay Content -->
<div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40 z-10"></div>

<!-- ✨ Text Content -->
<div class="relative z-20 ">
  <nav class="md:max-w-425">
    <div class="md:max-w-7xl md:mx-auto">
      <div class="ms-5 md:flex">
        <div class="mt-[28px]">
          <a href="#" class="md:flex text-[20px] md:text-[23px] font-bold text-white text_tailwind">Kaung Khant Zyar</a>
        </div>
        <div class="md:flex space-x-2 mt-7 ms-[560px]">
          <a href="#" class="text-white hover:bg-white p-2 rounded-[3px] transition duration-700 ease-in-out font-serif hover:text-black text_tailwind">Home</a>
          <a href="#about" class="text-white hover:bg-white p-2 rounded-[3px] transition duration-700 ease-in-out font-serif hover:text-black text_tailwind">About</a>
          <a href="#skills" class="text-white hover:bg-white ps-3 pe-3 pt-2 pb-2 rounded-[3px] transition duration-700 ease-in-out font-serif hover:text-black text_tailwind">Skill</a>
          <a href="#service" class="text-white hover:bg-white p-2 rounded-[3px] transition duration-700 ease-in-out font-serif hover:text-black text_tailwind">Services</a>
          <a href="#project" class="text-white hover:bg-white p-2 rounded-[3px] transition duration-700 ease-in-out font-serif hover:text-black text_tailwind">Projects</a>
          <a href="#content" class="text-white hover:bg-white p-2 rounded-[3px] transition duration-700 ease-in-out font-serif hover:text-black text_tailwind">Contact</a>
        </div>
      </div>
    </div>

  <div class="relative">
    <div class="ms-[360px] mt-[-200px] md:hidden">
      <svg id="dropdownButton" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
      </svg>
    </div>

     <div id="dropdownMenu" class="mt-3 ms-2 w-48 bg-gray-200 rounded shadow-lg opacity-0 scale-95 pointer-events-none transition-all duration-200">
       <a href="#" class="block px-4 py-2 hover:bg-gray-100">Home</a>
       <a href="#about" class="block px-4 py-2 hover:bg-gray-100">About</a>
       <a href="#skills" class="block px-4 py-2 hover:bg-gray-100">Skill</a>
       <a href="#service" class="block px-4 py-2 hover:bg-gray-100">Services</a>
       <a href="#project" class="block px-4 py-2 hover:bg-gray-100">Projects</a>
       <a href="#content" class="block px-4 py-2 hover:bg-gray-100">Contact</a>
     </div>
   </div>

   <script>
     const button = document.getElementById('dropdownButton');
     const menu = document.getElementById('dropdownMenu');

     button.addEventListener('click', () => {
       menu.classList.toggle('opacity-0');
       menu.classList.toggle('scale-95');
       menu.classList.toggle('pointer-events-none');
     });
   </script>
  </nav>


  <div class="mt-[100px] md:mt-[150px]">
    <p class="text-[18px] md:text-[25px] font-bold text-center mt-2 font-serif text-white text_tailwind">Hello, I'm Kaung Khant Zayar</p>
    <p class="text-[17px] md:text-[20px] font-bold text-center mt-2 font-serif text-white text_tailwind">I am Web Developer</p>
    <div class="flex md:mt-7 md:ms-[723px] ms-[180px] mt-3">
      <div class="text_tailwind">
        <a href="https://www.facebook.com/kaung.khant.zay.yar.2025?mibextid=ZbWKwL"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-facebook text-white hover:text-blue-500 transition duration-150 ease-in-out" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg></a>
      </div>
      <div class="text_tailwind">
        <a href="https://t.me/kaungkhantzayar2009"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-telegram ms-3 text-white hover:text-blue-400 transition duration-150 ease-in-out" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
        </svg></a>
      </div>
    </div>
    <a href="#"><button class="text_tailwind bg-white border-2 border-white hover:border-2 border-white hover:bg-transparent hover:text-white transition duration-700 ease-in-out p-2 ms-[140px] mt-5 text-[16px] md:text-black md:p-3 font-serif md:ms-[683px] md:mt-5 md:bg-white md:border-2 md:border-white md:hover:border-2 md:border-white md:hover:bg-transparent md:hover:text-white transition duration-700 ease-in-out"><b>More About Me</b></button></a>
  </div>
</div>
</section>

  <script>
  const menuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
  </script>

  <!-- <div id="about"></div> -->


<div class="md:p-20 ms-30 about_page">
  <div id="about"></div>
  <div class="md:bg-gray-200 mt-[100px] shadow-xl rounded-[10px] ">
    <div class="p-10">
      <div class="md:grid grid-cols-2">
        <div class="md:mt-[20px] md:ps-20">
          <p class="text-[35px] text-gray-400 font-bold font-serif md:hidden">About<font color="black" class="ms-2">Me</font></p>
          <img src="image2/photo4.jpg" alt="" class="mt-10 w-[500px] rounded-[5px] border-t-4 border-black border-r-4 border-black shadow-lg shadow-black-300/30 md:w-[500px]">
        </div>
        <div class="mt-[20px] md:pe-10 md:mt-[30px] md:ms-20">
          <p class="text-[35px] text-gray-400 font-bold font-serif hidden sm:block">About<font color="black" class="ms-2">Me</font></p>
          <p class="text-[19px] mt-2 text-black font-serif">A story of hardwork and preseveracne</p>
          <p class="text-[16px] mt-5 text-black text-justify font-serif">Hi, I'm a web developer in the making with a strong interest in creating clean, responsive, and functional websites. I've completed my studies in web development fundamentals including HTML, CSS, Bootstrap, JavaScript, jQuery, and PHP, and I work with MySQL as my go-to database solution.</p>
          <p class="text-black mt-5 font-serif">Contact</p>

          <div class="mt-5">
            <div class="flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-phone-vibrate-fill text-black" viewBox="0 0 16 16">
                <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0M1.807 4.734a.5.5 0 1 0-.884-.468A8 8 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A7 7 0 0 1 1 8c0-1.18.292-2.292.807-3.266m13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A8 8 0 0 0 16 8a8 8 0 0 0-.923-3.734M3.34 6.182a.5.5 0 1 0-.93-.364A6 6 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A5 5 0 0 1 3 8c0-.642.12-1.255.34-1.818m10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818s-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8s-.145-1.505-.41-2.182"/>
              </svg>
              <p class="text-black ms-2 font-serif">--> 95+ 9976891729</p>
            </div>
            <div class="flex mt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-houses-fill text-black" viewBox="0 0 16 16">
                <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
              </svg>
              <p class="text-black ms-2 font-serif">--> North Okkalapa ayer(22)street..</p>
            </div>
            <div class="flex mt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill text-black" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
              </svg>
              <p class="text-black ms-2 font-serif">--> kaungkhantzayar2009@gmail.com</p>
            </div>
          </div>

          <button type="button" class="mt-10 bg-black p-2 font-bold text-white rounded-[5px] shadow-lg shadow-black-300/50 ps-10 pe-10 font-serif">HIRE ME</button>
        </div>
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br>
  <!-- skill -->

  <section id="skills" class="bg-gradient-to-r from-white via-gray-50 to-blue-50 py-20 px-6">
    <p class="text-black text-[35px] font-bold ps-20 font-serif">My <span class="text-gray-400">Skills</span></p>
    <div class="max-w-6xl mx-auto text-center mt-20">


      <h3 class="text-2xl font-semibold text-left text-black-500 mb-6 font-serif">(Frontend Development) and (Backend Development)</h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 text-left mt-5">
        <!-- Example Skill Box -->
        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">HTML</span>
            <span class="text-sm text-gray-500 font-serif">90%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-orange-500 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="90%"></div>
          </div>
        </div>

        <!-- (Repeat same box with updated sizes for CSS, JS, Bootstrap, etc...) -->

        <!-- CSS -->
        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">CSS</span>
            <span class="text-sm text-gray-500 font-serif">70%</span>
          </div>
          <div class="w-full bg-gray-150 h-3 rounded-full overflow-hidden">
            <div class="bg-blue-500 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="70%"></div>
          </div>
        </div>

        <!-- Tailwind CSS -->
        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">Bootstrap</span>
            <span class="text-sm text-gray-500 font-serif">80%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-blue-400 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="80%"></div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">JavaScript</span>
            <span class="text-sm text-gray-500 font-serif">50%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-yellow-400 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="50%"></div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">Tailwind CSS</span>
            <span class="text-sm text-gray-500 font-serif">60%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-teal-400 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="60%"></div>
          </div>
        </div>


        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">Jquery</span>
            <span class="text-sm text-gray-500 font-serif">50%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-yellow-400 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="50%"></div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">PHP</span>
            <span class="text-sm text-gray-500 font-serif">75%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-purple-500 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="75%"></div>
          </div>
        </div>

        <!-- (Repeat same box with updated sizes for CSS, JS, Bootstrap, etc...) -->

        <!-- CSS -->
        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">Laravel</span>
            <span class="text-sm text-gray-500 font-serif">20%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-blue-400 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="20%"></div>
          </div>
        </div>

        <!-- Tailwind CSS -->
        <div class="bg-white rounded-2xl shadow-lg p-7">
          <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-gray-800 font-serif">API</span>
            <span class="text-sm text-gray-500 font-serif">20%</span>
          </div>
          <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden">
            <div class="bg-blue-400 h-3 rounded-full skill-bar transition-all duration-1000 ease-out" data-percent="20%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Scroll-trigger animation script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const bar = entry.target;
            const percent = bar.getAttribute("data-percent");
            bar.style.width = percent;
            observer.unobserve(bar);
          }
        });
      }, { threshold: 0.5 });

      document.querySelectorAll('.skill-bar').forEach(bar => {
        bar.style.width = "0%";
        observer.observe(bar);
      });
    });
  </script>

  <!-- skill -->
  <div  id="service"></div>
  <br><br><br>



  <!-- service -->
<section>
  <p class="text-black text-[35px] font-bold ps-20 font-serif">Our <font class="text-gray-400">Service</font></p>
  <div class="p-4 md:grid grid-cols-3 md:p-20 ">
    <div class="shadow-lg shadow-black-300/50 p-10 rounded-[10px]">
      <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pc-display text-balck" viewBox="0 0 16 16">
          <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0m2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0M9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5M1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2z"/>
        </svg>
        <p class="text-balck text-[20px] ms-2 mt-1 font-bold font-serif">Training</p>
      </div>
      <p class="text-black text-justify mt-10 text-[17px] font-serif">You'll learn how to create clean, functional, and responsive websites using modern technologies. My approach combines theory with hands-on practice, so by the end of the training, you'll be confident in building your own websites and even start working on real projects.</p>
      <button type="button" class="mt-[65px] bg-black p-2 font-bold text-white rounded-[5px] shadow-lg shadow-black-300/50 ps-10 pe-10 font-serif">Read More</button>
    </div>

    <div class="mt-10 md:ms-7">
      <div class="shadow-lg shadow-black-300/50 p-10 rounded-[10px]">
        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-palette-fill text-black" viewBox="0 0 16 16">
            <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07M8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3M5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
          </svg>
          <p class="text-balck text-[20px] ms-2 mt-1 font-bold font-serif">Web Design</p>
        </div>
        <p class="text-black text-justify mt-10 text-[17px] font-serif">I offer professional web design services to help individuals and businesses create clean, modern, and user-friendly websites. My focus is on building visually appealing designs that are also responsive meaning your website will look great and work well on any device, including phones, tablets, and desktops.</p>
        <button type="button" class="mt-10 bg-black p-2 font-bold text-white rounded-[5px] shadow-lg shadow-black-300/50 ps-10 pe-10 font-serif">Read More</button>
      </div>
    </div>

    <div class="mt-10 md:ms-7">
      <div class="shadow-lg shadow-black-300/50 p-10 rounded-[10px]">
        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-code-square text-black" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0m2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0"/>
          </svg>
          <p class="text-black text-[20px] ms-2 mt-1 font-bold font-serif">Web Development</p>
        </div>
        <p class="text-black text-justify mt-10 text-[17px] font-serif">I provide complete web development services to help individuals, startups, and small businesses bring their ideas online. Whether it's a personal website, a business page, or a custom project, I can build fully functional and responsive websites from the ground up.</p>
        <button type="button" class="mt-[65px] bg-black p-2 font-bold text-white rounded-[5px] shadow-lg shadow-black-300/50 ps-10 pe-10 font-serif">Read More</button>
      </div>
    </div>
  </div>
</section>
  <!-- service -->
  <div  id="project"></div>
  <br><br><br><br><br><br><br>


  <!-- project -->
  <section class="py-16 px-6 bg-gray-50">
    <p class="text-4xl font-bold mb-12 text-gray-800 ps-20 font-serif">My <span class="text-gray-400">Projects</span></p>
    <div class="max-w-6xl mx-auto">

      <!-- Horizontal Scroll Wrapper -->
      <div class="flex space-x-6 overflow-x-auto pb-5 scroll-smooth scrollbar-hide">
        <!-- Project Item -->
        <div class="min-w-[280px] sm:min-w-[320px] bg-white rounded-xl shadow-lg overflow-hidden group relative">
          <img src="image/2.png" alt="Project 1" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <h3 class="text-white text-lg font-semibold px-4 text-center">English School Version(1)</h3>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="min-w-[280px] sm:min-w-[320px] bg-white rounded-xl shadow-lg overflow-hidden group relative cursor-pointer">
          <img src="image/1.png" alt="Project 2" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <h3 class="text-white text-lg font-semibold px-4 text-center">English School Version(1)</h3>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="min-w-[280px] sm:min-w-[320px] bg-white rounded-xl shadow-lg overflow-hidden group relative cursor-pointer">
          <img src="image/project.png" alt="Project 3" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <h3 class="text-white text-lg font-semibold px-4 text-center">ProTech-Book (Project)</h3>
          </div>
        </div>

        <div class="min-w-[280px] sm:min-w-[320px] bg-white rounded-xl shadow-lg overflow-hidden group relative cursor-pointer">
          <img src="image/3.png" alt="Project 3" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <h3 class="text-white text-lg font-semibold px-4 text-center">Tar Tar Too Restaurant Version(1)</h3>
          </div>
        </div>


        <div class="min-w-[280px] sm:min-w-[320px] bg-white rounded-xl shadow-lg overflow-hidden group relative cursor-pointer">
         <img src="image/4.png" alt="Project 3" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <h3 class="text-white text-lg font-semibold px-4 text-center">Tar Tar Too Restaurant Version(2)</h3>
          </div>
        </div>


        <div class="min-w-[280px] sm:min-w-[320px] bg-white rounded-xl shadow-lg overflow-hidden group relative cursor-pointer">
          <img src="image/5.png" alt="Project 3" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <h3 class="text-white text-lg font-semibold px-4 text-center">Shwe Myanma San Project</h3>
          </div>
        </div>

        <!-- Add more projects as needed -->
      </div>
    </div>
  </section>
  <!-- project -->
  <div id="content"></div>
<br><br><br><br><br><br>


  <!-- content -->

  <div class="md:grid grid-cols-2 md:p-20">
    <div class="ps-[35px] md:ps-[100px] md:mt-[-70px]">
      <p class="text-4xl font-bold mb-12 text-gray-800 font-serif">Contact<span class="text-gray-400 ms-3">Me</span></p>
      <div class="">
        <label for="" class="block mb-2 text-[17px] font-medium text-gray-900 dark:text-black font-sans">Enter Your Name</label>
        <input type="text" name="" value="" class="bg-gray-300 w-[350px]  md:w-[450px] h-10 ps-4 rounded-[4px] border-l-4 border-indigo-500 outline-none font-serif" placeholder="Name">
      </div>
      <div class="mt-4">
        <label for="" class="block mb-2 text-[17px] font-medium text-gray-900 dark:text-black font-serif">Enter Your Email</label>
        <input type="text" name="" value="" class="bg-gray-300 w-[350px] md:w-[450px] h-10 ps-4 rounded-[4px] border-l-4 border-indigo-500 outline-none font-serif" placeholder="Email">
      </div>
      <div class="mt-4">
        <label for="" class="block mb-2 text-[17px] font-medium text-gray-900 dark:text-black font-serif">Enter Your Subject</label>
        <input type="text" name="" value="" class="bg-gray-300 w-[350px] md:w-[450px] h-10 ps-4 rounded-[4px] border-l-4 border-indigo-500 outline-none font-serif" placeholder="Subject">
      </div>
      <div class="mt-4">
        <label for="" class="block mb-2 text-[17px] font-medium text-gray-900 dark:text-black font-serif">Enter Your Message</label>
        <textarea name="name" rows="3" cols="52" class="bg-gray-300 w-[350px] md:w-[450px] ps-4 pt-3 rounded-[4px] border-l-4 border-indigo-500 outline-none font-serif" placeholder="Message"></textarea>
      </div>
      <div class="mt-4">
        <button type="button" name="button" class="text-[15px] bg-gray-300 p-4 font-bold rounded-[4px]  border-l-4 border-indigo-500 font-serif">Submit Now</button>
      </div>
    </div>
    <div class="ps-[40px] mt-[40px]">
      <iframe class="w-[350px] h-[300px] rounded-[4px] border-t-4 border-black border-r-4 border-black shadow-lg shadow-black-300/30 md:w-[550px] md:h-[450px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d398.1455762263707!2d96.17188220260515!3d16.920818081030717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1935264e2811d%3A0xab1ec8b72d017ea!2z4YCZ4YC84YCx4YCs4YCA4YC64YCl4YCj4YCc4YCs!5e1!3m2!1sen!2smm!4v1750422079491!5m2!1sen!2smm"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <!-- content -->

<br><br><br>

  <!-- footer -->

    <div class="pt-10 bg-gray-900">
      <div class="pb-[20px] md:grid grid-cols-3 md:ps-[200px] md:pt-[50px] md:pb-[50px]">
        <div class="md:ms-[-90px]">
          <a href="#"><video autoplay muted loop playsinline style="height: auto;" class="ms-20 w-[270px] md:w-[300px]">
            <source src="video/my_video.mp4" type="video/mp4">
            သင့် browser သည် video tag ကို support မလုပ်ပါ။
          </video></a>
        </div>
        <div class="ms-[110px] mt-[30px] md:mt-20 md:ms-[-50px]">
          <h4 class="text-[20px] md:text-[30px] text-white font-serif"><b>Kaung Khant Zayar</b></h4>
          <h5 class="text-[19px] md:text-[25px] text-white font-serif">Web Developer</h5>
          <div class="border-b-4 border-gray-400 w-[200px] mt-2"></div>
          <div class="flex mt-7">
            <div class="">
              <a href="https://www.facebook.com/kaung.khant.zay.yar.2025?mibextid=ZbWKwL"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-facebook text-white hover:text-blue-500 transition duration-150 ease-in-out" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg></a>
            </div>
            <div class="">
              <a href="https://t.me/kaungkhantzayar2009"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-telegram ms-3 text-white hover:text-blue-400 transition duration-150 ease-in-out" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
              </svg></a>
            </div>
          </div>
          <p style=" font-size: 14px; color: #888;" class="mt-5">
            © 2025 Your Website. All rights reserved.
          </p>
        </div>
        <div class="md:border-l-4 border-gray-400">
        <div class="ms-[70px] md:mt-5 md:ms-[10px]">
            <div class="flex pt-10 ms-9">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-phone-vibrate-fill text-white" viewBox="0 0 16 16">
                <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0M1.807 4.734a.5.5 0 1 0-.884-.468A8 8 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A7 7 0 0 1 1 8c0-1.18.292-2.292.807-3.266m13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A8 8 0 0 0 16 8a8 8 0 0 0-.923-3.734M3.34 6.182a.5.5 0 1 0-.93-.364A6 6 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A5 5 0 0 1 3 8c0-.642.12-1.255.34-1.818m10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818s-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8s-.145-1.505-.41-2.182"/>
              </svg>
              <p class="text-[14px] md:text-[18px] text-white ms-2 text-white font-serif">--> 95+ 9976891729</p>
            </div>
            <div class="flex pt-10 ms-9">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-houses-fill text-white" viewBox="0 0 16 16">
                <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
              </svg>
              <p class="text-[14px] md:text-[18px] text-white ms-2 text-white font-serif">--> North Okkalapa ayer(22)street..</p>
            </div>
            <div class="flex pt-10 ms-9">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill text-white" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
              </svg>
              <p class="text-[14px] md:text-[18px] text-white ms-2 text-white font-serif">--> kaungkhantzayar2009@gmail.com</p>
            </div>
            <div class="flex pt-10 ms-9">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-link-45deg text-white" viewBox="0 0 16 16">
                <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
              </svg>
              <p class="text-[14px] md:text-[18px] text-white ms-2 text-white font-serif">--> www.protech.kkzy.com</p>
            </div>
          </div>
        </div>
    </div>

  <!-- footer -->

  <script defer>
    // JavaScript to control scroll button visibility and behavior
    window.addEventListener("scroll", function () {
      const btn = document.getElementById("scrollTopBtn");
      if (window.scrollY > 100) {
        btn.classList.remove("hidden");
      } else {
        btn.classList.add("hidden");
      }
    });

    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    }
  </script>

  <button id="scrollTopBtn" onclick="scrollToTop()" class="hidden fixed bottom-6 right-6 z-50 bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
      <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
    </svg>
  </button>
</body>
</html>
