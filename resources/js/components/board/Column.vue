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
    <div
        class="min-h-1/3 ct content-center justify-items-center overflow-y-auto rounded-md"
    >
        <div class="headerColumn">
            <div class="titlecolumn">Estaticos</div>
            <div class="count">
                <div class="border">3</div>
            </div>
        </div>
        <div class="spaceinnercard">
            <Cards />
            <br />
            <Cards />
            <br />
            <Cards />
        </div>
    </div>
</template>

<style scoped>
.ct {
    align-content: center;
    justify-items: center;

    background-color: rgba(255, 255, 255, 0.541);
    width: 270px;
    height: 65vh;

    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow-y: auto;
    column-gap: 1px;

    -webkit-box-shadow: 7px 6px 21px 5px rgba(0, 0, 0, 0.19);
    box-shadow: 7px 6px 21px 5px rgba(0, 0, 0, 0.19);
}

.spaceinnercard {
    display: flex;
    flex-direction: column;
}

.headerColumn {
    display: flex;
    flex-direction: row;
}

.count {
    padding-left: 95px;
    position: relative;
    bottom: 17px;
    font-size: 18px;
}

.titlecolumn {
    position: relative;

    display: flex;
    justify-content: center;
    align-items: center;

    font-size: 18px;

    padding-right: 47px;
    bottom: 17px;
}

.border {
    width: 21px;
    height: 27px;
    border-radius: 3px;

    background-color: rgba(124, 122, 122, 0.308);

    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
