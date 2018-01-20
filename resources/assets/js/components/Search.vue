<template>
    <form class="navbar-form navbar-left" action="#" @submit.prevent="send">
        <input type="text" class="form-control" placeholder="Search users..." name="users" id="users">
    </form>
</template>

<script>

    import { userautocomplete } from "../helpers/autocomplete.js";

    export default {
        methods: {
            send () {
                console.log('Search')
            }
        },
        mounted() {
            userautocomplete('#users', {
                hitsPerPage: 10
            }).on('autocomplete:selected', (e, selection) => {
                window.location.replace('/u/' + selection.username)
            })
        }
    }
</script>

<style lang="scss">

    .algolia-autocomplete {
        width: 100%;
    }
    .algolia-autocomplete .aa-input, .algolia-autocomplete .aa-hint {
        width: 100%;
    }
    .algolia-autocomplete .aa-hint {
        color: #999;
    }
    .algolia-autocomplete .aa-dropdown-menu {
        width: 100%;
        background-color: #fff;
        border: 1px solid #999;
        border-top: none;
    }
    .algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
        cursor: pointer;
        padding: 5px 4px;
    }
    .algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
        background-color: #B2D7FF;
    }
    .algolia-autocomplete .aa-dropdown-menu .aa-suggestion em {
        font-weight: bold;
        font-style: normal;
    }



</style>