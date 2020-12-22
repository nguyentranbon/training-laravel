<template>
    <app-layout>
        <div>
            <h3 class="text-gray-700 text-3xl font-medium">Dashboard1</h3>
        </div>
        <dashboard/>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Dashboard from '@/Jetstream/Dashboard'
    

    export default {
        components: {
            AppLayout,
            Dashboard,
        },
    }
</script>
