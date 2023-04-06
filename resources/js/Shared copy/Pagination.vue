<template>
    <div>
        <Component
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="px-2"
            :is="link.url ? 'Link' : 'span'"
            :class="link.url ? '' : 'text-gray-500'"
        />
    </div>
</template>

<script>
export default {
      props : {
            links: Array
      }
}
</script>