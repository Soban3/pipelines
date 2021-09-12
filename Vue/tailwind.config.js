module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    container: {
      center: true,
    }
  },
  variants: {
    extend: {
      lineClamp: ['hover']
    },
  },
  plugins: [
    require('tailwindcss-debug-screens'),
    require('@tailwindcss/line-clamp'),
  ],
}
