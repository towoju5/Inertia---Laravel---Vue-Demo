<template>
      <Head title="Users" />
      <div class="flex justify-between mb-6">
            <div class="flex justify-center">
                  <h1 class="text-4xl font-bold">Users</h1>
                  <Link :href="`/user/create`" class="ml-2 mt-1 text-blue-500 text-sm" as="button">Create User</Link>
            </div>
            <input type="text" name="search" placeholder="Search..." class="border px-2 rounded-lg" v-model="search">
      </div>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <tbody>
                        <tr v-for="user in users.data" :key="user.id" class="border-solid">
                              <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                                    <div>
                                          <div class="text-base font-semibold">
                                                {{ user.name }}
                                          </div>
                                    </div>
                              </th>
                              <td class="px-6 py-4">
                                    <Link :href="`/user/${user.id}/edit`" as="button"
                                          class="text-indigo-600 hover:text-indigo-900">Edit</Link>
                              </td>
                        </tr>
                  </tbody>
            </table>
      </div>
      <div>
            <p class="text-2xl font-mono my-4 flex">
                  Paginator:
                  <Pagination :links="users.links" />
            </p>
      </div>
</template>

<script setup>
import { ref, watch } from "vue";
import Pagination from "../../Shared/Pagination.vue";
import { Inertia } from '@inertiajs/inertia'

let prop = defineProps({
      users: Object,
      filters: Object
})

let search = ref(prop.filters.search)
watch(search, value => {
      Inertia.get('users', { search: value}, {
            preserveState: true,
            replace: true
      });
})
</script>
