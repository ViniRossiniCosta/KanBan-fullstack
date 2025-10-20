<script setup lang="ts">
import shareButton from './shareButton.vue';
// import { ref } from 'vue'

// defineProps({
//   msg: String,
// })

// const count = ref(0)
</script>

<template>
  <div class="dt">
    <div class="align-self-safe text-white text-[1.3rem]"><div class="sla">&#8239; Development
      Sprint Board &#8239;<span class="pi pi-th-large" style="font-size: 1.3rem"></span>&#8239; Board</div></div>

    <div class="">
      <shareButton />
    </div>
  </div>
</template>

<style scoped>
.dt {
  height: 50px;
  display: flex;
  justify-content: center;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  background-color: #6697ff;

  position: fi;

  width: 220vh;
}

.sla {
    display: flex;
    justify-content: space-evenly;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.3rem;
}
</style>
