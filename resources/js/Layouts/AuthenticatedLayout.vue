<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import MapMarkerOutlineIcon from 'vue-material-design-icons/MapMarkerOutline.vue';
import MenuDownIcon from 'vue-material-design-icons/MenuDown.vue';
import MagnifyIcon from 'vue-material-design-icons/Magnify.vue';
import CartMinusIcon from 'vue-material-design-icons/CartMinus.vue';
import MenuIcon from 'vue-material-design-icons/Menu.vue';
import AccountCircleIcon from 'vue-material-design-icons/AccountCircle.vue';
import CloseIcon from 'vue-material-design-icons/Close.vue';
import ChevronRightIcon from 'vue-material-design-icons/ChevronRight.vue';


const showMenu = ref(false);
const accountAndList = ref(false);

const accountAndListFunc = (bool) => {
    setTimeout(() => {
        accountAndList.value = bool;
    }, 150);
}
</script>

<template>
    <div class="min-w-[1150px] bg-gray-100 h-full">

        <div v-if="accountAndList" class="top-0 z-20 fixed w-full h-full bg-black bg-opacity-70">
        </div>

        <!-- Infobar Searck  -->
        <div class="flex items-center bg-gray-900 h-[60px] py-2 fixed z-50 min-w-[1150px] w-full">

            <div class="flex">
                <Link href="/"
                    class="text-white h-[50px] p-2 pt-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <img width="100" src="/images/logo/AMAZON_LOGO.png" alt="">
                </Link>
            </div>

            <div class="flex p-2">
                <div class="flex justify-center">

                    <MapMarkerOutlineIcon class="pt-2 mt-1 -ml-1 -mr-1" fillColor="#f5f5f5" />

                    <div class="mt-2">
                        <div class="text-[13px] text-gray-300 font-extrabold">
                            <span class="ml-1">Entregar para Felipe</span>
                        </div>
                        <div class="text-[15px] text-white -mt-1.5 font-extrabold">
                            <!-- TODO@ limit strings size -->
                            <span class="ml-1">Francisco Morato 07909-110</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex grow items-center h-[45px] px-1">
                <div
                    class="flex items-center justify-center bg-gray-100 border-r border-r-gray-300 font-extrabold text-[11px] text-gray-600 w-[60px] h-[40px] rounded-l-md cursor-pointer">
                    <div class="pt-[3px]">
                        Todos
                    </div>
                    <MenuDownIcon :size="20" class="-mr-2" fillColor="#5E5E5E" />
                </div>
                <input
                    class="block w-full h-[40px] focus:outline-none border-none border-transparent focus:border-transparent focus:ring-0"
                    type="text" placeholder="O que você está procurando?">
                <div class="cursor-pointer bg-orange-300 p-[5px] px-2 rounded-r-md">
                    <MagnifyIcon :size="30" />
                </div>
            </div>

            <div class="flex">
                <div @mouseenter="accountAndListFunc(true)" @mouseleave="accountAndListFunc(false)"
                    class="h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center">
                        <div>
                            <div class="text-[13px] text-gray-300 font-extrabold">
                                Olá,
                                <span>sign in</span>
                            </div>
                            <div class="flex items-center">
                                <div class="text-[15px] text-white -mt-1.5 -mr-0.5 font-extrabold">
                                    Contas e Listas
                                </div>
                                <MenuDownIcon :size="20" class="-mr-4 -mt-0 pr-1" fillColor="#c2c2c2" />
                            </div>
                        </div>
                    </div>

                    <div v-if="accountAndList"
                        class="bg-white absolute z-50 top-[56px] -ml-[230px] w-[480px] rounded-sm px-6">
                        <div>
                            <div class="flex items-center justify-between py-2.5 border-b">
                                <!-- @TODO Melhorar essa sessão, butao de login e criar conta -->
                                <div class="text-sm truncate">
                                    Faça seu login.
                                </div>
                                <div
                                    class="flex items-center text-sm font-bold text-teal-600 hover:text-red-600 hover:underline">
                                    Cria conta
                                    <ChevronRightIcon :size="20" fillColor="#808080" />
                                </div>
                            </div>

                            <div class="flex ">
                                <div class="w-1/2 border-r">
                                    <div class="pb-3">
                                        <div class="font-extrabold pt-3">
                                            Sua lista
                                        </div>
                                        <div class="text-sm hover:text-red-600 hover:underline pt-3">
                                            Criar uma lista
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2 ml-5">
                                    <div class="pb-3">
                                        <div class="font-extrabold pt-3">
                                            Sua Conta
                                        </div>
                                        <div class="text-sm hover:text-red-600 hover:underline pt-3">
                                            Conta
                                        </div>
                                        <div>
                                            Sair.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div
                    class="h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center">
                        <div>
                            <div class="text-[13px] text-gray-300 font-extrabold">
                                Devoluções
                            </div>
                            <div class="flex items-center">
                                <div class="text-[15px] text-white -mt-1.5 -mr-0.5 font-extrabold">
                                    e Pedidos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center">
                        <span class="absolute text-center rigth-[21px] w-[14px] -top-0 rounded-full text-[20px]">
                            <div class="text-orange-400 font-extrabold h-[16px] bg-gray-900 mt-1">
                                0
                            </div>
                        </span>
                        <div>
                            <CartMinusIcon :size="40" class="text-white" />
                        </div>
                    </div>
                </div>

                <!-- <div
                    class="h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center mt-2.5 px-1">
                        <img src="https://via.placeholder.com/35x20" alt="">
                        <div class="text-[15px] text-white -mt-2 -mr-0.5 font-extrabold">
                            PT-BR
                        </div>
                        <MenuDownIcon :size="20" class="-mr-4 -mt-2 pr-1" fillColor="#c2c2c2" />
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Navbar -->
        <div class="flex items-center justify-between bg-[#232f3e] h-[38px] fixed z-40 min-w-[1150px] w-full mt-[60px]">
            <div class="flex">
                <div @click="showMenu = true"
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <MenuIcon fillColor="#F5F5F5" :size="26" class="mr-0.5" />
                        <div class="text-[14px] text-white font-extrabold">
                            Todos
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Ofertas do dia
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Adicionados recentemente
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Livros recomendados
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Principais autores
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Mais vendidos
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Blog
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Sobre
                        </div>
                    </div>
                </div>
                <div
                    class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-[14px] text-white font-extrabold">
                            Dicas de livros
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex h-[30px] border-[1px] border-[#232f3e] roudend-sm hover:border-[1px] hover:boder-gray-100 cursor-pointer">
                <div class="flex items-center justify-between px-2">
                    <div class="text-[14px] text-white font-extrabold">
                        Lorem Ipsum Dolor
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Carousel -->
        <main class="max-w-[1500px] mx-auto">
            <div class="pt-[98px]"></div>
            <slot />
        </main>

        <!-- Recomendações pre-footer -->
        <div class="w-full bg-white mt-10 overflow-x-scroll">
            <div class="max-w-[1500px] m-auto">
                <div class="text-[23px] pt-4 font-extrabold">
                    Recomendações para você
                </div>
                <div class="flex justify-between items-stretch">
                    <div v-for="product in $page.props.random_products" :key="product">
                        <div class="p4 text-center mx-auto">
                            <div class="w-[158px] h-[150px] overflow-hidden">
                                <img :src="product.image" alt="">
                            </div>
                            <div
                                class="w-[160px] text-[12px] text-teal-600 font-extrabold hover:text-red-600 cursor-pointer">
                                {{ product.title.substring(0, 40) }}...
                            </div>
                            <div class="w-[160px] text-[12px] text-red-500 font-extrabold">
                                R${{ product.price }}
                            </div>
                            <img width="50" src="/images/logo/PRIME_LOGO.PNG" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-[#232F3E]">
            <div
                class="bg-[#37475A] hover:bg-gray-600 w-full p-3.5 cursor-pointer text-white font-extrabold text-center">
                Back to top
            </div>
            <div class="flex items-stretch justify-between max-w-[1000px] mx-auto p-10 text-white">
                <ul>
                    <li class="font-extrabold text-lg">Get to Know Us</li>
                    <li class="hover:underline cursor-pointer">Carrers</li>
                    <li class="hover:underline cursor-pointer">About Amazon</li>
                    <li class="hover:underline cursor-pointer">Investor Relations</li>
                    <li class="hover:underline cursor-pointer">Amazon Devices</li>
                    <li class="hover:underline cursor-pointer">Amazon Science</li>
                </ul>

                <ul>
                    <li class="font-extrabold text-lg">Get to Know Us</li>
                    <li class="hover:underline cursor-pointer">Carrers</li>
                    <li class="hover:underline cursor-pointer">About Amazon</li>
                    <li class="hover:underline cursor-pointer">Investor Relations</li>
                    <li class="hover:underline cursor-pointer">Amazon Devices</li>
                    <li class="hover:underline cursor-pointer">Amazon Science</li>
                </ul>
                <ul>
                    <li class="font-extrabold text-lg">Get to Know Us</li>
                    <li class="hover:underline cursor-pointer">Carrers</li>
                    <li class="hover:underline cursor-pointer">About Amazon</li>
                    <li class="hover:underline cursor-pointer">Investor Relations</li>
                    <li class="hover:underline cursor-pointer">Amazon Devices</li>
                    <li class="hover:underline cursor-pointer">Amazon Science</li>
                </ul>

                <ul>
                    <li class="font-extrabold text-lg">Get to Know Us</li>
                    <li class="hover:underline cursor-pointer">Carrers</li>
                    <li class="hover:underline cursor-pointer">About Amazon</li>
                    <li class="hover:underline cursor-pointer">Investor Relations</li>
                    <li class="hover:underline cursor-pointer">Amazon Devices</li>
                    <li class="hover:underline cursor-pointer">Amazon Science</li>
                </ul>
            </div>
        </footer>

        <!-- Sidebar -->
        <div v-if="showMenu" class="top-0 z-50 fixed w-full h-full bg-black bg-opacity-70"
            :class="[showMenu ? 'animate__animated animate__fadeIn animate_faster z-50' : '']">
            <CloseIcon @click="showMenu = false" :size="40" fillColor="#DCDCDC"
                class="ml-2.5 mt-3.5 left-80 cursor-pointer fixed z-50"
                :class="[showMenu ? 'animate__animated animate__fadeIn animate_faster' : '']" />

            <div class="w-80 h-full bg-white"
                :class="[showMenu ? 'animate__animated animate__slideInLeft animate_faster' : '']">

                <div class="bg-[#232f3e] font-extrabold text-[18px] flex items-center ps text-white pl-7">
                    <span>Olá, entrar</span>
                </div>

                <div class="font-extrabold text-[16px] pt-3 pb-1 pl-6 pr-3 text-black">
                    Compre por categoria
                </div>

                <div v-for="cat in $page.props.categories" :key="cat">
                    <div class="hover:bg-gray-200 pl-6 pr-3">
                        <Link href="/"
                            class="py-2.5 text-[13px] text-black flex justify-between items-center hover:bg-gray-200 cursor-pointer">
                            {{ cat.name }}
                            <ChevronRightIcon :size="20" fillColor="#808080" />
                        </Link>
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>
