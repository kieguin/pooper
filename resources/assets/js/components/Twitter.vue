<template>
    <div class="row">
        <div class="col-md-4">
            <form action="#" v-on:submit="postStatus">
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Cry about something..." maxlength="140" required v-model="post"></textarea>
                </div>
                <input type="submit" value="Post" class="btn btn-default btn-block">
            </form>
        </div>
        <div class="col-md-8">
            <p v-if="!posts.length">No posts to see here yet. Follow someone to make it happen...</p>
            <div class="posts" v-if="posts.length">
                <div class="media" v-for="post in posts" track-by="id" transition="expand">
                    <div class="media-left">
                        <img style="border-radius: 100%;" class="media-object" v-bind:src="post.user.avatar">
                    </div>
                    <div class="media-body">
                        <div class="user">
                            <a v-bind:href="post.user.profileUrl"><strong>{{ post.user.username }}</strong></a> - {{ post.humanCreatedAt }}
                        </div>
                        <p>{{ post.body }}</p>
                    </div>
                </div>
            </div>
            <br>
            <a v-if="total > posts.length" href="#" class="btn btn-default btn-sm" v-on:click="getMorePosts($event)">Load More</a>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                post: '',
                posts: [],
                limit: 20,
                total: 0
            }
        },

        methods: {
            postStatus (e) {
                e.preventDefault();

               $.ajax({
                    url: '/posts',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'body': this.post
                    },
                    success: (data) => {
                        this.post = '';
                        this.posts.unshift(data);
                    }
                });
            },
            getPosts () {
                $.ajax({
                    url: '/posts',
                    dataType: 'json',
                    type: 'get',
                    data: {
                        limit: this.limit
                    },
                    success: (data) => {
                        this.posts = data.posts;
                        this.total = data.total;
                    }
                });
            },
            getMorePosts (e) {
                e.preventDefault();
                this.limit = this.limit + this.limit;
                this.getPosts();
            }
        },

        mounted() {
            this.getPosts();
            setInterval(() => {
                this.getPosts();
            },10000);
        }
    }
</script>

<style lang="scss">
    .expand {
        -webkit-transition: all .5s ease;
        -moz-transition: all .5s ease;
        -ms-transition: all .5s ease;
        -o-transition: all .5s ease;
        transition: all .5s ease;
        height: auto;
        overflow: hidden;
    }
    
    .expand-transition {
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        height: auto;
        overflow: hidden;
    }

    .expand-enter, .expand-leave {
        height: 0;
        padding: 0 20px;
        opacity: 0;
    }
</style>