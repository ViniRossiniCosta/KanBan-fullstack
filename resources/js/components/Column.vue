<script setup>
import Cards from './core/Cards.vue'
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
  background-color: rgba(121, 112, 112, 0.322);
  width: 240px;
  height: 71vh;
}

</style>