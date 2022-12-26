module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  prefix: 'tw-',
  important: true,
  presets: [
    require('@acmecorp/base-tailwind-config')
  ],
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
    require('tailwindcss-children'),
  ],
  content: [
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
  ],
}
