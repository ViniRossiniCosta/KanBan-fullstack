<script setup>
// import { ref } from 'vue'

// defineProps({
//   msg: String,
// })

// const count = ref(0)
</script>

<template>
  <div class="navbar">
    <a href="#home"><span class="pi pi-inbox" style="font-size: 1.4rem"></span><br>Inbox</a>
    <a href="#news"><span class="pi pi-th-large" style="font-size: 1.4rem"></span><br>Planner</a>
    <a href="#contact"><span class="pi pi-table" style="font-size: 1.4rem"></span><br>Board</a>
    <a href="#contact"><span class="pi pi-objects-column" style="font-size: 1.4rem"></span><br>Switch Boards</a>
  </div>
</template>

<style scoped>
.navbar {
  background-color: #fdfbfb;
  position: fixed;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;

  gap: 3%;
  height: 8%;
  height: 8vh;

  bottom: 0;
  width: 100%;
}

/* Style the links inside the navigation bar */
.navbar a {
  float: left;
  display: block;
  color: #33353adc;
  text-align: center;
  text-decoration: none;
  font-size: 1.033rem;

  padding: 1%;
}

/* Change the color of links on hover */
.navbar a:hover {
  color: #0400f8e7;
}
</style>