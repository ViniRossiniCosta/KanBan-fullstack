<script setup lang="ts">
import addCard from '@/components/board/addCard.vue';
import MidNav from '@/components/board/MidNav.vue';
import FooterD from '@/layouts/board/FooterD.vue';
import { login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';
import Board from './Board.vue';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
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
        <a
            v-if="$page.props.auth.user"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Starred
        </a>
        <a
            v-if="$page.props.auth.user"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </a>
        <a
            v-if="$page.props.auth.user"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </a>
        <div v-if="$page.props.auth.user">
            <addCard />
        </div>

        <input type="search" placeholder="search.." class="deixabonito" />
        <div class="">
            <a v-if="$page.props.auth.user">
                <span class="pi pi-bell"></span>
            </a>
        </div>
        <div class="">
            <a v-if="$page.props.auth.user">
                <span class="pi pi-question-circle"></span>
            </a>
        </div>
        <div class="" v-if="$page.props.auth.user">
            <a> <span class="pi pi-user"></span> </a>
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
    padding: 0.3%;
    display: flex;
}

.pqnaofazautomatico {
    max-height: 9%;
    max-width: 11%;
    width: 3.6%;
    height: 1%;
}
</style>
