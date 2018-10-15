<template>
    <div>
        <h1 style="text-align: center;padding:50px 0px;">とものテストページ</h1>

        <div style="background: #DA1172;height: 80px;line-height: 80px;padding:0px 20px;">
            <router-link :to="{ name: 'index' }">Home</router-link> |
            <router-link :to="{ name: 'test' }">Vueのテスト</router-link> |
            <router-link :to="{ name: 'todo' }">Todoリスト</router-link>
        </div>

        <div class="container" style="padding: 50px 0px;">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
