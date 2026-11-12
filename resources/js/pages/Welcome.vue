<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

import WelcomeNavbar from '@/components/welcome/WelcomeNavbar.vue';
import WelcomeHero from '@/components/welcome/WelcomeHero.vue';
import PlatformOverview from '@/components/welcome/PlatformOverview.vue';
import HowItWorks from '@/components/welcome/HowItWorks.vue';
import WelcomeFooter from '@/components/welcome/WelcomeFooter.vue';
</script>

<template>
    <Head title="Welcome to BEAT" />

    <div class="min-h-screen bg-background text-foreground">
        <WelcomeNavbar />

        <main>
            <WelcomeHero />
            <PlatformOverview />
            <HowItWorks />
        </main>

        <WelcomeFooter />
    </div>
</template>