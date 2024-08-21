/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
  theme: {
    extend: {
        colors: {
            "black": "#060606"
        },
        fontFamily: {
            "hanken-grotesk": ["Hanken Grotesk", "sans-serif"]
        },
        fontSize: {
            "2xs": ".625rem"
        }
    },
  },
  plugins: [
      function({ addUtilities }) {
          const newUtilities = {
              '.scrollbar-thin': {
                  scrollbarWidth: 'thin',
                  '&::-webkit-scrollbar': {
                      width: '8px',
                  },
              },
              '.scrollbar-thumb-gray-400': {
                  '&::-webkit-scrollbar-thumb': {
                      backgroundColor: '#9ca3af',
                  },
              },
              '.scrollbar-track-gray-200': {
                  '&::-webkit-scrollbar-track': {
                      backgroundColor: '#e5e7eb',
                  },
              },
          }
          addUtilities(newUtilities, ['responsive', 'hover'])
      }
  ],
}

