<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { toRefs, computed } from 'vue';
import MapMarkerOutlineIcon from 'vue-material-design-icons/MapMarkerOutline.vue';

import { useCartStore } from '@/store/cart';
import { storeToRefs } from 'pinia';

const cartStore = useCartStore();
const { cart } = storeToRefs(cartStore);


const removeFromCart = (id) => {
    cartStore.removeProductFromCart(id)
}

const total = computed(() => {
    let total = 0;
    cart.value.forEach((product) => {
        total += product.price;
    });
    if (total) {
        return total.toFixed(2);
    }
    return 0;
});

const totalWithoutDot = () => {
    let num = String(total.value).split('.').join('');
    return Number(num);
};
</script>

<template>

    <Head title="Cart" />

    <AuthenticatedLayout>
        <div class="flex gap-4">
            <div class="bg-white w-full p-4 mt-4">
                <div class="border-b">
                    <div class="text-[27px] font-semibold">
                        Carrinho de compras
                    </div>
                    <div class="flex text-sm w-full items-center justify-end font-semibold">
                        Preço
                    </div>
                </div>

                <div v-if="!cart.length" class="text-center font-bold text-2xl py-20">
                    Seu carrinho de compras está vazio
                </div>

                <div v-else class="flex border-b" v-for="product in cart" :key="product">
                    <img class="h-[100px] mt-4 mb-4" :src="product.image" alt="">
                    <div class="flex justify-between mb-4">
                        <div class="pl-8 py-10 relative">
                            <div class="text-gray-900 pb-2 -mt-4 font-bold text-[18px]">
                                {{ product.title }}
                            </div>
                            <span>
                                {{ product.description.substring(0, 100) }}...
                            </span>
                            <div class="text-teal-600 py-2">
                                Em estoque
                            </div>
                            <div class="text-teal-600 absolute bottom-0 mb-4 flex items-center">
                                <div @click="removeFromCart(product.id)" class="text-sm hover:underline cursor-pointer">
                                    Remover
                                </div>
                            </div>
                        </div>

                        <div class="py-10 justify-end">
                            <div class="font-bold pl-20">
                                {{ product.price }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="font-extrabold text-[18px pt-4 text-right">
                    Total (Items: {{ cart.length }}: R${{ total }})
                </div>
            </div>

            <div class="bg-white w-[350px] p-4 mt-4 h-48">
                <div class="text-sm text-green-700">
                    Bem vindo a Amazon! entrega gratís na sua primeira compra.
                    Selecione essa opção no checkout.
                </div>
                <div class="font-extrabold text-[18px pt-4">
                    Total ({{ cart.length }} itens) R${{ total }}
                </div>
                <Link
                    class="block mt-4 w-full text-center- py-1 font-bold text-sm rounded-lg border shadow-sm cursor-pointer"
                    :disabled="Number(total) === 0.00"
                    :class="Number(total) === 0.00 ? 'bg-gray-400' : 'bg-yellow-400 hover:bg-yellow-500'"
                    as="button"
                    :href="$page.props.auth.user !== null
                        ? route('checkout.index',{
                            total: totalWithoutDot(),
                            total_decimal: total,
                            items: cart
                        })
                        : route('login')
                    "
                >
                Seguir para o checkout
                </Link>
            </div>
        </div>
    </AuthenticatedLayout>

</template>
