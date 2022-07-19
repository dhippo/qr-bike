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
      "night": {
        "50": "#E7EEF3",
        "100": "#D0DDE7",
        "200": "#A0BBCF",
        "300": "#7199B7",
        "400": "#4C7595",
        "500": "#334F64",
        "600": "#294051",
        "700": "#1F303D",
        "800": "#152029",
        "900": "#0A1014"
      },
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
      "cielcolor": {
      "50": "#F7FBFD",
      "100": "#F3F8FB",
      "200": "#E4F0F7",
      "300": "#D8E9F3",
      "400": "#C8E0EE",
      "500": "#BBD9EA",
      "600": "#7BB5D6",
      "700": "#3C91C3",
      "800": "#286081",
      "900": "#143142"
    },
      "bluecolor": {
        "50": "#DEEDF8",
        "100": "#C0DDF1",
        "200": "#7EB8E2",
        "300": "#3F96D4",
        "400": "#246EA3",
        "500": "#164363",
        "600": "#12364F",
        "700": "#0D273A",
        "800": "#081926",
        "900": "#050E15"
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
