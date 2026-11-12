
<script setup lang="ts">
const features = [
    {
        icon: 'clipboard-check',
        title: 'Assessment Preparation',
        description:
            'Review assessment criteria and identify documentary requirements before formal evaluation.',
    },
    {
        icon: 'folder-check',
        title: 'Evidence Management',
        description:
            'Organize and submit Means of Verification (MOVs) for each assessment requirement.',
    },
    {
        icon: 'chart-no-axes-combined',
        title: 'Compliance Monitoring',
        description:
            'Track submission progress and identify incomplete or pending requirements.',
    },
    {
        icon: 'file-check',
        title: 'Validation and Reporting',
        description:
            'Support document review, validation, and the preparation of assessment summaries.',
    },
];
</script>

<template>
    <section
        id="features"
        class="bg-muted/30 px-6 py-24 sm:py-28"
    >
        <div class="mx-auto max-w-7xl">
            <!-- Section Heading -->
            <div class="mx-auto max-w-2xl text-center">
                <span
                    class="text-sm font-semibold uppercase tracking-widest text-primary"
                >
                    Platform Overview
                </span>

                <h2
                    class="mt-3 text-3xl font-bold tracking-tight text-foreground sm:text-4xl"
                >
                    Everything Barangays Need to Prepare
                </h2>

                <p class="mt-5 leading-7 text-muted-foreground">
                    A centralized toolkit for organizing assessment
                    requirements, tracking submissions, and preparing
                    documentary evidence.
                </p>
            </div>

            <!-- Feature Cards -->
            <div
                class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4"
            >
                <article
                    v-for="feature in features"
                    :key="feature.title"
                    class="rounded-xl border border-border bg-card p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary"
                    >
                        <!-- Replace with your preferred icon library -->
                        <span class="text-xl">◆</span>
                    </div>

                    <h3
                        class="mt-6 text-lg font-semibold text-foreground"
                    >
                        {{ feature.title }}
                    </h3>

                    <p
                        class="mt-3 text-sm leading-6 text-muted-foreground"
                    >
                        {{ feature.description }}
                    </p>
                </article>
            </div>

            <!-- Initial Module -->
            <div
                class="mt-16 overflow-hidden rounded-2xl border border-border bg-card"
            >
                <div
                    class="grid items-center gap-8 p-8 md:grid-cols-2 md:p-12"
                >
                    <div>
                        <span
                            class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary"
                        >
                            FIRST IMPLEMENTATION
                        </span>

                        <h3
                            class="mt-5 text-2xl font-bold text-foreground sm:text-3xl"
                        >
                            Starting with BaRCO
                        </h3>

                        <p
                            class="mt-4 leading-7 text-muted-foreground"
                        >
                            BEAT begins with the Barangay Road Clearing
                            Operations (BaRCO) assessment module,
                            providing barangays with a structured way
                            to prepare requirements, organize MOVs,
                            and monitor assessment progress.
                        </p>

                        <p
                            class="mt-4 text-sm leading-6 text-muted-foreground"
                        >
                            Additional barangay assessment modules
                            will be introduced as the platform develops,
                            followed by municipal-level assessments.
                        </p>
                    </div>

                    <div
                        class="flex min-h-52 items-center justify-center rounded-xl bg-primary/5 p-8"
                    >
                        <div class="text-center">
                            <div
                                class="text-5xl font-black tracking-tight text-primary"
                            >
                                BaRCO
                            </div>

                            <p
                                class="mt-3 text-sm font-medium text-muted-foreground"
                            >
                                Barangay Road Clearing Operations
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
