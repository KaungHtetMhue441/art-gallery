<x-layouts.app>
    <x-slot name="header">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>

    <x-client.home.carousel :images="$images" />

    <x-client.home.grid-style-one.grid :artworks="$artworks" />

    <x-client.home.grid-style-two.grid :blogs="$blogs" />

    <x-client.home.exhibition.exhibition />

    <x-slot name="script">
        <script type="module">
            $(".carousel_image").map(function(index, item) {
                if ($("body").width() < 700) {
                    item.width = $("#swiper-wrapper").width();
                    // console.log($("#swiper-wrapper").height)
                    $("#video__section").height($("#swiper-wrapper").height() / 1.4);

                } else {
                    // item.height=$("#swiper-wrapper").height()
                }
            })
            window.addEventListener("resize", function() {
                $(".carousel_image").map(function(index, item) {
                    item.height = $("#swiper-wrapper").height()
                })
            })

            const elts = {
                text1: document.getElementById("text1"),
                text2: document.getElementById("text1")
            };

            const texts = [
                // " ",
                " ",
                "Welcome From ArtGallery",
                "If you Like",
                "To See Best",
                "Art Form Myanmar",
                "You should See! ",
                "These Website",
            ];

            const morphTime = 4.5;
            const cooldownTime = 0.25;

            let textIndex = texts.length - 1;
            let time = new Date();
            let morph = 0;
            let cooldown = cooldownTime;

            elts.text1.textContent = texts[textIndex % texts.length];
            elts.text2.textContent = texts[(textIndex + 1) % texts.length];

            function doMorph() {
                morph -= cooldown;
                cooldown = 0;

                let fraction = morph / morphTime;

                if (fraction > 1) {
                    cooldown = cooldownTime;
                    fraction = 1;
                }

                setMorph(fraction);
            }

            function setMorph(fraction) {
                elts.text2.style.filter = `blur(${Math.min(8 / fraction - 40, 100)}px)`;
                elts.text2.style.opacity = `${Math.pow(fraction, 0.01) * 100}%`;

                fraction = 1 - fraction;
                elts.text1.style.filter = `blur(${Math.min(8 / fraction - 40, 100)}px)`;
                elts.text1.style.opacity = `${Math.pow(fraction, 0.01) * 100}%`;

                elts.text1.textContent = texts[textIndex % texts.length];
                elts.text2.textContent = texts[(textIndex + 1) % texts.length];
            }

            function doCooldown() {
                morph = 0;

                elts.text2.style.filter = "";
                elts.text2.style.opacity = "100%";

                elts.text1.style.filter = "";
                elts.text1.style.opacity = "0%";
            }

            function animate() {
                requestAnimationFrame(animate);

                let newTime = new Date();
                let shouldIncrementIndex = cooldown > 0;
                let dt = (newTime - time) / 1000;
                time = newTime;

                cooldown -= dt;

                if (cooldown <= 0) {
                    if (shouldIncrementIndex) {
                        textIndex++;
                    }

                    doMorph();
                } else {
                    doCooldown();
                }
            }

            animate();

            const text = "Search anything from this!".split('');
            let searchText = "";
            const searchElement = document.getElementById("home-search");
            let index = 0;
            const animateSearch = async () => {
                if (index < text.length) {
                    searchText += text[index];
                    searchElement.innerText = searchText;
                    index++;
                } else {
                    searchElement.innerText = '';
                    searchText = '';
                    index = 0
                }
            }

            setInterval(() => {
                animateSearch()
            }, 150);
        </script>

        <script src="{{ asset('js/swiper-option.js') }}"></script>
    </x-slot>
</x-layouts.app>
