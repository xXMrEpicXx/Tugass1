/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./storage/framework/views/*.php", // Untuk view cache Laravel
    "./app/Http/Controllers/**/*.php", // Jika menggunakan komponen PHP
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          50: '#f0f9ff',
          100: '#e0f2fe',
          500: '#3b82f6', // Warna biru default Tailwind
          600: '#2563eb',
        },
        'secondary': '#10b981',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      container: {
        center: true,
        padding: '1rem',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'), // Untuk styling form elemen
    require('@tailwindcss/typography'), // Untuk konten prose
    require('@tailwindcss/aspect-ratio'), // Untuk aspect ratio
  ],
  corePlugins: {
    aspectRatio: false, // Nonaktifkan core plugin jika menggunakan @tailwindcss/aspect-ratio
  },
}