<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  Inertiaテストです。<br>
  <a href="/">a tag</a><br>
  <Link href="/">Link</Link><br>
  <Link :href="route('inertia.index')">名前付きルート</Link>
</template>