<script setup lang="ts">
// import { ref } from 'vue'

// defineProps({
//   msg: String,
// })

// const count = ref(0)
</script>

<template>
    <button class="alt" style="font-size: 1.2rem">
        <span class="pi pi-plus act">Create</span>
    </button>
    <div class="">
        <dialog></dialog>
    </div>
</template>

<style scoped>
.alt {
 font-family: Arial, Helvetica, sans-serif;
  display: flex;
  align-items: center;
  justify-content: space-between;

  height: 32px;
  border-radius: 5px;
  padding: 22%;
}
</style>
