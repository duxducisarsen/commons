<script setup>
    const props = defineProps(['method']);
</script>
<template>
    <input type="hidden" name="_method" v-bind:value="props.method">
</template>