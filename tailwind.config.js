/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    safelist: [
        'bg-red-500',
        'text-3xl',
        'lg:text-4xl',
      ],
    plugins: [],
};
