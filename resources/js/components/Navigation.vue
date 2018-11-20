<template>
    <div>
        <v-navigation-drawer
                v-model="drawer"
                fixed
                clipped
                class="grey lighten-4"
                app
        >
            <v-list
                    dense
                    class="grey lighten-4"
            >
                <template v-for="(item, i) in navItems">
                    <v-divider
                            v-if="item.divider"
                            :key="i"
                            dark
                            class="my-3"
                    ></v-divider>
                    <v-list-tile
                            v-else
                            :key="i"
                    >
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title class="black--text body-2">
                                {{ item.text }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </template>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar color="blue-grey" app absolute clipped-left>
            <v-toolbar-side-icon @click.native="drawer = !drawer" class="white--text"></v-toolbar-side-icon>
            <span class="title ml-3 mr-5 white--text">FAQBot</span>
            <v-text-field
                    solo-inverted
                    flat
                    hide-details
                    label="Search"
                    prepend-inner-icon="search"
                    class="white--text"
            ></v-text-field>
            <v-spacer></v-spacer>
        </v-toolbar>
    </div>
</template>

<script>
    export default {
        data: () => ({
            drawer: null,
            navItems: [
                { icon: "home", text: "Home", href: "/" },
                { divider: true },
                { icon: "question_answer", text: "NJIT FAQ Bot", href: "/" },
                { icon: "info", text: "About", href: "/" }
            ]
        })
    };
</script>

