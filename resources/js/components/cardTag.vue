<script setup>
// import { ref } from 'vue'

// defineProps({
//   msg: String,
// })

// const count = ref(0)

colorPicker.addEventListener("input", updateFirst);
colorPicker.addEventListener("change", watchColorPicker);

function watchColorPicker(event) {
  document.querySelectorAll("p").forEach((p) => {
    let colorTag;
    colorTag = p.style.color = event.target.value;
  });
}
</script>

<template>
  <input
    type="color"
    id="body"
    name="body"
    value="oklab(50% 0.1 0.1 / 0.5)"
    colorspace="display-p3"
    alpha
    @click="onSubmit()"
  />
</template>

<style scoped>

</style>
