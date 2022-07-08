/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
module.exports = {
  content: ["./src/**/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      "hippo": {
        "50": "#E8F5F7",
        "100": "#D1EBF0",
        "200": "#A7D9E2",
        "300": "#79C5D2",
        "400": "#4BB1C3",
        "500": "#358F9F",
        "600": "#2A727E",
        "700": "#205660",
        "800": "#163B41",
        "900": "#0A1C1F"
      },
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,
    },
    extend: {

    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio')
  ],
}
