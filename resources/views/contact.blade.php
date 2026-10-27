<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - WEB TI</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #add8ff;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between text-gray-800">

    <!-- Navbar / Header -->
    <nav class="bg-[#1e232a] text-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="font-bold text-2xl tracking-wide text-white">WEB TI</a>
                </div>
                <!-- Navigation Links -->
                <div class="flex space-x-6 text-sm font-medium">
                    <a href="#" class="text-gray-400 hover:text-white transition">Home</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Berita</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Profile</a>
                    <a href="#" class="text-white font-semibold border-b-2 border-white pb-1">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full flex-grow">
        <!-- Page Title & Subtitle -->
        <div class="mb-10">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight uppercase">
                HUBUNGI KAMI
            </h1>
            <p class="mt-2 text-base sm:text-lg text-gray-600">
                Silakan tinggalkan pesan atau hubungi saya melalui kontak di bawah ini.
            </p>
        </div>

        <!-- 2 Column Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-start">
            
            <!-- Left Column: Contact Info & Socials -->
            <div class="md:col-span-5 space-y-8 pt-2">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>

                <!-- Email -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center text-slate-700 flex-shrink-0 text-xl">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base">Email</h3>
                        <p class="text-gray-600 text-sm sm:text-base">icon@example.com</p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center text-slate-700 flex-shrink-0 text-xl">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base">WhatsApp</h3>
                        <p class="text-gray-600 text-sm sm:text-base">+62 812-3456-7890</p>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center text-slate-700 flex-shrink-0 text-xl">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base">Alamat</h3>
                        <p class="text-gray-600 text-sm sm:text-base">
                            Prodi Teknologi Informasi,<br>Semarang, Indonesia
                        </p>
                    </div>
                </div>

                <!-- Social Media Buttons -->
                <div class="pt-4 flex space-x-3">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" 
                       class="w-12 h-12 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-xl flex items-center justify-center text-xl transition transform hover:-translate-y-1 shadow-sm">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" 
                       class="w-12 h-12 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-xl flex items-center justify-center text-xl transition transform hover:-translate-y-1 shadow-sm">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" 
                       class="w-12 h-12 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-xl flex items-center justify-center text-xl transition transform hover:-translate-y-1 shadow-sm">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Contact Form Card -->
            <div class="md:col-span-7">
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
                    
                    <!-- Notification Toast -->
                    <div id="toast" class="hidden mb-4 p-4 rounded-xl text-sm font-medium bg-green-50 text-green-800 border border-green-200">
                        <i class="fa-solid fa-circle-check mr-2"></i> Pesan Anda berhasil terkirim! Terima kasih.
                    </div>

                    <form id="contactForm" onsubmit="handleSubmit(event)" class="space-y-4">
                        <!-- Nama Lengkap -->
                        <div>
                            <label for="nama" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">
                                Nama Lengkap
                            </label>
                            <input type="text" id="nama" required placeholder="Masukkan nama Anda" 
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-blue-800 text-gray-800 outline-none transition text-sm">
                        </div>

                        <!-- Alamat Email -->
                        <div>
                            <label for="email" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">
                                Alamat Email
                            </label>
                            <input type="email" id="email" required placeholder="email@domain.com" 
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-blue-800 text-gray-800 outline-none transition text-sm">
                        </div>

                        <!-- Subjek -->
                        <div>
                            <label for="subjek" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">
                                Subjek
                            </label>
                            <input type="text" id="subjek" required placeholder="Judul pesan Anda" 
                                   class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-blue-800 text-gray-800 outline-none transition text-sm">
                        </div>

                        <!-- Pesan Anda -->
                        <div>
                            <label for="pesan" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">
                                Pesan Anda
                            </label>
                            <textarea id="pesan" rows="4" required placeholder="Tuliskan pesan Anda di sini..." 
                                      class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-800 focus:border-blue-800 text-gray-800 outline-none transition text-sm resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full bg-[#004a99] hover:bg-[#003875] text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-200 text-sm sm:text-base active:scale-[0.99] flex justify-center items-center">
                                <span>Kirim Pesan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

    <!-- Simple Footer -->
    <footer class="bg-gray-100 border-t border-gray-200 py-4 text-center text-xs text-gray-500">
        &copy; 2026 WEB TI - All rights reserved.
    </footer>

    <script>
        function handleSubmit(event) {
            event.preventDefault();

            const toast = document.getElementById('toast');
            const form = document.getElementById('contactForm');

            // Tampilkan notifikasi
            toast.classList.remove('hidden');

            // Reset form
            form.reset();

            // Sembunyikan notifikasi otomatis setelah 4 detik
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 4000);
        }
    </script>
</body>
</html>