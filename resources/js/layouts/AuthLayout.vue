<script setup lang="ts">
import AuthLayout from '@/layouts/auth/AuthSimpleLayout.vue';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <AuthLayout :title="title" :description="description" class="AAAAAAAAAAAA">
        <slot />
    </AuthLayout>
</template>

<style scoped>
.AAAAAAAAAAAA {
    background: #ffff;
    font-size: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
}
</style>
