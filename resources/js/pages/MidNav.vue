<script setup>
import shareButton from '../main/pop-ups/shareButton.vue';
// import { ref } from 'vue'

// defineProps({
//   msg: String,
// })

// const count = ref(0)
</script>

<template>
  <div class="dt">
    <div class="align-self-safe text-white text-[1.3rem]">Development
      Sprint Board<span class="pi pi-th-large" style="font-size: 1.3rem"></span>Board</div>
    
    <div class="">
      <shareButton />
    </div>
  </div>
</template>

<style scoped>
.dt {
  height: 170px;
  display: flex;
  justify-items: auto;
  justify-content: space-between;
}
</style>