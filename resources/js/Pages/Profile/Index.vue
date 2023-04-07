<template>
      <Head title="My Profile" />
      {{ $page.props.auth.user }}
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";
defineProps({
      plans: Object,
      // user: $page.props.auth.user
});

let formData = reactive({
      email: "",
      name: "",
      password: "",
      phone: "",
      profile_image: "",
});

let updateForm = () => {
      // console.log(formData)
      Inertia.post("/investment/subscribe", form);
};
</script>
