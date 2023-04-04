<template>
      <Head title="Users"/>
      <h1 class="text-4xl font-bold">Users Page</h1>

      
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
            <tr v-for="user in users.data" :key="user.id" class="border-solid">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div>
                        <div class="text-base font-semibold">{{ user.name }}</div>
                    </div>  
                </th>
                <td class="px-6 py-4">
                    <Link :href="`/user/${user.id}/edit`" as="button" class="text-indigo-600 hover:text-indigo-900">Edit</Link>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div>
      <p class="text-2xl font-mono my-4">Paginator: 
            <Pagination :links="users.link"/>
      </p>
</div>
</template>

<script>
import Pagination from '../Shared/Pagination.vue';
export default {
      props : {
            'users': Object
      },
      components: {
            Pagination
      }
}
</script>