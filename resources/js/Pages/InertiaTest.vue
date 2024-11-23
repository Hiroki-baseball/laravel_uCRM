<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';

axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const newTitle = ref('');
const newContent = ref('');
</script>

<template>
  Inertiaテストです。<br>
  <a href="/">aタグ経由です</a><br>
  <Link href="/">Link経由です</Link><br>
  <Link :href="route('inertia.index')">名前付きルートの確認です</Link><br>
  <Link :href="route('inertia.show', { id: 50 })">パラメータ付きの確認です</Link><br>

  <div class="mb-8"></div>

  <input type="text" name="newTitles¥" v-model="newTitle">{{ newTitle }}<br>
  <input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>
<Link as="button" method="post" :href="route('inertia.store')" :data="{
    title: newTitle,
    content: newContent
  }">DB保存テスト
</Link>
</template>