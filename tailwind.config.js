/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
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
    extend: {

    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio')
  ],
}
