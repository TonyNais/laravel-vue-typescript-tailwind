<template>
    <h1 class="text-left">{{ greeting }}</h1>
</template>
<script lang="ts">
export default {
    setup: () => ({
        greeting: 'Hello World from Vue 3!'
    })
}
</script>
