<template>
    <div class="posts">
        <div class="media" v-for="post in posts" track-by="id">
            <div class="media-left">
                <img class="media-object">
            </div>
            <div class="media-body">
                <div class="user">
                    <a href=""><strong>{{ post.user.username }}</strong></a>
                </div>
                <p>{{ post.body }}</p>
            </div>
        </div>
    </div>
</template>