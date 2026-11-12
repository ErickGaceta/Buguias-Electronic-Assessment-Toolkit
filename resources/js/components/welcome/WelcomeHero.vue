
<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { login } from '@/routes';
</script>

<template>
    <section
        id="about"
        class="relative overflow-hidden bg-background px-6 py-16 sm:py-24 lg:py-32"
    >
        <div
            class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2 lg:gap-16"
        >
            <!-- LEFT: BEAT Introduction -->
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary"
                >
                    Barangay Governance Assessment Platform
                </span>

                <h1
                    class="mt-8 text-4xl font-bold tracking-tight text-foreground sm:text-5xl xl:text-6xl"
                >
                    Preparing Barangays for
                    <span class="text-primary">
                        Better Governance Assessment.
                    </span>
                </h1>

                <p
                    class="mt-6 text-lg leading-8 text-muted-foreground"
                >
                    BEAT (Buguias Electronic Assessment Toolkit) is a
                    pre-assessment platform developed to help barangays
                    prepare for the various reports, documentary
                    requirements, and submissions required by the
                    Department of the Interior and Local Government (DILG).
                </p>

                <p
                    class="mt-4 leading-7 text-muted-foreground"
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

            <!-- RIGHT: MLGOO Profile -->
            <div class="mx-auto w-full max-w-md">
                <div
                    class="overflow-hidden rounded-2xl border border-border bg-card shadow-lg"
                >
                    <!-- Profile Photo -->
                    <div class="relative bg-muted">
                        <img
                            src="/images/mlgoo-profile.jpg"
                            alt="MLGOO Ronnel F. Ramirez"
                            class="aspect-[4/5] w-full object-cover object-top"
                        />

                        <div
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 to-transparent px-6 pb-6 pt-20"
                        >
                            <p
                                class="text-sm font-medium text-white/80"
                            >
                                MUNICIPAL LOCAL GOVERNMENT OPERATIONS OFFICER
                            </p>

                            <h2
                                class="mt-2 text-2xl font-bold text-white"
                            >
                                Ronnel F. Ramirez
                            </h2>

                            <p class="mt-1 text-sm text-white/80">
                                DILG Buguias, Benguet
                            </p>
                        </div>
                    </div>

                    <!-- Profile Attribution -->
                    <div class="p-5">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
                                <img
                                    src="/favicon.svg"
                                    alt="DILG Seal" />
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-foreground">
                                    Department of the Interior and Local Government
                                </p>

                                <p class="text-xs text-muted-foreground">
                                    Municipality of Buguias
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mt-4 text-center text-xs text-muted-foreground">
                    Municipal Local Government Operations Officer
                    · Buguias, Benguet
                </p>
            </div>
        </div>
    </section>
</template>
