<template>

    <Head title="Endereços" />

    <AuthenticatedLayout>
        <div class="mt-8"></div>

        <div class="max-w-[1000px] mx-auto text-3xl mb-10">
            Seus endereços
        </div>

        <div class="max-w-[500px] mx-auto text-2xl font-extrabold">
            <div>
                Adicionar novo endereço
            </div>

            <form @submit.prevent="submit">
                <div class="text-[15x] -mb-1.5 font-extrabold">
                    País
                </div>
                <select name="country" id="country"
                    v-model="form.country"
                    class="w-full border-gray-300 sahdow-md py-1 bg-gray-200 hover:bg-gray-300 cursor-pointer focus:border-orange-400 focus:ring-orange-400">
                    <option selected value="Brasil">Brasil</option>
                    <option value="Portugal">Portugal</option>
                    <option value="EUA">EUA</option>
                </select>

                <div class="mt-4">
                    <InputLabel class="-mb-1.5" value="Nome" />
                    <TextInput v-model="form.first_name" name="name" type="text" class="mt-1 block w-full" required />
                </div>

                <div class="mt-3">
                    <InputLabel class="-mb-1.5" value="Sobrenome" />
                    <TextInput v-model="form.last_name" type="text" class="mt-1 block w-full" required />
                </div>

                <div class="mt-3">
                    <div class="flex">
                        <div class="w-4/5 mr-2">
                            <InputLabel class="-mb-1.5" value="Endereço" />
                            <TextInput v-model="form.addr1" type="text" class="mt-1 block w-full" required
                                placeholder="Rua, Avenida, etc..." />
                        </div>
                        <!-- <div class="w-1/5">
                            <InputLabel class="-mb-1.5" value="Número" />
                            <TextInput type="text" class="mt-1 block w-full" required placeholder="" />
                        </div> -->
                    </div>
                    <div class="w-full">
                        <InputLabel class="-mb-1.5" value="Complemento" />
                        <TextInput v-model="form.addr2" type="text" class="mt-1 block w-full" required />
                    </div>
                    <div class="mt-1 flex gap-2">
                        <div class="w-full">
                            <InputLabel class="-mb-1.5" value="Cidade" />
                            <TextInput v-model="form.city" type="text" class="mt-1 block w-full" required placeholder="Cidade" />
                        </div>

                        <div class="w-full">
                            <InputLabel class="-mb-1.5" value="CEP" />
                            <TextInput v-model="form.postcode" type="text" class="mt-1 block w-full" required placeholder="00000-000" />
                        </div>

                    </div>
                </div>

                <div class="mt-6 ">
                    <button
                        class="bg-yellow-400 px-4 font-bold text-[14px] rounded-lg shadow-sm cursor-pointer">
                        Adicionar endereço
                    </button>
                </div>

            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    country: 'Brasil',
    user_id: usePage().props.auth.user.id,
    first_name: usePage().props.auth.user.first_name,
    last_name: usePage().props.auth.user.last_name,
    addr1: '',
    addr2: '',
    city: '',
    postcode: '',
});

const submit = () => {
    form.post(route('address_options.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
}

</script>
