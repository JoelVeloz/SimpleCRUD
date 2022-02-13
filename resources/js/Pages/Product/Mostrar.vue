<template>
  <app-layout title="Productos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Productos
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- component -->
        <div class="flex flex-col justify-center h-full">
          <!-- Table -->
          <div
            class="
              w-full
              max-w-2xl
              mx-auto
              bg-white
              shadow-lg
              rounded-sm
              border border-gray-200
            "
          >
            <header class="px-5 py-4 border-b border-gray-100">
              <div class="sm:flex items-center justify-between">
                <h2 class="font-semibold text-gray-800">Productos</h2>

                <Link
                  :href="route('products.create')"
                  class="
                    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600
                    mt-4
                    sm:mt-0
                    inline-flex
                    items-start
                    justify-start
                    px-6
                    py-3
                    bg-indigo-700
                    hover:bg-indigo-600
                    focus:outline-none
                    rounded
                  "
                >
                  <p
                    :href="route('products.create')"
                    class="text-sm font-medium leading-none text-white"
                  >
                    Crear Producto
                  </p>
                </Link>
              </div>
            </header>
            <div class="p-3">
              <div class="overflow-x-auto">
                <table class="table-auto w-full">
                  <thead
                    class="
                      text-xs
                      font-semibold
                      uppercase
                      text-gray-400
                      bg-gray-50
                    "
                  >
                    <tr>
                      <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Nombre</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Descripción</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Precio</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Acción</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="text-sm divide-y divide-gray-100">
                    <tr v-for="product in products" :key="product.id">
                      <td class="p-2 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="font-medium text-gray-800">
                            {{ product.name }}
                          </div>
                        </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <div class="text-left">
                          {{ product.description }}
                        </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <div class="text-left font-medium text-green-500">
                          {{ product.price }}
                        </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <div class="flex item-center justify-center">
                          <div
                            class="
                              w-4
                              mr-2
                              transform
                              hover:text-purple-500 hover:scale-110
                            "
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                              />
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                              />
                            </svg>
                          </div>
                          <Link
                            :href="route('products.edit', product.id)"
                            class="
                              w-4
                              mr-2
                              transform
                              hover:text-purple-500 hover:scale-110
                            "
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                              />
                            </svg>
                          </Link>
                          <Link
                            method="delete"
                            :href="route('products.destroy', product.id)"
                            class="
                              w-4
                              mr-2
                              transform
                              hover:text-purple-500 hover:scale-110
                            "
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                              />
                            </svg>
                          </Link>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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
  props: {
    products: Array,
  },
  components: {
    AppLayout,
    Link,
  },
};
</script>