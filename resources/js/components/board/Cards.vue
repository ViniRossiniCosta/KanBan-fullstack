<script setup lang="ts">
// import { ref } from "vue";

// defineProps({
//   msg: String,
// });

// const count = ref(0);
// alem de visualizar vai ter a função de editar (poderia ter feito ele de middleware tambem mas isso ia virar uma bagunca eu acho)
</script>

<template>
    <div class="view_card">
        <div class="spacetags">
            <div class="tag"></div>
            <div class="tag"></div>
        </div>
        <div class="eunaoseifazerfront">
            <!-- {{ TITULO }} -->
            Lorem ipsum!
        </div>
        <div class="descricaoeuacho">
            <div class="passos">
                <span class="pi pi-check-circle"></span>
            </div>
            <div class="anexos">
                <span class="pi pi-paperclip"></span>
            </div>
            <div class="comentarios">
                <span class="pi pi-comments"></span>
            </div>
            <div class="usuario">
                <span class="pi pi-users"></span>
            </div>
        </div>
    </div>

    <div class="">
        <dialog></dialog>
    </div>
</template>

<style scoped>
.view_card {
    width: 35vh;
    background-color: rgba(240, 240, 233, 0.815);

    border-radius: 9px;
    border-left: 5.2px solid rgb(150, 37, 37);

    display: flex;
    flex-direction: column;
    word-break: break-all;
    justify-items: flex-end;
}

.tag {
    width: 7vh;
    height: 10px;
    background-color: rgb(165, 40, 40);
    border-radius: 7px;
}

.spacetags {
    display: flex;
    flex-direction: row;
    width: 16.4vh;
    height: 5vh;
    justify-content: space-evenly;
    align-items: center;
}

.eunaoseifazerfront {
    display: flex;
    margin-left: 10px;

    width: 9rem;
    font-size: 1rem;
}

.descricaoeuacho {
    margin: 10px;
    height: 20px;

    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}
</style>
