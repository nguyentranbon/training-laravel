<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    import JetNavLink from '@/Jetstream/NavLink'
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'flex items-center duration-200 mt-4 py-2 px-6 border-l-4 bg-gray-600 bg-opacity-25 text-gray-100 border-gray-100 ease-in-out'
                            : 'flex items-center duration-200 mt-4 py-2 px-6 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100 ease-in-out'
            }
        },

        components: {
            JetNavLink,
        }
    }
</script>
