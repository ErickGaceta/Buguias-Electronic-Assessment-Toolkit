<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { login } from '@/routes';
</script>

<template>
    <header class="border-b border-border bg-background">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <Link href="/" class="flex items-center gap-3">
                <img src="/favicon.svg" class="rounded size-10" alt="">

                <div>
                    <h1 class="text-lg font-bold tracking-tight text-foreground">
                        BEAT
                    </h1>
                    <p class="text-xs text-muted-foreground">
                        Buguias Electronic Assessment Toolkit
                    </p>
                </div>
            </Link>

            <div class="flex items-center gap-6">
                <a href="#about" class="hidden text-sm text-muted-foreground hover:text-primary sm:block">
                    About
                </a>

                <a href="#features" class="hidden text-sm text-muted-foreground hover:text-primary sm:block">
                    Features
                </a>

                <Link
                    :href="login()"
                    class="rounded-md bg-primary px-5 py-2 text-sm font-semibold text-white transition hover:opacity-90"
                >
                    Sign In
                </Link>
            </div>
        </nav>
    </header>
</template>