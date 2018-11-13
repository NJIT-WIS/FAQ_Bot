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
                            <v-list-tile-title class="grey--text">
                                {{ item.text }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </template>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar color="amber" app absolute clipped-left>
            <v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
            <span class="title ml-3 mr-5">FAQBot</span>
            <v-text-field
                    solo-inverted
                    flat
                    hide-details
                    label="Search"
                    prepend-inner-icon="search"
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

