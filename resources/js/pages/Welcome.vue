<script setup lang="ts">
import addCard from '@/components/board/addCard.vue';
import MidNav from '@/components/board/MidNav.vue';
import FooterD from '@/layouts/board/FooterD.vue';
import { dashboard, login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';
import Board from './Board.vue';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <nav class="naoseiintegrar flex items-center justify-end gap-4">
        <img src="" alt="" />
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link v-if="$page.props.auth.user" :href="dashboard()">
            <addCard />
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <Link
            v-if="$page.props.auth.user"
            :href="dashboard()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
        >
            Board
        </Link>
        <template v-else>
            <Link
                :href="login()"
                class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
            >
                Log in
            </Link>
            <Link
                :href="register()"
                class="inline-block rounded-sm border border-[#ffd32435] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
            >
                Register
            </Link>
        </template>
    </nav>
    <!-- <HeaderD /> -->
    <MidNav />
    <Board />
    <FooterD />
</template>
<style scoped>
.naoseiintegrar {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background-color: rgb(255, 255, 255);
}
</style>
