<script setup>
const props = defineProps(['time', 'event'])
</script>

<template>
    <div>
        Il est actuellement {{ props.time }} à {{ props.event }}.
    </div>
</template>
