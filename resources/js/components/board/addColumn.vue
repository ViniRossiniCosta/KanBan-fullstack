<script setup lang="ts">
// import Column from './Column.vue';
// import { ref } from 'vue'


// defineProps({
//   msg: String,
// })

// const count = ref(0)
// To-Do usar uma contadora para contar os cardes e passar essa prop para a column
</script>

<template>
  <div class="bg-gray-300 rounded-md pact">
    <button class="backdrop-blur-sm rounded-md bact">
      <span class="pi pi-plus" style="font-size: 1.4rem"></span>
    </button>
  </div>

  <dialog>
    <button autofocus>Close</button>
    <p>This modal dialog has a groovy backdrop!</p>
  </dialog>

  <div class="overflow-x-auto">
    <!-- <Column /> -->
     coluymn
  </div>
</template>
<style scoped>
.pact {
  display: flex;
  justify-content: center;

  width: 240px;
  height: 65vh;
}

.bact {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: transparent;

  width: 240px;
  height: 65vh;
}
</style>
