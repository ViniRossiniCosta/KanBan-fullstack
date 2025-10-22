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
        <div class="align-self-safe text-[1.3rem] text-white">
            <div class="sla">
                &#8239; Development Sprint Board &#8239;<span
                    class="pi pi-th-large"
                    style="font-size: 1.3rem"
                ></span
                >&#8239; Board
            </div>
        </div>

        <div class="rside">
            <div class="avatars">
                <span class="material-icons">account_circle</span>
                <span class="material-icons">account_circle</span>
                <span class="material-icons">account_circle</span>
                <span class="material-icons">account_circle</span>
            </div>
            <div class="share">
                <shareButton />
            </div>
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
    background-color: #0c1e3ee5;

    width: 220vh;
}

.sla {
    display: flex;
    justify-content: space-evenly;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.3rem;

    color: white;
}

.share {
    display: flex;
    justify-content: center;
    width: 120px;
}

.rside {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;

    width: 240px;
}

.avatars {
    display: flex;
    color: rgb(255, 255, 255);
}
</style>
