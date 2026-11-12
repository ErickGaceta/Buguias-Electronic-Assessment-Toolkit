
<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { login } from '@/routes';
</script>

<template>
    <section
        id="about"
        class="relative overflow-hidden bg-background px-6 py-24 sm:py-32"
    >
        <div class="mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary"
                >
                    Barangay Governance Assessment Platform
                </span>

                <h1
                    class="mt-8 text-4xl font-bold tracking-tight text-foreground sm:text-6xl"
                >
                    Preparing Barangays for
                    <span class="text-primary">
                        Better Governance Assessment.
                    </span>
                </h1>

                <p
                    class="mt-6 max-w-2xl text-lg leading-8 text-muted-foreground"
                >
                    BEAT (Buguias Electronic Assessment Toolkit) is a
                    pre-assessment platform developed to help barangays
                    prepare for the various reports, documentary
                    requirements, and submissions required by the
                    Department of the Interior and Local Government (DILG).
                </p>

                <p
                    class="mt-4 max-w-2xl leading-7 text-muted-foreground"
                >
                    Starting with the BaRCO module, the platform aims
                    to provide organized assessment tools, evidence
                    management, and compliance monitoring. It will
                    gradually expand to cover other barangay assessments
                    before extending to municipal-level assessments.
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <Link
                        :href="login()"
                        class="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:opacity-90"
                    >
                        Access BEAT
                    </Link>

                    <a
                        href="#features"
                        class="rounded-lg border border-border px-6 py-3 font-semibold text-foreground transition hover:bg-muted"
                    >
                        Explore the Platform
                    </a>
                </div>

                <p class="mt-6 text-sm text-muted-foreground">
                    Municipality of Buguias, Benguet
                </p>
            </div>
        </div>
    </section>
</template>
