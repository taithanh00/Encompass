/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Example content paths...
    './public/**/*.html',
    './src/**/*.{js,jsx,ts,tsx,vue}',
  ],
  theme: {
      screens: {
        'repon1': {'max': '768px'},
        'repon2': {'max': '1024px'},
        'repon3': {'max': '1440px'},
        'repon4': {'max': '1920px'},
      }
    },
}
