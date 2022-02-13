<template>
  <app-layout title="Productos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Productos
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
          class="
            p-4
            w-full
            max-w-2xl
            mx-auto
            bg-white
            shadow-lg
            rounded-sm
            border border-gray-200
          "
        >
          <div class="flex flex-col items-center space-y-4">
            <h1 class="font-bold text-2xl text-gray-700 w-4/6 text-center">
              Actualiza un producto
            </h1>
            <p class="text-sm text-gray-500 text-center w-5/6">
              Escribe los atributos
            </p>
            <form @submit.prevent="submit" class="flex flex-col gap-3 w-full">
              <input
                type="text"
                placeholder="Nombre"
                id="name"
                v-model="form.name"
                class="border-2 rounded-lg w-full h-12 px-4"
              />
              <input
                type="text"
                placeholder="Descripción"
                id="description"
                v-model="form.description"
                class="border-2 rounded-lg w-full h-12 px-4"
              />
              <input
                type="text"
                placeholder="$0.00"
                id="price"
                v-model="form.price"
                class="border-2 rounded-lg w-full h-12 px-4"
              />
              <div class="flex justify-between gap-3">
                <button
                  type="submit"
                  class="
                    bg-green-400
                    text-white
                    rounded-md
                    font-semibold
                    px-4
                    py-3
                    w-full
                  "
                >
                  Guardar
                </button>
                <Link
                  :href="route('products.index')"
                  class="
                    bg-red-400
                    text-white
                    rounded-md
                    font-semibold
                    px-4
                    py-3
                    w-full
                  "
                >
                  Cancelar
                </Link>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  components: {
    AppLayout,
    Link,
  },
  props: ["product"],
  data() {
    return {
      form: {
        name: this.$props.product.name,
        description: this.$props.product.description,
        price: this.$props.product.price,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("products.update", this.$props.product.id),
        this.form
      );
    },
  },
};
</script>