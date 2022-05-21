<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Container from "@/Components/container.vue";
import Card from "@/Components/card/card.vue";
</script>

<template>
  <Head title="Admin Dashboard" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
    </template>

    <Container>
        <Card>
            Admin
        </Card>
    </Container>
  </BreezeAuthenticatedLayout>

</template>
