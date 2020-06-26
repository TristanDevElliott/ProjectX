<template>
    <div class="dropdown">
        <a href="#" v-on:click="toggleContent" class="block py-3 px-3 hover:bg-gray-400 text-gray-600 hover:text-gray-800">{{ dropdownTitle }}</a>
        <div v-show="showContent" class="dropdown-menu bg-white shadow w-64 animate slideInDown">
            <span class="block hover:bg-gray-300"><a v-bind:href="`${ linkUrl }`" class="px-3 py-3 block text-gray-600 hover:text-gray-800"><i class="fa fa-link mr-2 bg-gray-400 p-2 rounded-full"></i>{{ linkTitle }}</a></span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Dropdown",
        props: [
            'dropdownTitle',
            'linkUrl',
            'linkTitle'
        ],
        data () {
            return {
                showContent: false
            }
        },
        methods: {
            toggleContent() {
                if(this.showContent === false) {
                    this.showContent = true;
                } else {
                    this.showContent = false;
                }
            }
        }
    }
</script>

<style scoped>
    .dropdown .dropdown-menu {
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
    }
    .dropdown .dropdown-menu a:hover {
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
    }
    .dropdown .dropdown-menu span:hover:last-child {
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
    }
</style>
