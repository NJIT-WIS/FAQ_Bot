<template>
    <v-app id="keep">
        <navigation></navigation>
        <v-content>
            <login></login>
            <!-- <register></register> -->
            <!-- <not-found></not-found> -->
        </v-content>
    </v-app>
</template>

<script>
    /**
     * To start working on your Vue.js component,
     * uncomment it from the template tag above and
     * comment all other irrelevant components
     */
    import Navigation from "./components/Navigation.vue";
    import Login from "./views/Login.vue";
    import Register from "./views/Register.vue";
    //import NotFound from "./views/NotFound.vue";
    export default {
        components: {
            navigation: Navigation,
            login: Login,
            register: Register
        }
    };
</script>