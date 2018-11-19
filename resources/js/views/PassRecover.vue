<template>
    <v-card
            color="blue-grey darken-1"
            dark
            style="width: 65%; height: 95%; margin: 0 auto;"
    >
        <v-layout wrap class="text-md-center display-1 font-weight-medium" style="padding: 2rem; display: flex; justify-content: center;" >
            Password Reset
        </v-layout>

        <v-layout wrap class="text-md-center title font-weight-regular" style="margin: 0 6rem 0 6rem; display: flex; justify-content: center;" >
            Please enter your password and we will send you instruction on how to reset your password
        </v-layout>

        <v-form style="padding: 2rem;">
            <v-container>
                <v-layout wrap>
                    <v-flex xs12 >
                        <v-text-field
                                v-model="Email"
                                :disabled="isUpdating"
                                box
                                color="blue-grey lighten-2"
                                label="Email"
                        ></v-text-field>
                    </v-flex>

                </v-layout>
            </v-container>
            <div style="width: 100%; display:flex; justify-content: center; align-items: center; ">
            <v-btn large>Submit</v-btn>
            </div>
        </v-form>
        <v-divider></v-divider>
        <div>

        </div>
    </v-card>
</template>

<script>
    export default {

    }
</script>

<codepen-resources lang="json">
    {
    "css": ["https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css"]
    }
</codepen-resources>
