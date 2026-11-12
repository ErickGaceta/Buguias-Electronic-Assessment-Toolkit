
<script setup lang="ts">
const steps = [
    {
        number: '01',
        title: 'Review Requirements',
        description:
            'Barangay users review the assessment criteria and identify the required Means of Verification (MOVs) for each indicator.',
        icon: 'clipboard-list',
    },
    {
        number: '02',
        title: 'Prepare and Submit',
        description:
            'Gather supporting documents, organize documentary evidence, and submit the required MOVs through the platform.',
        icon: 'folder-up',
    },
    {
        number: '03',
        title: 'Review and Validate',
        description:
            'Authorized personnel examine submitted evidence, provide feedback, and record validation findings.',
        icon: 'file-check',
    },
    {
        number: '04',
        title: 'Monitor Progress',
        description:
            'Track assessment progress, identify deficiencies, and address pending requirements in preparation for formal assessment.',
        icon: 'chart-no-axes-combined',
    },
];
</script>

<template>
    <section class="bg-background px-6 py-24 sm:py-28">
        <div class="mx-auto max-w-7xl">

            <!-- Section Heading -->
            <div class="mx-auto max-w-2xl text-center">
                <span
                    class="text-sm font-semibold uppercase tracking-widest text-primary"
                >
                    How It Works
                </span>

                <h2
                    class="mt-3 text-3xl font-bold tracking-tight text-foreground sm:text-4xl"
                >
                    From Preparation to Validation
                </h2>

                <p class="mt-5 leading-7 text-muted-foreground">
                    BEAT provides a structured workflow that helps
                    barangays prepare, submit, and monitor their
                    assessment requirements.
                </p>
            </div>

            <!-- Workflow Steps -->
            <div
                class="relative mt-16 grid gap-10 sm:grid-cols-2 lg:grid-cols-4"
            >
                <article
                    v-for="step in steps"
                    :key="step.number"
                    class="relative flex flex-col"
                >
                    <!-- Step Number -->
                    <div class="flex items-center gap-4">
                        <div
                            class="flex size-12 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white"
                        >
                            {{ step.number }}
                        </div>

                        <div class="h-px flex-1 bg-border lg:hidden"></div>
                    </div>

                    <!-- Step Content -->
                    <div class="mt-6">
                        <h3
                            class="text-lg font-semibold text-foreground"
                        >
                            {{ step.title }}
                        </h3>

                        <p
                            class="mt-3 text-sm leading-7 text-muted-foreground"
                        >
                            {{ step.description }}
                        </p>
                    </div>
                </article>
            </div>

            <!-- Notice -->
            <div
                class="mt-16 rounded-xl border border-border bg-muted/30 p-6 text-center"
            >
                <p class="text-sm leading-6 text-muted-foreground">
                    BEAT serves as a pre-assessment and preparation
                    toolkit. Official assessment, evaluation, and
                    certification remain subject to the applicable
                    DILG guidelines and procedures.
                </p>
            </div>

        </div>
    </section>
</template>
