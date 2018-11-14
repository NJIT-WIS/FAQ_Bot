<template>
    <v-app id="keep">
        <navigation></navigation>
        <v-content style="display: flex; justify-content: center; align-items: center;">
            <!--<login></login>-->
            <passRecover></passRecover>
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
    import PassRecover from "./views/PassRecover.vue";
    //import NotFound from "./views/NotFound.vue";
    export default {
        components: {
            navigation: Navigation,
            login: Login,
            register: Register,
            passRecover: PassRecover
        }
    };
</script>