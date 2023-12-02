<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css"/>
        <style type="text/css">
        body {
            font-family: "Inter", sans-serif;
            }
            </style>
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
            tailwind.config = {
                theme: {
                    extend: {
                        container: {
                            center: true,
                            padding: {
                                DEFAULT: "1rem",
                                sm: "1.5rem",
                                md: "2rem",
                                lg: "4rem",
                            },
                        },
                        colors: {
                            primary: "#ff4c30",
                        },
                    },
                },
                };
                </script>
                </head>
                <body class="min-h-screen">
                    <div class="container">
                        <div class="mt-16 mb-5 flex text-5xl">
                            <h1 class="mx-auto font-bold text-primary">Careprotect</h1>
                        </div>
                        <div class="mb-7 flex text-2xl">
                            <h1 class="mx-auto font-medium text-gray-600">Aplikasi Kesehatan</h1>
                        </div>
                        <form  action="index.php?register" method="post">
                            <input class="border w-full mb-5 rounded-lg py-2 px-3" type="number" name="no_hp" required placeholder="No. Telp"/>
                            <input class="border w-full mb-5 rounded-lg py-2 px-3" type="email" name="email" required placeholder="Email"/>
                            <input class="border w-full mb-5 rounded-lg py-2 px-3" type="password" name="password" required placeholder="Kata Sandi" />
                            <input class="border w-full mb-5 rounded-lg py-2 px-3" type="password"  name="password"  required placeholder="Konfirmasi Kata Sandi"/>
                            <div class="mt-10 text-white flex justify-center">
                                <button
                                type="submit"
                                class="bg-primary text-xl rounded-3xl py-4 w-1/2 lg:w-3/4 font-semibold"> Daftar
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-5">
                        <p> Sudah punya akun?
                            <a href="index.php?login" class="text-primary hover:underline">Masuk</a>
                        </p>
                    </div>
                </div>
            </body>
</html>