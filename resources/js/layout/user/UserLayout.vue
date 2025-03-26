<script setup>
import { ref } from "vue";
import {Link} from '@inertiajs/vue3'

defineProps({
    user: Object,
    required: true
})
</script>

<template>
<nav class="flex justify-between">

    <!-- Logout Button -->
    <Link href="/logout" method='post' as='button'>Logout</Link>
    <p>{{}}</p>
</nav>

<slot />
</template>
