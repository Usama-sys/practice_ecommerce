<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Container from "@/Components/container.vue";
import Card from "@/Components/card/card.vue";
import Table from "@/Components/Table/table.vue";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
  roles: {
    type: Object,
    default: () => ({}),
  },
})
</script>

<template>
  <Head title="Roles" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Roles</h2>
    </template>

    <Container>
        <Card>
            <Table></Table>
        </Card>
    </Container>
  </BreezeAuthenticatedLayout>

</template>
