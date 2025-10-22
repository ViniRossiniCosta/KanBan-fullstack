<script setup lang="ts">
import addCard from '@/components/board/addCard.vue';
import MidNav from '@/components/board/MidNav.vue';
import FooterD from '@/layouts/board/FooterD.vue';
import { login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';
import Board from './Board.vue';
</script>

<template>
    <nav class="naoseiintegrar flex items-center justify-end gap-4">
        <img
            src="../../../public/image-removebg-preview.png"
            class="pqnaofazautomatico"
            alt=""
        />
        <a
            v-if="$page.props.auth.user"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Workspaces
        </a>
        <div v-if="$page.props.auth.user" class="agrupamentov2">
            <a
                class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
            >
                Recent
            </a>
            <a
                class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
            >
                Starred
            </a>
            <a
                class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
            >
                Templates
            </a>
            <div>
                <addCard />
            </div>
        </div>
        <div v-if="$page.props.auth.user" class="agrupamentov2">
            <input type="search" placeholder="search.." class="deixabonito" />
            <div class="">
                <a>
                    <span class="pi pi-bell"></span>
                </a>
            </div>
            <div class="">
                <a>
                    <span class="pi pi-question-circle"></span>
                </a>
            </div>
            <div class="">
                <a> <span class="pi pi-user"></span> </a>
            </div>
        </div>
        <template v-else>
            <Link :href="login()"> Log in </Link>
            <Link :href="register()"> Register </Link>
        </template>
    </nav>
    <!-- <HeaderD /> -->
    <MidNav />
    <Board />
    <FooterD />
</template>
<style scoped>
a {
    text-decoration: none;
    color: black;
}

.naoseiintegrar {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background-color: rgb(255, 255, 255);
}

.deixabonito {
    border-radius: 6px;
    padding: 1.4%;
    padding-right: 20px;
    display: flex;
}

.pqnaofazautomatico {
    max-height: 9%;
    max-width: 11%;
    width: 3.6%;
    height: 1%;
}

.agrupamentov2 {
    display: flex;
    align-items: center;
    justify-content: space-around;

    width: 400px;
}
</style>
