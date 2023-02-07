<template>
    <Head title="Endereços" />

    <AuthenticatedLayout>
        <div class="mt-12"></div>

        <div class="max-w-[1000px] mx-auto text-3xl mb-10">
            Seus endereços
        </div>

        <div class="max-w-[1000px] mx-auto flex gap-2 h-[270px]">
            <div class="border border-dotted border-gray-400 rounded-md w-1/3">
                <Link v-if="show" href="/">
                    <div class="grid h-full place-items-center cursor-pointer">
                        <div class="text-center">
                            <div class="flex justify-center">
                                <PlusIcon :size="50" />
                            </div>
                            <div class="font-bold text-2xl">
                                Adicionar novo endereço
                            </div>
                        </div>
                    </div>
                </Link>
                <div v-else class="gri h-full place-items-center">
                    <div class="text-center mt-5">
                        <div class="font-bold text-2xl">
                            Endereço adicionado com sucesso!
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative border border-gray-400 rounded-md w-1/3 shadow-md">
                <div class="flex items-center justify-start p-3 text-xs text-gray-600 font-extrabold border-b border-b-gray-400">
                    Default: <img class="h-3 mt-1.5 ml-2" src="/images/logo/AMAZON_LOGO_DARK.png" alt="">
                </div>
                <div class="text-sm font-extrabold px-4 pt-4">
                    Nome SobreNome
                </div>
                <div class="text-sm px-4">
                    <div>
                        Endereço 1
                    </div>
                    <div>
                        Endereço 2
                    </div>
                    <div>
                        Cidade
                    </div>
                    <div>
                        CEP
                    </div>
                    <div>
                        Pais
                    </div>
                </div>
                <div class="px-4 absolute pb-4">
                    <Link
                        href="/"
                        class="text-teal-700 text-sm font-extrabol hover:underline hover:text-red-700"
                    >
                        Remover
                    </Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { toRefs } from 'vue';
import MapMarkerOutlineIcon from 'vue-material-design-icons/MapMarkerOutline.vue';
import PlusIcon from 'vue-material-design-icons/Plus.vue';

let show = false;
const props = defineProps({
    product: Object,
});
const { product } = toRefs(props);
</script>
