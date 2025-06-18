<?= template_header('About EventSpark:
 Igniting Event Excellence') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
    <style>
        img{
            max-height: 90%;
            max-width: 90%;
        }
    </style>
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-4 text-white">About Us</h1>
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="imgs/about-image.png" alt="About Us Image" class="w-full h-auto rounded-lg">
            </div>
            <div class="md:w-1/2 md:ml-8 mt-4 md:mt-0">
                <p class="text-xl font-bold mb-2">Our History</p>
                <p class="mb-4">Established in 2023, our journey began with a vision to revolutionize the event management industry. 
                    Over the years, we have proudly served countless clients, turning their events into unforgettable experiences. 
                    From intimate gatherings to large-scale extravaganzas, we have consistently exceeded expectations with our meticulous planning,
                     creativity, and attention to detail.</p>
                <p class="text-xl font-bold mb-2">Our Mission</p>
                <p class="mb-4">At [Company Name], our mission is to empower our clients to create exceptional events that leave a lasting impression. 
                    We strive to provide innovative solutions, unparalleled customer service, and seamless execution, 
                    ensuring that every event we touch is a resounding success. Our dedication to excellence drives us to continually evolve, 
                    adapt, and exceed the ever-changing needs of our clients and the industry.</p>
                <p class="text-xl font-bold mb-2">Our Values</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Excellence: We aim for nothing less than the best, maintaining the highest standards in every aspect of our work.</li>
                    <li>Creativity: We thrive on innovation, bringing fresh ideas to life to make each event unforgettable.</li>
                    <li>Passion: Our deep passion fuels our commitment to exceeding expectations in everything we do.</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>

<?= template_footer() ?>