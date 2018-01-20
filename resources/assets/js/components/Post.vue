<template>
    <div class="col-md-4">
        <form action="#" v-on:submit="postStatus">
            <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Cry about something..." maxlength="140" required v-model="post"></textarea>
            </div>
            <input type="submit" value="Post" class="btn btn-default btn-block">
        </form>
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
                    }
                }).ajaxSuccess((data) => {
                    this.post = '';
                    this.posts.unshift(data);
                });
            }
        }
    }
</script>