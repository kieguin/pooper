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
                <div class="media" v-for="post in posts" track-by="id">
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
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                post: '',
                posts: []
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
            }
        }
    }
</script>