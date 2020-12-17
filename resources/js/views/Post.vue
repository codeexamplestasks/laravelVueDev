<template>
    <post
        v-for="post in posts"
        :title="post.title"
        :body="post.body"
        :date="post.created_at"
    />
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
