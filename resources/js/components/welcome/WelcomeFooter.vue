
<script setup lang="ts">
const currentYear = new Date().getFullYear();

const links = [
    { label: 'Home', href: '#home' },
    { label: 'About BEAT', href: '#about' },
    { label: 'Platform Features', href: '#features' },
    { label: 'How It Works', href: '#how-it-works' },
];
</script>

<template>
    <footer class="bg-neutral-950 text-white">
        <div class="mx-auto max-w-7xl px-6 py-14">

            <!-- Main Footer -->
            <div class="grid gap-10 md:grid-cols-3">

                <!-- System Identity -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex size-11 items-center justify-center rounded-lg bg-primary text-xl font-bold text-white"
                        >
                            B
                        </div>

                        <div>
                            <h2 class="text-lg font-bold tracking-wide">
                                BEAT
                            </h2>

                            <p class="text-xs text-neutral-400">
                                Buguias Electronic Assessment Toolkit
                            </p>
                        </div>
                    </div>

                    <p class="mt-5 max-w-sm text-sm leading-7 text-neutral-400">
                        A pre-assessment toolkit designed to help
                        barangays organize requirements, manage
                        documentary evidence, and monitor assessment
                        readiness.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold">Quick Links</h3>

                    <ul class="mt-5 space-y-3">
                        <li v-for="link in links" :key="link.label">
                            <a
                                :href="link.href"
                                class="text-sm text-neutral-400 transition hover:text-white"
                            >
                                {{ link.label }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Platform -->
                <div>
                    <h3 class="font-semibold">Platform</h3>

                    <ul class="mt-5 space-y-3 text-sm text-neutral-400">
                        <li>BaRCO Module</li>
                        <li>Barangay Assessments</li>
                        <li>Municipal Assessments</li>
                    </ul>
                </div>
            </div>

            <!-- Institutional Attribution -->
            <div
                class="mt-12 border-t border-neutral-800 pt-8"
            >
                <h3 class="font-semibold">
                    Municipality of Buguias
                </h3>

                <p class="mt-2 text-sm text-neutral-400">
                    Province of Benguet · Cordillera Administrative
                    Region · Philippines
                </p>

                <div
                    class="mt-8 flex flex-col justify-between gap-3 text-xs text-neutral-500 sm:flex-row"
                >
                    <p>
                        © {{ currentYear }} BEAT. All rights reserved.
                    </p>

                    <p>
                        Buguias Electronic Assessment Toolkit
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>
