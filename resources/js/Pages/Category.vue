<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import ProductComponent from '@/Components/ProductComponent.vue';
</script>

<template>

    <Head title="Categoria" />

    <AuthenticatedLayout>
        <div>
            <div class="w-full p-1 pt-2 mb-6">
                <div class="text-[30px] font-extrabold">
                    {{ $page.props.category_name.name }}
                </div>
                <div class="text-sm font-bold">
                    Compre agora mesmo os melhores produtos com os melhores preços.
                </div>
            </div>
        </div>

        <div class="border border-gray-300 rounded-lg text-sm py-3.5 px-10 mb-4">
            1 - {{ $page.props.category_by_id.length }} de {{ $page.props.category_by_id.length }} resultados para "{{ $page.props.category_name.name }}"
        </div>

        <div class="grid grid-cols-4 gap-1">
            <div v-for="product in $page.props.category_by_id" :key="product" class="m-1">
                <ProductComponent :product="product" />
            </div>
        </div>

    </AuthenticatedLayout>

</template>
