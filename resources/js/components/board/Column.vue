<script setup lang="ts">
import Cards from './Cards.vue';
// import { ref } from 'vue'

// defineProps({
//   msg: String,
// })

// const count = ref(0)
</script>

<template>
  <!-- add v-if -->
  <div class="overflow-y-auto min-h-1/3 ct justify-items-center content-center rounded-md">
    <div class="">
      <Cards />
    </div>
  </div>
</template>

<style scoped>
.ct {
  background-color: rgb(255, 0, 0);
  width: 240px;
  height: 65vh;

  backdrop-filter: blur(10px);
  border-radius: 20px;
  overflow-y: auto;
  column-gap: 1px;
}

</style>
