<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Slide Modal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">

  <!-- Open Modal Button -->
  <button onclick="openModal()" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
    Open Slide Modal
  </button>

  <!-- Modal Overlay -->
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-end justify-center z-50 invisible opacity-0 transition-opacity duration-300">

    <!-- Modal Box -->
    <div id="modalBox" class="bg-white w-full max-w-md p-6 rounded-t-2xl transform translate-y-full opacity-0 transition-all duration-300">
      <h2 class="text-xl font-semibold mb-4">Slide-in Modal</h2>
      <p class="text-gray-700 mb-6">ဒီ modal ကအောက်ကနေ တက်လာတာဖြစ်ပါတယ်။</p>
      <div class="text-right">
        <button onclick="closeModal()" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Close</button>
      </div>
    </div>

  </div>

  <!-- JavaScript -->
  <script>
    function openModal() {
      const modal = document.getElementById('modal');
      const box = document.getElementById('modalBox');

      // Show overlay
      modal.classList.remove('invisible', 'opacity-0');
      modal.classList.add('opacity-100');

      // Animate modal in
      setTimeout(() => {
        box.classList.remove('translate-y-full', 'opacity-0');
        box.classList.add('translate-y-0', 'opacity-100');
      }, 10);
    }

    function closeModal() {
      const modal = document.getElementById('modal');
      const box = document.getElementById('modalBox');

      // Animate modal out
      box.classList.remove('translate-y-0', 'opacity-100');
      box.classList.add('translate-y-full', 'opacity-0');

      // Hide overlay after animation
      setTimeout(() => {
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0', 'invisible');
      }, 200);
    }
  </script>

</body>
</html>
