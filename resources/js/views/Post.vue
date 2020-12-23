<template>

</template>

<script>
    import axios from "axios";

    export default {
        name: "Index",

        data: () => ({
            loading: true,
            posts: []
        }),

        methods: {
            loadPost() {
                axios.get('/api/posts')
                .then(res => {
                    this.posts = res.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
