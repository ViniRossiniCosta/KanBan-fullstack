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
}
</style>
//                          ..,,:ii1,
//               .,::;;;;:::;;;;;iiii:,,,,.
//             ,;i11i;;:::::;::::,,:;;;;;ii
//          .:;iii;;;:::::;;;;;;;;;:::::::;
//        .;iii;;;::::;;;;;;;;;;;;;;;;::,,,
//       ,;;::::::;;;;ii;:::::;:::::;;::::,
//      ,::,,::;;iiii11i;;:,,,:::::::::,,,,
//     .::,,:;i111111111;;;,...,,,,,,,.,...
//     .:,::i111tttt11ii;:;:,.  ...,,. ..
//     .,,:i11tttttt11i;;,:::,.   ...
//    ..,,;111tttttt11ii;:,:;:,.   ..
//   .;,.:i111tttt11111111i;;i;,.
//    ,..,;iiiiiiii;;;;;ii11iii:,.
//    ...,,,,:;ii;:,,,,,::;;iii;,,...
//   .,..,,,,.:11i;:,,:,..,::;i;,,.,...
//   ... :iiii1Lft111ii;;;i11tt1::,,,...
//   ....;tfffCCLfffffffffLLfft1::,,,...
//  ,,...iffffLfffftfLLLLLLffft1:,,:,.....
//  :,,,,;1111ii;iii1tffffttt11i:,,:,......
//  ,;:::,;ii11iiii11iii1iiiiiii::::,......
//   ...,,.,;ii;;;;;;;:;;iiiiii;:::,,,,...
//          .:1i;;;;;iiiiiiiii;::::::,,..
//            ;tttt11111iiii;;;::::::,,.
//            .;11ttt111iiii;;;::::::::,...
//              .,::i1ii;;;::::::;;ii;:::,,
//                 .;i;;;;;;;;;;i1tfffti;;,
