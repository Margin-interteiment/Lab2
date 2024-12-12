/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      animation: {
        slideInLeft: "slideInLeft 2s ease-out forwards",
        slideInRight: "slideInRight 2s ease-out forwards",
      },
      screens: {
        xs: "300px",
      },
      keyframes: {
        slideInLeft: {
          "0%": { opacity: "0", transform: "translateX(-100%)" },
          "100%": { opacity: "1", transform: "translateX(0)" },
        },
        slideInRight: {
          "0%": { opacity: "0", transform: "translateX(100%)" },
          "100%": { opacity: "1", transform: "translateX(0)" },
        },
      },
      safelist: ["bg-[url('/Lab2-master/images/bg.jpeg')]"],
    },
  },
  plugins: [],
};
