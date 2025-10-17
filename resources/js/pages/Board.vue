<script setup>
// import { ref } from 'vue'
import addColumn from './main/pop-ups/addColumn.vue';

// defineProps({
//   msg: String,
// })

// const count = ref(0)

// const props = defineProps(["modelValue", "cards", "columns"]);
// const emit = defineEmits(["addCard", "moveCard", "editStatus"]);

// const cards = ref(props.cards);
// const columnStatuses = ref(props.columns);

// const visibleDialog = ref(false);
// const dialogData = ref({
//   title: "",
// });

// const addColumn = () => {
//   columnStatuses.value.push(dialogData.value.title);

//   dialogData.value.title = "";
//   visibleDialog.value = false;
// };

// const addCard = (card, status) => {
//   let finalCard = {
//     id: cards.value.length + 1,
//     ...card,
//     status: status,
//   };

//   cards.value.push(finalCard);
//   emit("addCard", finalCard);
// };

// const moveCard = (cardId, newStatus) => {
//   const card = cards.value.find((card) => card.id === cardId);
//   if (card) {
//     card.status = newStatus;
//   }
//   emit("moveCard", card);
// };

// const drop = (event, receivedStatus) => {
//   const column = event.dataTransfer.getData("text/plain");

//   columnStatuses.value = moveElement(columnStatuses.value, columnStatuses.value.indexOf(column), columnStatuses.value.indexOf(receivedStatus));
// };

// const moveElement = (array, fromIndex, toIndex) => {
//   const element = array.splice(fromIndex, 1)[0];

//   array.splice(toIndex, 0, element);

//   return array;
// };

// const editStatus = (newStatus, oldStatus) => {
//   columnStatuses.value[columnStatuses.value.indexOf(oldStatus)] = newStatus;
//   emit("editStatus", newStatus, oldStatus);
// };
</script>

<template>
  <div class="bg-gray-400 p-4 overflow-x-auto gap-4 w-full altBg">
    <addColumn class="" />
  </div>
</template>

<style scoped>
.altBg {
  width: 209vh;
}
</style>