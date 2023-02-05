<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Navigation } from 'vue3-carousel';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <carousel :items-to-show="1" :wrap-around="true">
            <slide v-for="slide in 6" :key="slide">
                <div class="carousel__item">
                    <img id="slider" :src="`images/carousel/slide${slide}.jpg`" alt="">
                </div>
            </slide>

            <template #addons>
                <navigation />
                <pagination />
            </template>
        </carousel>

        <div class="relative -mt-[300px]">
            <div class="flex m-4 z-10 relative">
                <div class="bg-white mx-2 p-2 text-md w-full text-center">
                    Essa pagina foi construida por Felipe Silveira.
                    <span class="underline text-teal-600 cursor-pointer">Clique aqui para saber mais</span>
                </div>
            </div>

            <div class="grid grid-cols-3 m-4 z-10 relative">
                <div class="p-1.5 flex">
                    <div class="bg-white p-5">
                        <div class="text-2xl font-extrabold flex">
                            Livros mais vendidos
                        </div>
                        <div class="flex">
                            <img class="object-fill" src="https://via.placeholder.com/1097x756" alt="">
                        </div>
                        <div class="pt-3 -mb-2 text-teal-800 font-bold hover:underline hover:text-red-400 cursor-pointer">
                            Veja mais
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

<style>
.carousel__item {
    font-size: 20px;
    display: flex;
    justify-content: center;
}

.carousel__prev,
.carousel__next {
    width: 40px;
    height: 200px;
    color: rgba(196, 196, 196);
    margin-top: -150px;
    border: transparent;
}

.carousel__prev:hover,
.carousel__next:hover {
    width: 40px;
    height: 200px;
    color: rgba(212, 212, 212);
    margin-top: -150px;
    border: 3px solid rgba(217, 217, 217);
}
</style>
