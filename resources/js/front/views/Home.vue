<template>
    <div class="container">
        <div class="header">
        </div>
        <div class="body">

        </div>
    </div>
</template>

<script>
    export default {
        name: "Home"
    }
</script>
<style scoped>
    body{
        min-height: 100vh;
    }
    .container{
        min-height: 100%;
    }
    .header{
        width: 100%;
        height: 12em;
        background: #c0b1af;
    }
    .body{
        width: 100%;
        height: calc(100% - 10em);
    }
</style>
